<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Number;
use Illuminate\Http\Request;

class UserAccountController extends Controller
{
    public function GetUserPage()
    {

        $currentNumber = Number::where('time', '>=', now()->toDateTime())
            ->where('id_user', request()->user()->id)->orderByDesc('time')->first();
        $doctor = Doctor::getDoctorById($currentNumber->id_doctor);
        $polyclinic = Hospital::getPolyclinics()->where('id', $doctor->id_hostpital)->first();
        $history = Number::GetHistoryByUserId(request()->user()->id)->orderByDesc('time')->get();
        return view('user-account',
            ['currentNumber' => $currentNumber, 'doctor' => $doctor, 'polyclinic' => $polyclinic, 'history' => $history]);
    }
}
