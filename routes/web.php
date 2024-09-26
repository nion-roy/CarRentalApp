<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\Frontend\PageController::class, 'HomePage'])->name('HomePage');
Route::get('about-us', [App\Http\Controllers\Frontend\PageController::class, 'AboutPage'])->name('AboutPage');
Route::get('rentals', [App\Http\Controllers\Frontend\PageController::class, 'RentalPage'])->name('RentalPage');
Route::get('contact-us', [App\Http\Controllers\Frontend\PageController::class, 'ContactPage'])->name('ContactPage');
Route::post('car-book', [App\Http\Controllers\Frontend\RentalController::class, 'CarBookPage'])->name('CarBookPage');



Route::middleware(['role:customer'])->group(function () {
    Route::get('/customer/dashboard', [App\Http\Controllers\Frontend\PageController::class, 'dashboardPage'])->name('customer.dashboard');
    Route::post('/customer/logout', [App\Http\Controllers\Frontend\PageController::class, 'logout'])->name('customer.logout');


});


Route::middleware(['role:admin'])->group(function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'dashboardPage'])->name('dashboardPage');

    Route::resource('admin/cars', App\Http\Controllers\Admin\CarController::class);
    Route::resource('admin/rentals', App\Http\Controllers\Admin\RentalController::class);
    Route::resource('admin/customers', App\Http\Controllers\Admin\CustomerController::class);

    Route::post('/admin/logout', [App\Http\Controllers\Admin\DashboardController::class, 'logout'])->name('admin.logout');
});

require __DIR__ . '/auth.php';
