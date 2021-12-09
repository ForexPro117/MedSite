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

Route::get('/polyclinics/{region}', [PolyclinicsInfoController::class, 'getPolyclinics'])
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
})->name('admin')
    /*->middleware('auth')*/
;

Route::post('/admin/user/list', [UserInfoController::class, 'getUsersList']);

Route::get('/admin/user/add-form',[UserInfoController::class, 'create'])
->name('addUser');

Route::post('/admin/user/add-form',[UserInfoController::class, 'addUser']);

Route::post('/admin/user/add', [UserInfoController::class, 'addUser']);

Route::post('/admin/user/update', [UserInfoController::class, 'updateUser']);

Route::post('/admin/user/{id}', [UserInfoController::class, 'getUserForm']);




Route::post('/admin/employee/list', [EmployeeInfoController::class, 'getEmployeesList']);

Route::get('/admin/employee/add-form',[EmployeeInfoController::class, 'create'])
    ->name('addEmployee');

Route::post('/admin/employee/add-form',[EmployeeInfoController::class, 'addEmployee']);


Route::post('/admin/employee/add', [EmployeeInfoController::class, 'addEmployee']);

Route::post('/admin/employee/update', [EmployeeInfoController::class, 'updateEmployee']);

Route::post('/admin/employee/{id}', [EmployeeInfoController::class, 'getEmployeeForm']);


require __DIR__ . '/auth.php';
