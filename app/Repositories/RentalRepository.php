<?php

namespace App\Repositories;

use App\Models\Rental;
use App\Repositories\Interfaces\RentalRepositoryInterface;

class RentalRepository implements RentalRepositoryInterface
{
    public function getAll()
    {
        return Rental::latest('id')->paginate(10);
    }

    public function getById(int $id)
    {
        return Rental::findOrFail($id);
    }

    public function create(array $data)
    {
        return Rental::createRental($data);
    }

    public function update(int $id, array $data)
    {
        return Rental::updateRental($id, $data);
    }

    public function destroy(int $id)
    {
        return Rental::destroyRental($id);
    }

    public function carBook(array $data)
    {
        return Rental::carBookRental($data);
    }
}
