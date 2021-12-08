<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserInfoController extends Controller
{

    public function create()
    {
        return view("admin.admin_panel_add_user_form");
    }


    /**
     * Возвращает список пользователей
     */
    public function getUsersList()
    {
        return view("admin.admin_panel_user_list",
            ['users' => User::where('role', 'user')->get()]);
    }

    /**
     * Возвращает пользователя по конкретному ID
     * @param int $id
     */
    public function getUserForm($id)
    {
        return view("admin.admin_panel_user_info_form", ['user' => User::find($id)]);
    }

    /**
     * Создает в базе данных нового пользователя
     */
    public function addUser()
    {
        $data = json_decode($_POST['data']);
        dd($data);

        $request->validate([
            'name' => ['required', 'string', 'max:90'],
            'email' => ['nullable','string', 'email', 'max:100'],
            'password' => ['required', 'min:8', 'max:90'],
        ]);

        /*User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role'=>'user',
            'password' => Hash::make($request->password),
        ]);*/

        return view("admin.admin_panel_empl_list",
            ['users' => User::where('role', 'user')->get()]);
    }


    /**
     * Обновляет данные пользователя и возвращает обновленную таблицу
     * TODO добавить валидацию на входящие данные
     */
    public function updateUser()
    {
        $data = json_decode($_POST['data']);
        $user = User::find($data->id);

        $user->name = $data->name;
        $user->email = $data->email;
        $user->password = Hash::make($data->password);
        $user->save();

        return view("admin.admin_panel_user_list",
            ['users' => User::where('role', 'user')->get()]);
    }
}
