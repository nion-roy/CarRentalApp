<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rental;
use Carbon\Carbon;

class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $rentals = [
            [
                'user_id' => 1,
                'car_id' => 1,
                'start_date' => Carbon::now()->subDays(10),
                'end_date' => Carbon::now()->subDays(5),
                'total_cost' => 250.00,
                'created_at' => Carbon::now()->subDays(10),
                'updated_at' => Carbon::now()->subDays(5),
            ],
            [
                'user_id' => 2,
                'car_id' => 2,
                'start_date' => Carbon::now()->subDays(8),
                'end_date' => Carbon::now()->subDays(4),
                'total_cost' => 160.00,
                'created_at' => Carbon::now()->subDays(8),
                'updated_at' => Carbon::now()->subDays(4),
            ],
            [
                'user_id' => 3,
                'car_id' => 3,
                'start_date' => Carbon::now()->subDays(7),
                'end_date' => Carbon::now()->subDays(1),
                'total_cost' => 600.00,
                'created_at' => Carbon::now()->subDays(7),
                'updated_at' => Carbon::now()->subDays(1),
            ],
            [
                'user_id' => 4,
                'car_id' => 4,
                'start_date' => Carbon::now()->subDays(15),
                'end_date' => Carbon::now()->subDays(13),
                'total_cost' => 90.00,
                'created_at' => Carbon::now()->subDays(15),
                'updated_at' => Carbon::now()->subDays(13),
            ],
            [
                'user_id' => 5,
                'car_id' => 5,
                'start_date' => Carbon::now()->subDays(2),
                'end_date' => Carbon::now(),
                'total_cost' => 160.00,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now(),
            ],
            [
                'user_id' => 6,
                'car_id' => 6,
                'start_date' => Carbon::now()->subDays(14),
                'end_date' => Carbon::now()->subDays(9),
                'total_cost' => 450.00,
                'created_at' => Carbon::now()->subDays(14),
                'updated_at' => Carbon::now()->subDays(9),
            ],
            [
                'user_id' => 7,
                'car_id' => 7,
                'start_date' => Carbon::now()->subDays(6),
                'end_date' => Carbon::now()->subDays(3),
                'total_cost' => 255.00,
                'created_at' => Carbon::now()->subDays(6),
                'updated_at' => Carbon::now()->subDays(3),
            ],
            [
                'user_id' => 8,
                'car_id' => 8,
                'start_date' => Carbon::now()->subDays(11),
                'end_date' => Carbon::now()->subDays(7),
                'total_cost' => 200.00,
                'created_at' => Carbon::now()->subDays(11),
                'updated_at' => Carbon::now()->subDays(7),
            ],
            [
                'user_id' => 9,
                'car_id' => 9,
                'start_date' => Carbon::now()->subDays(4),
                'end_date' => Carbon::now()->subDays(2),
                'total_cost' => 240.00,
                'created_at' => Carbon::now()->subDays(4),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'user_id' => 10,
                'car_id' => 10,
                'start_date' => Carbon::now()->subDays(12),
                'end_date' => Carbon::now()->subDays(6),
                'total_cost' => 360.00,
                'created_at' => Carbon::now()->subDays(12),
                'updated_at' => Carbon::now()->subDays(6),
            ],
            [
                'user_id' => 11,
                'car_id' => 11,
                'start_date' => Carbon::now()->subDays(9),
                'end_date' => Carbon::now()->subDays(3),
                'total_cost' => 210.00,
                'created_at' => Carbon::now()->subDays(9),
                'updated_at' => Carbon::now()->subDays(3),
            ],
            [
                'user_id' => 12,
                'car_id' => 12,
                'start_date' => Carbon::now()->subDays(7),
                'end_date' => Carbon::now()->subDays(2),
                'total_cost' => 290.00,
                'created_at' => Carbon::now()->subDays(7),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'user_id' => 13,
                'car_id' => 13,
                'start_date' => Carbon::now()->subDays(5),
                'end_date' => Carbon::now()->subDays(1),
                'total_cost' => 185.00,
                'created_at' => Carbon::now()->subDays(5),
                'updated_at' => Carbon::now()->subDays(1),
            ],
            [
                'user_id' => 14,
                'car_id' => 14,
                'start_date' => Carbon::now()->subDays(10),
                'end_date' => Carbon::now()->subDays(4),
                'total_cost' => 275.00,
                'created_at' => Carbon::now()->subDays(10),
                'updated_at' => Carbon::now()->subDays(4),
            ],
            [
                'user_id' => 15,
                'car_id' => 15,
                'start_date' => Carbon::now()->subDays(14),
                'end_date' => Carbon::now()->subDays(9),
                'total_cost' => 220.00,
                'created_at' => Carbon::now()->subDays(14),
                'updated_at' => Carbon::now()->subDays(9),
            ],
            [
                'user_id' => 16,
                'car_id' => 16,
                'start_date' => Carbon::now()->subDays(6),
                'end_date' => Carbon::now()->subDays(2),
                'total_cost' => 320.00,
                'created_at' => Carbon::now()->subDays(6),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'user_id' => 17,
                'car_id' => 17,
                'start_date' => Carbon::now()->subDays(8),
                'end_date' => Carbon::now()->subDays(5),
                'total_cost' => 195.00,
                'created_at' => Carbon::now()->subDays(8),
                'updated_at' => Carbon::now()->subDays(5),
            ],
            [
                'user_id' => 18,
                'car_id' => 18,
                'start_date' => Carbon::now()->subDays(11),
                'end_date' => Carbon::now()->subDays(7),
                'total_cost' => 300.00,
                'created_at' => Carbon::now()->subDays(11),
                'updated_at' => Carbon::now()->subDays(7),
            ],
            [
                'user_id' => 19,
                'car_id' => 19,
                'start_date' => Carbon::now()->subDays(9),
                'end_date' => Carbon::now()->subDays(4),
                'total_cost' => 225.00,
                'created_at' => Carbon::now()->subDays(9),
                'updated_at' => Carbon::now()->subDays(4),
            ],
            [
                'user_id' => 20,
                'car_id' => 20,
                'start_date' => Carbon::now()->subDays(10),
                'end_date' => Carbon::now()->subDays(3),
                'total_cost' => 420.00,
                'created_at' => Carbon::now()->subDays(10),
                'updated_at' => Carbon::now()->subDays(3),
            ],
        ];

        // Seed the rental data
        foreach ($rentals as $rental) {
            Rental::create($rental);
        }
    }
}
