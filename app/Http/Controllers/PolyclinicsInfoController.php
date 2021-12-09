<?php

namespace App\Http\Controllers;


use App\Models\Doctor;
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
            $polyclinics = Hospital::getPolyclinics()->where('district', $region)
                ->where('type', request()->type);
        else
            $polyclinics = Hospital::getPolyclinics()->where('district', $region);

        if ($polyclinics->first() == null)
            abort(404);

        return view('polyclinics', ['polyclinics' => $polyclinics]);
    }

    /**
     * Возвращает страницу с описанием поликлиники
     * @param string $id - id поликлиники в базе данных
     */
    public function getAboutPage($id)
    {
        $polyclinic = Hospital::getPolyclinicById($id);
        $specializations = Doctor::getDoctors()->where('id_hostpital', $id)->groupBy('specialization');
        return view('polyclinic-about', ['polyclinic' => $polyclinic,'specializations' => $specializations]);
    }


}
