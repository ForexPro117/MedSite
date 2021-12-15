<?php

namespace App\Http\Controllers;

use App\Models\Discription;
use App\Models\Doctor;
use App\Models\Hospital;

class NumberController extends Controller
{

    public function GetAppointPage()
    {
        $regions = Discription::select('district')->distinct()
            ->inRandomOrder()->take(4)->get();
        return view('appointment',['regions'=>$regions]);
    }

    public function GetPolyclinics()
    {
        $data = json_decode($_POST['data']);
        $polyclinics = Hospital::getPolyclinicsLike($data);
        return view('polyclinics-card',['polyclinics'=>$polyclinics]);
    }
    public function GetSpecs()
    {
        $data = json_decode($_POST['data']);
        $specs = Doctor::getDoctors()->where('id_hostpital', $data->id)->groupBy('specialization');
        return view('specs',['specs'=>$specs]);
    }

    public function GetDocsCard()
    {
        $data = json_decode($_POST['data']);
        $doctors = Doctor::getDoctorsLike($data->poly_id,$data->spec);
        return view('doctor-card',['doctors'=>$doctors]);
    }
}
