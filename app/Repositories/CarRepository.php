<?php

namespace App\Repositories;

use App\Models\Car;
use App\Repositories\Interfaces\CarRepositoryInterface;

class CarRepository implements CarRepositoryInterface
{
    public function getAll()
    {
        return Car::latest('id')->paginate(10);
    }

    public function getById(int $id)
    {
        return Car::findOrFail($id);
    }

    public function create(array $data)
    {
        return Car::createCar($data);
    }

    public function update(int $id, array $data)
    {
        return Car::updateCar($id, $data);
    }

    public function destroy(int $id)
    {
        return Car::destroyCar($id);
    }
}
