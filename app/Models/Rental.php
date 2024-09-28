<?php

namespace App\Models;

use App\Mail\NewOrder;
use App\Mail\OrderInvoice;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'car_id',
        'start_date',
        'end_date',
        'total_cost',
    ];

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }



    public static function createRental($requestData)
    {
        $rental = self::create([
            'user_id' => $requestData['user'],
            'car_id' => $requestData['car'],
            'start_date' => $requestData['start_date'],
            'end_date' => $requestData['end_date'],
            'total_cost' => self::calculateRentalCost($requestData['car'], $requestData['start_date'], $requestData['end_date']),
        ]);

        return $rental;
    }

    public static function updateRental($id, $requestData)
    {
        $rental = self::find($id);
        $rental->update([
            'user_id' => $requestData['user'],
            'car_id' => $requestData['car'],
            'start_date' => $requestData['start_date'],
            'end_date' => $requestData['end_date'],
            'total_cost' => self::calculateRentalCost($requestData['car'], $requestData['start_date'], $requestData['end_date']),
        ]);

        return $rental;
    }



    public static function destroyRental($id)
    {
        $rental = self::find($id)->delete();
        return $rental;
    }


    public static function carBookRental($requestData)
    {
        if (!Auth::user()) {
            return ['status' => false, 'message' => 'Please login and try again'];
        }

        $carID = $requestData['car'];
        $startDate = Carbon::parse($requestData['pick_up_date']);
        $endDate = Carbon::parse($requestData['return_date']);

        // Check for existing bookings for the car in the requested date range
        $existingBooking = Rental::where('car_id', $carID)
            ->where(function ($query) use ($startDate, $endDate) {
                $query->whereBetween('start_date', [$startDate, $endDate])
                    ->orWhereBetween('end_date', [$startDate, $endDate]);
            })
            ->exists();

        if ($existingBooking) {
            return ['status' => false, 'message' => 'The car is already booked for the selected dates.'];
        }

        // Create a new rental record
        $rental = new Rental();
        $rental->user_id = Auth::user()->id;
        $rental->car_id = $carID;
        $rental->start_date = $startDate->format('Y-m-d');
        $rental->end_date = $endDate->format('Y-m-d');
        $rental->total_cost = self::calculateRentalCost($carID, $startDate, $endDate);
        $rental->save();

        // Send an email notification to the user about the rental booking
        Mail::to(Auth::user()->email)->send(new OrderInvoice($rental));

        // Send an email notification to the admin about the rental booking
        Mail::to(Auth::user()->email)->send(new NewOrder($rental));

        return ['status' => true, 'data' => $rental];
    }



    public static function calculateRentalCost($carID, $startDate, $endDate)
    {
        // Fetch the car details
        $car = Car::findOrFail($carID);
        $dailyRentPrice = $car->daily_rent_price;

        // Parse the dates as Carbon instances
        $startDate = Carbon::parse($startDate);
        $endDate = Carbon::parse($endDate);

        // Calculate the number of days between start and end dates, including the end date
        $numberOfDays = $startDate->diffInDays($endDate);

        // Calculate the total rental cost
        $totalCost = $numberOfDays * $dailyRentPrice;

        return $totalCost;
    }



    public static function rentalStatus($id)
    {
        $order = self::findOrFail($id);

        if ($order->user_id != Auth::user()->id) {
            return ['status' => false, 'message' => 'You cannot cancel this order'];
        }

        $order->status = 2;

        $order->update();
        return ['status' => true, 'message' => 'Order has been cancelled successfully'];
    }
}
