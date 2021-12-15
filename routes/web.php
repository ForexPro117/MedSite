<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\EmployeeInfoController;
use App\Http\Controllers\NumberController;
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

Route::get('/user/account', function () {
    return view('user-account');
})->middleware(['auth']);

Route::get('/doctor/about/{id}', [DoctorController::class, 'getDoctorAbout'])
    ->name('doctor-about');

Route::post('/doctor/about/{id}', [DoctorController::class, 'getDoctorAbout'])
    ->name('doctor-about-post');

Route::get('/polyclinics/about/{id}', [PolyclinicsInfoController::class, 'getAboutPage'])
    ->name('polyclinic-about');

Route::get('/polyclinics/{region}', [PolyclinicsInfoController::class, 'getPolyclinics'])
    ->name('polyclinics');

/**
 * Руты страницы appointment
 */
Route::get('/appointment', [NumberController::class, 'GetAppointPage'])
    ->name('appointment');

Route::post('/appPolyCard', [NumberController::class, 'GetPolyclinics']);

Route::post('/appDocCard', [NumberController::class, 'GetDocsCard']);

Route::post('/appNumbers',[NumberController::class, 'GetDocNumber']);

Route::post('/appSpecs', [NumberController::class, 'GetSpecs']);

Route::Post('/appointment/record', function () {
    dd($_POST);
    return view('submit-appointment');
});


/**
 * Руты используемые работниками
 * TODO использовать в будущем /admin не рекомендуется
 */
//TODO добавить проверку на авторизацию и роль выше пользователя
Route::get('/admin', function () {
    return view('admin.admin_panel');
})->name('admin')
    ->middleware('auth');

Route::post('/admin/user/list', [UserInfoController::class, 'getUsersList'])
    ->middleware('auth');

Route::get('/admin/user/add-form', [UserInfoController::class, 'create'])
    ->middleware('auth');

Route::post('/admin/user/add-form', [UserInfoController::class, 'addUser'])
    ->middleware('auth');

Route::post('/admin/user/add', [UserInfoController::class, 'addUser'])
    ->middleware('auth');

Route::post('/admin/user/update', [UserInfoController::class, 'updateUser'])
    ->middleware('auth');

Route::post('/admin/user/{id}', [UserInfoController::class, 'getUserForm'])
    ->middleware('auth');


Route::post('/admin/employee/list', [EmployeeInfoController::class, 'getEmployeesList'])
    ->middleware('auth');

Route::get('/admin/employee/add-form', [EmployeeInfoController::class, 'create'])
    ->middleware('auth');

Route::post('/admin/employee/add-form', [EmployeeInfoController::class, 'addEmployee'])
    ->middleware('auth');

Route::post('/admin/employee/add', [EmployeeInfoController::class, 'addEmployee'])
    ->middleware('auth');

Route::post('/admin/employee/update', [EmployeeInfoController::class, 'updateEmployee'])
    ->middleware('auth');

Route::post('/admin/employee/{id}', [EmployeeInfoController::class, 'getEmployeeForm'])
    ->middleware('auth');


require __DIR__ . '/auth.php';
