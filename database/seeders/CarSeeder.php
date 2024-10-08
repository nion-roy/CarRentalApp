<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $cars = [

            [
                'name' => 'Toyota Camry',
                'brand' => 'Toyota',
                'model' => 'Camry',
                'year' => 2022,
                'car_type' => 'SUV',
                'daily_rent_price' => 50.00,
                'availability' => true,
                'image' => 'car.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Honda Civic',
                'brand' => 'Honda',
                'model' => 'Civic',
                'year' => 2021,
                'car_type' => 'Sedan',
                'daily_rent_price' => 40.00,
                'availability' => true,
                'image' => 'car.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Ford Mustang',
                'brand' => 'Ford',
                'model' => 'Mustang',
                'year' => 2020,
                'car_type' => 'Coupe',
                'daily_rent_price' => 100.00,
                'availability' => true,
                'image' => 'car.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Chevrolet Malibu',
                'brand' => 'Chevrolet',
                'model' => 'Malibu',
                'year' => 2019,
                'car_type' => 'SUV',
                'daily_rent_price' => 45.00,
                'availability' => true,
                'image' => 'car.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'BMW 3 Series',
                'brand' => 'BMW',
                'model' => '3 Series',
                'year' => 2021,
                'car_type' => 'SUV',
                'daily_rent_price' => 80.00,
                'availability' => true,
                'image' => 'car.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mercedes-Benz C-Class',
                'brand' => 'Mercedes-Benz',
                'model' => 'C-Class',
                'year' => 2022,
                'car_type' => 'Sedan',
                'daily_rent_price' => 90.00,
                'availability' => true,
                'image' => 'car.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Audi A4',
                'brand' => 'Audi',
                'model' => 'A4',
                'year' => 2020,
                'car_type' => 'Sedan',
                'daily_rent_price' => 85.00,
                'availability' => true,
                'image' => 'car.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Nissan Altima',
                'brand' => 'Nissan',
                'model' => 'Altima',
                'year' => 2021,
                'car_type' => 'Sedan',
                'daily_rent_price' => 55.00,
                'availability' => true,
                'image' => 'car.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Tesla Model 3',
                'brand' => 'Tesla',
                'model' => 'Model 3',
                'year' => 2022,
                'car_type' => 'SUV',
                'daily_rent_price' => 120.00,
                'availability' => true,
                'image' => 'car.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Hyundai Elantra',
                'brand' => 'Hyundai',
                'model' => 'Elantra',
                'year' => 2020,
                'car_type' => 'SUV',
                'daily_rent_price' => 40.00,
                'availability' => true,
                'image' => 'car.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Kia Optima',
                'brand' => 'Kia',
                'model' => 'Optima',
                'year' => 2021,
                'car_type' => 'Sedan',
                'daily_rent_price' => 45.00,
                'availability' => true,
                'image' => 'car.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Toyota Corolla',
                'brand' => 'Toyota',
                'model' => 'Corolla',
                'year' => 2019,
                'car_type' => 'Sedan',
                'daily_rent_price' => 35.00,
                'availability' => true,
                'image' => 'car.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Honda Accord',
                'brand' => 'Honda',
                'model' => 'Accord',
                'year' => 2022,
                'car_type' => 'SUV',
                'daily_rent_price' => 50.00,
                'availability' => true,
                'image' => 'car.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mazda 3',
                'brand' => 'Mazda',
                'model' => '3',
                'year' => 2021,
                'car_type' => 'Sedan',
                'daily_rent_price' => 40.00,
                'availability' => true,
                'image' => 'car.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Volkswagen Passat',
                'brand' => 'Volkswagen',
                'model' => 'Passat',
                'year' => 2020,
                'car_type' => 'Sedan',
                'daily_rent_price' => 50.00,
                'availability' => true,
                'image' => 'car.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Subaru Impreza',
                'brand' => 'Subaru',
                'model' => 'Impreza',
                'year' => 2019,
                'car_type' => 'Sedan',
                'daily_rent_price' => 45.00,
                'availability' => true,
                'image' => 'car.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Jaguar XF',
                'brand' => 'Jaguar',
                'model' => 'XF',
                'year' => 2021,
                'car_type' => 'SUV',
                'daily_rent_price' => 110.00,
                'availability' => true,
                'image' => 'car.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Lexus ES',
                'brand' => 'Lexus',
                'model' => 'ES',
                'year' => 2022,
                'car_type' => 'Sedan',
                'daily_rent_price' => 95.00,
                'availability' => true,
                'image' => 'car.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Acura TLX',
                'brand' => 'Acura',
                'model' => 'TLX',
                'year' => 2021,
                'car_type' => 'Sedan',
                'daily_rent_price' => 85.00,
                'availability' => true,
                'image' => 'car.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Porsche 911',
                'brand' => 'Porsche',
                'model' => '911',
                'year' => 2020,
                'car_type' => 'Coupe',
                'daily_rent_price' => 200.00,
                'availability' => true,
                'image' => 'car.png',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

        ];

        // Seed the data
        foreach ($cars as $car) {
            Car::create($car);
        }
    }
}
