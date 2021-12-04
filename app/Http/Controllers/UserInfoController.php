<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserInfoController extends Controller
{

    /**
     * Возвращает список пользователей
     */
    public function getUsersList()
    {
        return view("admin.admin_panel_user_list",['users'=>User::where('role','user')->get()]);
    }

    /**
     * Возвращает поьлзователя по конкретному ID
     * @param int $id
     */
    public function getUser($id)
    {
        return view("admin.admin_panel_user_info_form",['user'=>User::find($id)]);
    }
}
