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

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/user_account', function () {
    return view('user_account');
});

Route::get('/polyclinics/{region}', [\App\Http\Controllers\PolyclinicsInfoController::class,'getPolyclinics'])
    ->name('polyclinics');

require __DIR__.'/auth.php';
