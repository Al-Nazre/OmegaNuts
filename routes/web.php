<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\ContainerController;
use App\Http\Controllers\ProfileController; 
use App\Http\Controllers\TempController; 
use App\Http\Controllers\FoodController; 

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//container_controller
Route::get('/container', [ContainerController::class, 'index'])->name('container');
Route::post('/container/create', [ContainerController::class, 'create'])->name('container.create');
Route::put('/container/update/{id}', [ContainerController::class, 'update'])->name('container.update');

//profile_controller
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::put('/profile/goal', [ProfileController::class, 'goal'])->name('profile.goal');

//food_controller
Route::get('/group', [FoodController::class, 'index'])->name('group');
Route::get('/vegetables', [FoodController::class, 'vegetables'])->name('vegetables');
Route::get('/fruits', [FoodController::class, 'fruits'])->name('fruits');
Route::get('/legumes', [FoodController::class, 'legumes'])->name('legumes');
Route::get('/nuts', [FoodController::class, 'nuts'])->name('nuts');
Route::get('/{group}_{id}', [FoodController::class, 'foodinfo']);
Route::get('/search', [FoodController::class, 'search'])->name('search');


//Temp_controller
Route::get('/temp', [TempController::class, 'index'])->name('temp');
Route::post('/temp/create', [TempController::class, 'create'])->name('temp.create');
