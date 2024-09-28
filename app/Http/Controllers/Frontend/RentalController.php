<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Rental;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
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


    public function orderCancelPage(int $id)
    {

        $response = $this->rentalInterface->rentalStatus($id);

        if (!$response['status']) {
            return response()->json(['error' => $response['message']], 400);
        }

        Alert::success('Success', 'Order has been cancelled successfully');
        return redirect()->back();

        // try {
        //     $order = Rental::where('status', 1)->first();

        //     if ($order->user_id != Auth::user()->id) {
        //         Alert::error('Error', 'You cannot cancel this order');
        //     }

        //     $order->status = 0;
        //     Alert::success('Success', 'Order has been cancelled successfully');

        //     $order->save();
        //     return redirect()->back();
        // } catch (\Exception $e) {
        //     Alert::error('Error', 'Failed to cancel the order');
        //     return redirect()->back();
        // }
    }
}
