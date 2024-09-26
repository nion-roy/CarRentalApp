<?php

namespace App\Models;

use Intervention\Image\ImageManager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
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
        $car = self::create([
            'name' => $requestData['name'],
            'brand' => $requestData['brand'],
            'model' => $requestData['model'],
            'year' => $requestData['year'],
            'car_type' => $requestData['car_type'],
            'daily_rent_price' => $requestData['daily_rent_price'],
            'availability' => $requestData['availability'],
            'image' => self::carImage($requestData) ?? 'car.png',
        ]);

        return $car;
    }

    public static function updateCar($id, $requestData)
    {
        $car = self::find($id);
        $car->name = $requestData['name'];
        $car->brand = $requestData['brand'];
        $car->model = $requestData['model'];
        $car->year = $requestData['year'];
        $car->car_type = $requestData['car_type'];
        $car->daily_rent_price = $requestData['daily_rent_price'];
        $car->availability = $requestData['availability'];
        $car->image = self::carImage($requestData, $car) ?? $car->image; // keep old image if no new one
        $car->save();

        return $car;
    }



    public static function destroyCar($id)
    {
        $car = self::find($id);

        // Unlink image when delete team
        if ($car->image && file_exists(public_path( $car->image))) {
            unlink(public_path( $car->image));
        }

        $car->delete();

        return $car;
    }


    public static function carImage($requestData, $car = null)
    {

        if (isset($requestData['image'])) {
            $image = $requestData['image'];
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();

            // Unlink image when image update
            if ($car->image && file_exists(public_path($car->image))) {
                unlink(public_path($car->image));
            }

            // Save original image
            $image->move(public_path('storage/cars'), $imageName);

            // create new manager instance with desired driver
            $imgManager = new ImageManager(new Driver());
            $imagePath = $imgManager->read(public_path('storage/cars/') . $imageName);

            // Resize image
            $imagePath->resize(1200, 600);
            $imagePath->save();

            return 'storage/cars/' . $imageName;
        }
    }
}
