<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class EmployeeInfoController extends Controller
{

    public function create()
    {
        return view("admin.admin_panel_add_empl_form");
    }

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
     * Создает в базе данных нового сотрудника
     */
    public function addEmployee()
    {
        $data=json_decode($_POST['data']);
        dd($data);

        $request->validate([
            'login' => ['required','unique:users','string', 'max:90'],
            'email' => ['nullable','string', 'email', 'max:100'],
            'password' => ['required', 'min:8','confirmed','max:90'],
        ]);

       /* User::create([
            'login' => $request->login,
            'email' => $request->email,
            'role'=>$request->role,
            'password' => Hash::make($request->password),
        ]);*/


        return view("admin.admin_panel_empl_list",
            ['users' => User::where('role', '!=', 'user')->get()]);
    }


    /**
     * Обновляет данные сотрудника и возвращает обновленную таблицу
     * TODO добавить валидацию на входящие данные
     */
    public function updateEmployee()
    {
        $data = json_decode($_POST['data']);
        $user = User::find($data->id);

        $user->login = $data->login;
        $user->email = $data->email;
        $user->role = $data->role;
        $user->password = Hash::make($data->password);
        $user->save();

        return view("admin.admin_panel_empl_list",
            ['users' => User::where('role', '!=', 'user')->get()]);
    }
}
