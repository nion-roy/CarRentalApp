<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Rental;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    public function dashboardPage()
    {
        return view('pages.frontend.dashboard.dashboard-page');
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        Alert::success('Success', 'Your Account has been logged out');
        return redirect()->route('login');
    }

    public function profilePage()
    {
        return view('pages.frontend.dashboard.profile-page');
    }

    public function profileUpdatePage(Request $request)
    {
        // Validate request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'password' => 'nullable|string|min:8|confirmed', // Password confirmation required
            'phone' => 'nullable|unique:users,phone,' . Auth::id(),
            'address' => 'nullable|max:255|',
        ]);

        try {
            $user = User::findOrFail(Auth::id());
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->address = $request->address;
            if ($request->filled('password')) {
                $user->password = Hash::make($request->password);
            }

            $user->save();

            // Success message using alert
            Alert::success('Success', 'Profile has been updated successfully');
            return redirect()->back();
        } catch (\Exception $e) {
            // Error handling
            Alert::error('Error', 'Failed to update profile');
            return redirect()->back()->withInput(); // Keeps input data except for password fields
        }
    }


    public function orderPage()
    {
        return view('pages.frontend.dashboard.order-page');
    }
}
