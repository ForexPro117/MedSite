<?php

namespace App\Http\Controllers;

use App\Models\Discription;
use App\Models\Hospital;
use Illuminate\Support\Facades\DB;

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
}
