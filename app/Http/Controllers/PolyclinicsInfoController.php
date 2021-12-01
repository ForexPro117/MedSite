<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PolyclinicsInfoController extends Controller
{
    /**
     * Возвращает коллекцию поликлиник
     *
     * @param string $region
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\View
     *
     */
    public function getPolyclinics($region)
    {
        $polyclinics = User::all();//zagluska

        return view('polyclinics', ['polyclinics'=>$polyclinics]);
    }

    public function getDoctors()
    {

        return 'aa';
    }
}
