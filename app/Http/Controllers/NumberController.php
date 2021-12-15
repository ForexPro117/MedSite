<?php

namespace App\Http\Controllers;

use App\Models\Discription;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Number;

class NumberController extends Controller
{

    public function GetAppointPage()
    {
        $regions = Discription::select('district')->distinct()
            ->inRandomOrder()->take(4)->get();
        return view('appointment', ['regions' => $regions]);
    }

    public function GetPolyclinics()
    {
        $data = json_decode($_POST['data']);
        $polyclinics = Hospital::getPolyclinicsLike($data);
        return view('polyclinics-card', ['polyclinics' => $polyclinics]);
    }

    public function GetSpecs()
    {
        $data = json_decode($_POST['data']);
        $specs = Doctor::getDoctors()->where('id_hostpital', $data->id)->groupBy('specialization')->take(5);
        return view('specs', ['specs' => $specs]);
    }

    public function GetDocsCard()
    {
        $data = json_decode($_POST['data']);
        $doctors = Doctor::getDoctorsLike($data->poly_id, $data->spec);
        return view('doctor-card', ['doctors' => $doctors]);
    }

    public function GetDocNumber()
    {
        $data = json_decode($_POST['data']);
        $doctor = Doctor::getDoctorById($data->doctor_id);
        $timetable = array_values(json_decode($doctor->timetable, true));
        return view('numbers', ['doctor' => $doctor, 'timetable' => $timetable]);
    }

    public function numberRecord()
    {
        $number=new Number();
        $number->time=date('Y-m-d H:i',strtotime(request()->dateOnRecord.' '.request()->time));
        $number->id_doctor=request()->doc_id;
        $number->id_user=request()->user()->id;
        $number->save();
        return view('submit-appointment');
    }

}
