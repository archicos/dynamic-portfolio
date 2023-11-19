<?php

use App\Http\Controllers\ExperienceController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ExperienceController::class,'index']);
Route::get('/', [ExperienceController::class,'index']);

// Route::resource('/experience', 'ExperienceController');

Route::post('/experiences/store', [ExperienceController::class, 'store'])->name('experiences.store');