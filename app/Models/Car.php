<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'brand',
        'model',
        'year',
        'car_type',
        'daily_rent_price',
        'availability',
        'image'
    ];

    public function isAdmin()
    {
        return $this->role === 'admin';
    }
    public function isCustomer()
    {
        return $this->role === 'customer';
    }
    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }


    public static function createCar($requestData)
    {

        // Upload and resize the image
        $imageName = isset($requestData['image']) ? uploadAndResizeImage($requestData['image'], 'cars', 1920, 1080) : 'car.png';

        $car = self::create([
            'name' => $requestData['name'],
            'brand' => $requestData['brand'],
            'model' => $requestData['model'],
            'year' => $requestData['year'],
            'car_type' => $requestData['car_type'],
            'daily_rent_price' => $requestData['daily_rent_price'],
            'availability' => $requestData['availability'],
            'image' => $imageName,
        ]);

        return $car;
    }

    public static function updateCar($id, $requestData)
    {

        $car = self::find($id);

        $imageName = $car->image; // Use existing image name as default
        if (isset($requestData['image'])) {
            $imageName = uploadAndResizeImage($requestData['image'], 'cars', 1920, 1080, $imageName); // Upload and resize the new image, and unlink the old image
        }
        $car->update([
            'name' => $requestData['name'],
            'brand' => $requestData['brand'],
            'model' => $requestData['model'],
            'year' => $requestData['year'],
            'car_type' => $requestData['car_type'],
            'daily_rent_price' => $requestData['daily_rent_price'],
            'availability' => $requestData['availability'],
            'image' => $imageName,
        ]);

        return $car;
    }



    public static function destroyCar($id)
    {
        $car = self::find($id);
        deleteImage($car->image);
        $car->delete();

        return $car;
    }
}
