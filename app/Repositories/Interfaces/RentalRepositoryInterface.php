<?php

namespace App\Repositories\Interfaces;

interface RentalRepositoryInterface
{
    public function getAll();

    public function getById(int $id);

    public function create(array $data);

    public function update(int $id, array $data);

    public function destroy(int $id);

    public function carBook(array $data);
    public function rentalStatus(int $id);
}
