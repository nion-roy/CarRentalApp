<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'admin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Customer',
                'email' => 'customer@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'customer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'John Doe',
                'email' => 'johndoe@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'customer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'janesmith@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'customer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Michael Brown',
                'email' => 'michaelbrown@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'customer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Emily Johnson',
                'email' => 'emilyjohnson@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'customer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Chris Williams',
                'email' => 'chriswilliams@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'customer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sarah Taylor',
                'email' => 'sarahtaylor@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'customer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'David White',
                'email' => 'davidwhite@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'customer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Emma Martinez',
                'email' => 'emmamartinez@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'customer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'James Davis',
                'email' => 'jamesdavis@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'customer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Olivia Garcia',
                'email' => 'oliviagarcia@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'customer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Daniel Harris',
                'email' => 'danielharris@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'customer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sophia Clark',
                'email' => 'sophiaclark@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'customer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Liam Lewis',
                'email' => 'liamlewis@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'customer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Ava Walker',
                'email' => 'avawalker@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'customer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Noah Hall',
                'email' => 'noahhall@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'customer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mia Allen',
                'email' => 'miaallen@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'customer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Lucas Young',
                'email' => 'lucasyoung@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'customer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Isabella King',
                'email' => 'isabellaking@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'customer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'William Scott',
                'email' => 'williamscott@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'customer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Amelia Green',
                'email' => 'ameliagreen@gmail.com',
                'password' => Hash::make('12345678'),
                'role' => 'customer',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
