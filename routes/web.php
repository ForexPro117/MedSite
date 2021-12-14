<?php

use App\Http\Controllers\DoctorController;
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

Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/user/account', function () {
    return view('user-account');
})->middleware(['auth']);

Route::get('/doctor/about/{id}',[DoctorController::class,'getDoctorAbout'])
    ->name('doctor-about');

Route::get('/polyclinics/about/{id}',[PolyclinicsInfoController::class, 'getAboutPage'])
    ->name('polyclinic-about');

Route::get('/polyclinics/{region}', [PolyclinicsInfoController::class, 'getPolyclinics'])
->name('polyclinics');

Route::get('/appointment', function () {
    return view('appointment');
});

Route::post('/appPolyCard', function () {
    return view('polyclinic_card');
});

Route::post('/appDocCard', function () {
    return view('doctor-card');
});

Route::post('/appNumbers', function () {
    return view('numbers');
});

Route::post('/appSpecs', function () {
    return view('specs');
});

Route::get('/submit_appointment', function () {
    return view('submit_appointment');
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

Route::get('/admin/user/add-form',[UserInfoController::class, 'create']);

Route::post('/admin/user/add-form',[UserInfoController::class, 'addUser']);

Route::post('/admin/user/add', [UserInfoController::class, 'addUser']);

Route::post('/admin/user/update', [UserInfoController::class, 'updateUser']);

Route::post('/admin/user/{id}', [UserInfoController::class, 'getUserForm']);




Route::post('/admin/employee/list', [EmployeeInfoController::class, 'getEmployeesList']);

Route::get('/admin/employee/add-form',[EmployeeInfoController::class, 'create']);

Route::post('/admin/employee/add-form',[EmployeeInfoController::class, 'addEmployee']);

Route::post('/admin/employee/add', [EmployeeInfoController::class, 'addEmployee']);

Route::post('/admin/employee/update', [EmployeeInfoController::class, 'updateEmployee']);

Route::post('/admin/employee/{id}', [EmployeeInfoController::class, 'getEmployeeForm']);


require __DIR__ . '/auth.php';
