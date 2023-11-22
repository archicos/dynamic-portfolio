<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExperienceController;

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
//     return view('welcome');
// })->middleware('auth');

Route::get('/', [ExperienceController::class,'index'])->middleware('auth');

// Route::resource('/experience', 'ExperienceController');

Route::post('/experiences/store', [ExperienceController::class, 'store'])->name('experiences.store');
Route::get('/experiences/{id}/edit', [ExperienceController::class, 'edit'])->name('experiences.edit');
Route::patch('/experiences/{id}', [ExperienceController::class, 'update'])->name('experiences.update');
Route::delete('/experiences/{id}/destroy', [ExperienceController::class, 'destroy'])->name('experiences.destroy');

Route::get('/login', function () {
    return view('login');
});

// LOGIN

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticating'])->name('authenticating');

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');