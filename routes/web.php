<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\SeatController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {


//     return view('home');
// });

Route::get('/', [TripController::class, 'home'])->name('trip.home');
Route::post('/trips/book', [TripController::class, 'showTripsByDate'])->name('trip.book');



Route::get('/seats/{tripId}', [SeatController::class, 'showSeats'])->name('seats.show');



Route::get('/dashboard', [DashboardController::class, 'dashboard'])
        ->middleware(['auth', 'verified'])
        ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/buses/create', [BusController::class, 'create'])->name('buses.create');
    Route::post('/buses/store', [BusController::class, 'storeBus'])->name('buses.store');
    Route::get('/buses/index', [BusController::class, 'index'])->name('buses.index');


    Route::get('/locations/create', [LocationController::class, 'create'])->name('locations.create');
    Route::post('/locations/store', [LocationController::class, 'store'])->name('locations.store');
    Route::get('/locations/index', [LocationController::class, 'index'])->name('locations.index');


    Route::get('/trips/index', [TripController::class, 'index'])->name('trips.index');
    Route::post('/trips/store', [TripController::class, 'store'])->name('trips.store');

    Route::get('/seat/index', [SeatController::class, 'setAlocation'])->name('seats.index');
    Route::post('/seat/store', [SeatController::class, 'store'])->name('seats.store');

    Route::post('/seats/{tripId}/book', [SeatController::class, 'bookSeat'])->name('seats.book');


});

require __DIR__.'/auth.php';
