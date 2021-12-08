<?php

use App\Http\Controllers\EmployeeInfoController;
use App\Http\Controllers\PolyclinicsInfoController;
use App\Http\Controllers\UserInfoController;
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

/**
 * Руты используемые пользователями
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

Route::get('/polyclinics/{region}', [PolyclinicsInfoController::class,'getPolyclinics'])
    ->name('polyclinics');

Route::get('/appointment', function () {
    return view('appointment');
});

/**
 * Руты используемые работниками
 * TODO использовать в будущем /admin не рекомендуется
 */
//TODO добавить проверку на авторизацию и роль выше пользователя
Route::get('/admin', function () {
    return view('admin.admin_panel');
})/*->middleware('auth')*/;

Route::post('/admin/user_list', [UserInfoController::class,'getUsersList']);

Route::post('/admin/user/{id}', [UserInfoController::class,'getUserForm']);

Route::post('/admin/user_update', [UserInfoController::class,'updateUser']);

Route::post('/admin/add_user_from', function (){
    return view("admin.admin_panel_add_user_form");
});

Route::post('/admin/employee_list', [EmployeeInfoController::class,'getEmployeesList']);

Route::post('/admin/employee/{id}', [EmployeeInfoController::class,'getEmployeeForm']);

Route::post('/admin/employee_update', [EmployeeInfoController::class,'updateEmployee']);




require __DIR__.'/auth.php';
