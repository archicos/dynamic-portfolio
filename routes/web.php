<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SoftskillController;
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

// Route::get('/', [HomeController::class,'index'])->name('welcome')->middleware('auth');

// Route::middleware('auth')->group(function () {
//     Route::get("/", [ExperienceController::class, "index"])->name("experienceList");
//     Route::get("/", [SoftskillController::class, "index"])->name("softskillList");
// });

Route::get("/admin", [HomeController::class, "index"])->name("portfolio")->middleware('auth');
Route::get("/", [HomeController::class, "home"])->name("portfolio");


// Route::resource('/experience', 'ExperienceController');



Route::get('/login', function () {
    return view('login');
});

// LOGIN

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticating'])->name('authenticating');

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

// SOFTSKILL

Route::post('/softskill/store', [SoftskillController::class, 'store'])->name('softskill.store');
Route::get('/softskill/{id}/edit', [SoftskillController::class, 'edit'])->name('softskill.edit');
Route::patch('/softskill/{id}', [SoftskillController::class, 'update'])->name('softskill.update');
Route::delete('/softskill/{id}/destroy', [SoftskillController::class, 'destroy'])->name('softskill.destroy');

// PROJECT

Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store');
Route::get('/project/{id}/edit', [ProjectController::class, 'edit'])->name('project.edit');
Route::patch('/project/{id}', [ProjectController::class, 'update'])->name('project.update');
Route::delete('/project/{id}/destroy', [ProjectController::class, 'destroy'])->name('project.destroy');

// EXPERIENCE

Route::post('/experiences/store', [ExperienceController::class, 'store'])->name('experiences.store');
Route::get('/experiences/{id}/edit', [ExperienceController::class, 'edit'])->name('experiences.edit');
Route::patch('/experiences/{id}', [ExperienceController::class, 'update'])->name('experiences.update');
Route::delete('/experiences/{id}/destroy', [ExperienceController::class, 'destroy'])->name('experiences.destroy');