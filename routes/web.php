<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/profile', [CVController::class,'show'])->name('profile');

Route::get('/profile/CV/create', [CVController::class,'create'])->middleware(['auth'])->name('createCV');

Route::get('/profile/CV/create/submit', [CVController::class,'store'])->middleware(['auth'])->name('createCV-submit');

Route::get('/profile/CV/{id}/edit', [CVController::class,'edit'])->middleware(['auth'])->name('editCV');

Route::get('/profile/CV/{id}/edit/submit', [CVController::class,'update'])->middleware(['auth'])->name('editCV-submit');
//Женя
Route::get('/search','App\Http\Controllers\SController@search')->name('search');


require __DIR__.'/auth.php';

