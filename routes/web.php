<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/appointment', function () {
    return view('appointment');
});

Route::get('/polyclinics', function () {
    return view('polyclinics');
});

/**
 * Метод: GET
 * Маршрутизация: при запросе к /admin_panel вернуть форму в admin/admin_panel.blade.php
 */
Route::get('/admin_panel', function () {
    return view('admin.admin_panel');
});

/**
 * Метод: GET
 * Маршрутизация: при запросе к /admin_panel_login вернуть форму в admin/admin_panel_login.blade.php
 */
Route::get('/admin_panel_login', function () {
    return view('admin.admin_panel_login');
});

/**
 * Метод: POST
 * Маршрутизация: при запросе к /admin_panel_user_info_form/id
 * выполнить метод UserInfoController.showForm
 */
Route::post('admin_panel_user_info_form/{id}', [UserInfoController::class, 'showForm']);

/**
 * Метод: POST
 * Маршрутизация: при запросе к /admin_panel_user_list
 * выполнить метод UserInfoController.showUsers
 */
Route::post('admin_panel_user_list', [UserInfoController::class, 'showUsers']);
/**
 * Метод: POST
 * Маршрутизация: при запросе к /admin_panel_update_user
 * выполнить метод UserInfoController.updateUser
 */
Route::post('admin_panel_update_user', [UserInfoController::class, 'updateUser']);

/**
 * Метод: POST
 * Маршрутизация: при запросе к /admin_panel_add_user_from
 * выполнить метод UserInfoController.showFormAddUser
 */
Route::post('admin_panel_add_user_from', [UserInfoController::class, 'showFormAddUser']);
