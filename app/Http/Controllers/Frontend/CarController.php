<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarController extends Controller
{

    public function CarPage(Request $request)
    {
        // Start a query for available cars
        $query = Car::where('availability', 1);

        // Filter by brand if it exists in the request
        if ($request->has('brand') && $request->brand != '') {
            $query->where('brand', $request->brand);
        }

        // Filter by car type if it exists in the request
        if ($request->has('car_type') && $request->car_type != '') {
            $query->where('car_type', $request->car_type);
        }

        // Filter by daily rent price if min_price or max_price exists in the request
        if ($request->has('min_price') && $request->min_price != '') {
            $query->where('daily_rent_price', '>=', $request->min_price);
        }

        if ($request->has('max_price') && $request->max_price != '') {
            $query->where('daily_rent_price', '<=', $request->max_price);
        }

        // Search for cars by name, brand, or model if a search term is provided
        if ($request->has('search') && $request->search != '') {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('brand', 'like', '%' . $searchTerm . '%')
                    ->orWhere('model', 'like', '%' . $searchTerm . '%');
            });
        }

        // Paginate the results and return to the view
        $cars = $query->latest('id')->paginate(12);

        return view('pages.frontend.car-page', compact('cars'));
    }



    public function CarDetail($id)
    {
        $car = Car::findOrFail($id);
        return view('pages.frontend.car-detail', compact('car'));
    }
}
