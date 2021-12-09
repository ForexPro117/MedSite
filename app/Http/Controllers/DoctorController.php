<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{

    /**
     * Возвращает страницу с информацией о докторе
     * @param $id
     */
    public function getDoctorAbout($id)
    {
        $doctor=Doctor::getDoctorById($id);
        return view('doctor-about',['doctor'=>$doctor]);
    }
}
