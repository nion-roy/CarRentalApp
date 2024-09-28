<?php

use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

// Str Pad Left Function
if (!function_exists('getStrPad')) {
    function getStrPad($value)
    {
        return str_pad($value, 2, '0', STR_PAD_LEFT);
    }
}
// Str Pad Left Function



// New Image Add & Update Helper Function
if (!function_exists('uploadAndResizeImage')) {
    function uploadAndResizeImage($image, $path, $width, $height, $oldImage = null)
    {
        if ($image) {
            // Generate a unique name for the new image
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();

            // Save the new image
            $image->move(public_path('storage/' . $path), $imageName);

            // Unlink the old image if it exists
            if ($oldImage && file_exists(public_path($oldImage))) {
                unlink(public_path($oldImage));
            }

            // Create a new ImageManager instance and resize the image
            $imgManager = new ImageManager(new Driver());
            $imagePath = $imgManager->read(public_path('storage/' . $path . '/' . $imageName));

            // Resize the image
            $imagePath->resize($width, $height);
            $imagePath->save(public_path('storage/' . $path . '/' . $imageName));

            return 'storage/' . $path . '/' . $imageName;
        }

        // Return the old image name if no new image is provided
        return $oldImage ?? 'testimonial.png';
    }
}
// New Image Add & Update Helper Function


// Image Delete Helper Function
if (!function_exists('deleteImage')) {
    function deleteImage($image)
    {
        if ($image) {
            if ($image && file_exists(public_path($image))) {
                unlink(public_path($image)); // Unlink the old image if it exists
            }
        }
    }
}
// Image Delete Helper Function


// Get Cars To Database
if (!function_exists('getNumberOfDayCounts')) {
    function getNumberOfDayCounts($startDate, $endDate)
    {
        // Parse the dates as Carbon instances
        $startDate = Carbon\Carbon::parse($startDate);
        $endDate = Carbon\Carbon::parse($endDate);

        // Calculate the number of days between start and end dates, including the end date
        $numberOfDays = $startDate->diffInDays($endDate);
        return $numberOfDays;
    }
}
// Get Cars To Database


// Get Cars To Database
if (!function_exists('getCars')) {
    function getCars()
    {
        return App\Models\Car::where('availability', 1)->latest('id')->paginate(9);
    }
}
// Get Cars To Database

// Get Orders To Database
if (!function_exists('getOrders')) {
    function getOrders()
    {
        return App\Models\Rental::where('user_id', Auth::id())->latest('id')->get();
    }
}
// Get Orders To Database


// Assuming getCars() is a helper or part of a controller method
function getCarTypes()
{
    // Group cars by 'car_type' and return
    return \App\Models\Car::where('availability', 1)->groupBy('car_type')->get();
}
