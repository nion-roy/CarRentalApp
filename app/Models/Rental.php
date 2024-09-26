<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'car_id','start_date', 'end_date', 'total_cost',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }



    public static function createRental($requestData)
    {
        $rental = self::create([
            'user_id' => $requestData['user'],
            'car_id' => $requestData['car'],
            'start_date' => $requestData['start_date'],
            'end_date' => $requestData['end_date'],
            'total_cost' => $requestData['total_cost'],
        ]);

        return $rental;
    }

    public static function updateRental($id, $requestData)
    {
        // Define the condition to check if the rental exists by ID
        $rental = self::updateOrCreate(
            ['id' => $id],  // Condition to update if rental exists
            [
                'user_id' => $requestData['user'],
                'car_id' => $requestData['car'],
                'start_date' => $requestData['start_date'],
                'end_date' => $requestData['end_date'],
                'total_cost' => $requestData['total_cost'],
            ]
        );

        return $rental;
    }



    public static function destroyRental($id)
    {
        $rental = self::find($id)->delete();
        return $rental;
    }
}
