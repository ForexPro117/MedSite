<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

    use HasFactory;

    /**
     * Следует ли обрабатывать временные метки модели.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Возвращает коллекцию докторов
     */
    public static function getDoctors()
    {

        return Doctor::leftJoin('specialization', 'id_spec', '=', 'specialization.id')
            ->leftJoin('images', 'id_image', '=', 'images.id')
            ->select('doctors.*','specialization.specialization','images.uri')
            ->get();
    }
    public static function getDoctorsLike($id,$specialization)
    {

        return Doctor::leftJoin('specialization', 'id_spec', '=', 'specialization.id')
            ->leftJoin('images', 'id_image', '=', 'images.id')
            ->where('id_hostpital', $id)
            ->where('specialization','like','%'.$specialization.'%')
            ->select('doctors.*','specialization.specialization','images.uri')
            ->get();
    }

    /**
     * Возвращает модель Doctor если найдена,
     * иначе отправляет ответ 404
     * @return Hospital
     * @param id
     */
    public static function getDoctorById($id)
    {
        return Doctor::leftJoin('specialization', 'id_spec', '=', 'specialization.id')
            ->leftJoin('images', 'id_image', '=', 'images.id')
            ->leftJoin('timetable', 'id_timetable', '=', 'timetable.id')
            ->select('doctors.*','specialization.specialization','images.uri','timetable.timetable')
            ->findOrFail($id);
    }
}
