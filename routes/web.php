<?php

use App\Http\Controllers\TrainController;
use Illuminate\Support\Facades\Route;

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

// Homepage
Route::get('/', function() {
    return view('pages.home-page');
})->name('homepage');

// Trains
Route::name('trains.')->group(function() {
    // Create
    Route::get('/trains/create', [TrainController::class, 'create'])->name('create');
    // Store
    Route::post('/trains', [TrainController::class, 'store'])->name('store');
    // Index
    Route::get('/trains', [TrainController::class, 'index'])->name('index');
    // Show
    Route::get('/trains/{id}', [TrainController::class, 'show'])->name('show');
    // Edit
    Route::get('/trains/{id}/edit', [TrainController::class, 'edit'])->name('edit');
    // Update
    Route::put('/trains/{id}', [TrainController::class, 'update'])->name('update');
    // Delete
    Route::delete('trains/{id}', [TrainController::class, 'destroy'])->name('delete');
});
