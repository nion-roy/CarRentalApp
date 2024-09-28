<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CarRequest;
use App\Models\Car;
use App\Repositories\Interfaces\CarRepositoryInterface;

class CarController extends Controller
{


    public function __construct(protected CarRepositoryInterface $carInterface)
    {
        $this->carInterface = $carInterface;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = $this->carInterface->getAll();
        return view('pages.backend.car.list-page', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.backend.car.create-page');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarRequest $request)
    {
        $this->carInterface->create($request->validated());
        return redirect()->back()->with('success', 'You have created new car successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        $car = $this->carInterface->getById($car->id);
        return view('pages.backend.car.edit-page', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarRequest $request, Car $car)
    {
        $this->carInterface->update($car->id, $request->validated());
        return redirect()->back()->with('success', 'You have updated car successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $this->carInterface->destroy($car->id);
        return redirect()->back()->with('success', 'You have deleted car successfully');
    }
}
