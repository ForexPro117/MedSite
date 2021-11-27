<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Контролер для обработки запросов связанных с юзером
 */
class UserInfoController extends Controller
{

    /**
     * заглушка под список юзеров
     *
     * TODO('создать ЮзерРепозиторий')
     */
    private static $stub_users = array(
        array(
            "id" => "0",
            "login" => "login0",
            "email" => "email0",
            "role" => "ADMIN",
            "password" => "password1"
        ),
        array(
            "id" => "1",
            "login" => "login1",
            "email" => "email1",
            "role" => "LOX",
            "password" => "password1"
        )
    );

    /**
     * Вернуть форму с инфой по пользователю
     * @param $id Int айди юзера
     */
    public function showForm($id)
    {
        return view("admin.admin_panel_user_info_form", UserInfoController::$stub_users[$id]);
    }

    /**
     * Вернуть форму со списком юзеров
     */
    public function showUsers()
    {
        return view("admin.admin_panel_user_list", ['users' => UserInfoController::$stub_users]);
    }

    /**
     * Обновить информацию по пользователю
     * @param Request $request запрос для получения параметров (id,login,password,role)
     */
    public function updateUser(Request $request): \Illuminate\Http\JsonResponse
    {

        $data = json_decode($request->getContent(), true);

        $id = $data['id'];
        UserInfoController::$stub_users[$id] = array(
            "id" => $id,
            "login" => $data['login'],
            "email" => $data['email'],
            "role" => $data['role'],
            "password" => $data['password'],
        );
        return response()->json(['status' => 'success']);
    }

    /**
     * Возвращает форму для добавления юзеров
     */
    public function showFormAddUser()
    {
        return view("admin.admin_panel_add_user_form");
    }

}
