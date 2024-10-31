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

// Create
Route::get('/trains/create', [TrainController::class, 'create'])->name('trains.create');

// Store
Route::post('/trains', [TrainController::class, 'store'])->name('trains.store');

// Index
Route::get('/trains', [TrainController::class, 'index'])->name('trains.index');

// Show
Route::get('/trains/{id}', [TrainController::class, 'show'])->name('trains.show');

// Edit
Route::get('/trains/{id}/edit', [TrainController::class, 'edit'])->name('trains.edit');

// Update
Route::put('/trains/{id}', [TrainController::class, 'update'])->name('trains.update');
