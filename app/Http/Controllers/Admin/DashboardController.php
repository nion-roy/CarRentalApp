<?php

namespace App\Http\Controllers\Admin;

use App\Models\Car;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Rental;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $customers = User::where('role', 'customer')->latest()->get();
        $car = Car::count();
        $availableCar = Car::where('availability', 1)->count();
        $rentals = Rental::latest()->get();
        return view('pages.backend.dashboard-page', compact('customers', 'car', 'availableCar', 'rentals'));
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        Alert::success('Success', 'Your Account has been logged out');
        return redirect()->route('login');
    }
}
