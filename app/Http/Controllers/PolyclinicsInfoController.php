<?php

namespace App\Http\Controllers;


use App\Models\Hospital;


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
    { //TODO: добавить описания для больниц
        if (request()->type)
            $polyclinics = Hospital::getDiscription()->where('district', $region)
            ->where('type',request()->type);
        else
            $polyclinics = Hospital::getDiscription()->where('district', $region);

        if ($polyclinics->first() == null)
            abort(404);

        return view('polyclinics', ['polyclinics' => $polyclinics]);
    }

    public function getDoctors()
    {

        return 'aa';
    }

}
