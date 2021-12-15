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
        $timetable=array_values(json_decode($doctor->timetable,true));
        return view('doctor-about',['doctor'=>$doctor,'timetable'=>$timetable]);
    }
}
