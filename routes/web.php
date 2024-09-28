<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\Frontend\PageController::class, 'HomePage'])->name('HomePage');
Route::get('about-us', [App\Http\Controllers\Frontend\PageController::class, 'AboutPage'])->name('AboutPage');
Route::get('blog', [App\Http\Controllers\Frontend\PageController::class, 'BlogPage'])->name('BlogPage');
Route::get('contact-us', [App\Http\Controllers\Frontend\PageController::class, 'ContactPage'])->name('ContactPage');
Route::get('cars', [App\Http\Controllers\Frontend\CarController::class, 'CarPage'])->name('CarPage');
Route::get('car-details/{id}', [App\Http\Controllers\Frontend\CarController::class, 'CarDetail'])->name('CarDetail');
Route::post('car-book', [App\Http\Controllers\Frontend\RentalController::class, 'CarBookPage'])->name('CarBookPage');



Route::group(['as' => 'customer.', 'prefix' => 'customer', 'middleware' => ['role:customer']], function () {
    Route::get('dashboard', [App\Http\Controllers\Frontend\DashboardController::class, 'dashboardPage'])->name('dashboard');
    Route::get('logout', [App\Http\Controllers\Frontend\DashboardController::class, 'logout'])->name('logout');
    Route::get('profile', [App\Http\Controllers\Frontend\DashboardController::class, 'profilePage'])->name('profile');
    Route::post('profile-update', [App\Http\Controllers\Frontend\DashboardController::class, 'profileUpdatePage'])->name('profile.update');
    Route::get('orders', [App\Http\Controllers\Frontend\DashboardController::class, 'orderPage'])->name('orders');
    Route::get('order-cancel/{id}', [App\Http\Controllers\Frontend\RentalController::class, 'orderCancelPage'])->name('order.cancel');
});


Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['role:admin']], function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('dashboard');

    Route::resource('cars', App\Http\Controllers\Admin\CarController::class);
    Route::resource('rentals', App\Http\Controllers\Admin\RentalController::class);
    Route::post('rental-status/{id}', [App\Http\Controllers\Admin\RentalController::class, 'status'])->name('rental-status');
    Route::resource('customers', App\Http\Controllers\Admin\CustomerController::class);
    Route::get('rental-histories/{id}', [App\Http\Controllers\Admin\CustomerController::class, 'rentalHistory'])->name('rental-histories');;

    Route::post('logout', [App\Http\Controllers\Admin\DashboardController::class, 'logout'])->name('logout');
});

require __DIR__ . '/auth.php';
