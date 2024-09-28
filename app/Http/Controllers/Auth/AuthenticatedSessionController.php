<?php

namespace App\Http\Controllers\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;
use RealRashid\SweetAlert\Facades\Alert;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {

        if (Auth::check()) {
            if (Auth::user()->role == 'admin') {
                return redirect()->route('dashboardPage');
            } elseif (Auth::user()->role == 'customer') {
                return redirect()->route('customer.dashboard');
            }
        }

        return view('pages.frontend.auth.login-page');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        try {
            if (Auth::check()) {
                if (Auth::user()->role == 'admin') {
                    Alert::success('Success', 'Welcome! You have successfully logged in');
                    return redirect()->route('dashboardPage');
                } else {
                    Alert::success('Success', 'Welcome! You have successfully logged in');
                    return redirect()->route('customer.dashboard');
                }
            } else {
                Auth::logout();
                return redirect()->back()->with(['error' => 'Invalid account status'])->withInput($request->only('email'));
            }
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => 'Someting wrong process.']);
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
