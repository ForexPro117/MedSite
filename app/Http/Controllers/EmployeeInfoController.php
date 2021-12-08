<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EmployeeInfoController extends Controller
{

    /**
     * Возвращает список сотрудников
     */
    //TODO рядовые сотрудники не должны видеть админов
    public function getEmployeesList()
    {
        return view("admin.admin_panel_empl_list",
            ['users' => User::where('role', '!=', 'user')->get()]);
    }

    /**
     * Возвращает сотрудника по конкретному ID
     * @param int $id
     */
    public function getEmployeeForm($id)
    {
        return view("admin.admin_panel_empl_info_form", ['user' => User::find($id)]);
    }

    /**
     * Обновляет данные сотрудника и возвращает обновленную таблицу
     */
    public function updateEmployee()
    {
        $data = json_decode($_POST['data']);
        $user = User::find($data->id);

        $user->id = $data->id;
        $user->login = $data->name;
        $user->email = $data->email;
        $user->role = $data->role;
        $user->password = Hash::make($data->password);
        $user->save();

        return view("admin.admin_panel_empl_list",
            ['users' => User::where('role', '!=', 'user')->get()]);
    }
}
