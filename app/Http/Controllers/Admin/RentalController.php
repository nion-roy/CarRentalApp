<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use App\Models\User;
use App\Models\Rental;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RentalRequest;
use RealRashid\SweetAlert\Facades\Alert;
use App\Repositories\Interfaces\RentalRepositoryInterface;

class RentalController extends Controller
{
    public function __construct(protected RentalRepositoryInterface $rentalInterface)
    {
        $this->rentalInterface = $rentalInterface;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rentals = $this->rentalInterface->getAll();
        return view('pages.backend.rental.list-page', compact('rentals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where('role', 'customer')->latest()->get();
        $cars = Car::latest()->get();
        return view('pages.backend.rental.create-page', compact('users', 'cars'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RentalRequest $request)
    {
        $this->rentalInterface->create($request->all());
        return redirect()->back()->with('success', 'You have create new rental successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rental $rental)
    {
        $rental = $this->rentalInterface->getById($rental->id);
        $users = User::where('role', 'customer')->latest()->get();
        $cars = Car::latest()->get();
        return view('pages.backend.rental.edit-page', compact('rental', 'users', 'cars'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RentalRequest $request, Rental $rental)
    {
        $rental = $this->rentalInterface->update($rental->id, $request->validated());
        return redirect()->back()->withSuccess('You have updated rental successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rental $rental)
    {
        $this->rentalInterface->destroy($rental->id);
        return redirect()->back()->withSuccess('You have deleted rental successfully');
    }


    public function status(Request $request, $id)
    {
        $rental = $this->rentalInterface->getById($id);
        $rental->status = $request->status;
        $rental->save();
        Alert::success('Rental status updated successfully.');
        return redirect()->back();
    }
}
