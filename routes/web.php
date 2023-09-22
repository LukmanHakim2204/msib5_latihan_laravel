<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UniversityController;

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

Route::get('/', function () {
    return redirect('/landing');
});

Route::get('/landing', [LandingController::class, 'index'])->name('landing');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/universitas', [UniversityController::class, 'index'])->name('university');
