<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\RentalRepositoryInterface;

class RentalController extends Controller
{
    public function __construct(protected RentalRepositoryInterface $rentalInterface)
    {
        $this->rentalInterface = $rentalInterface;
    }


    public function CarBookPage(Request $request)
    {
        $response = $this->rentalInterface->carBook($request->all());

        if (!$response['status']) {
            return response()->json(['error' => $response['message']], 400);
        }

        return response()->json($response['data']);
    }
}
