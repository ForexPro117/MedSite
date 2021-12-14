<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    /**
     * Следует ли обрабатывать временные метки модели.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Таблица БД, ассоциированная с моделью.
     *
     * @var string
     */
    protected $table = 'hospital';

    /**
     * Возвращает связанные таблицы Hospital
     * @return Hospital[]
     */
    public static function getPolyclinics()
    {
        return Hospital::leftJoin('discription', 'id_discription', '=', 'discription.id')
            ->leftJoin('phonenumber', 'id_phoneNumber', '=', 'phonenumber.id')
            ->leftJoin('images', 'id_imageHospital', '=', 'images.id')
            ->get();
    }

    public static function getPolyclinicsLike($data)
    {
        return Hospital::leftJoin('discription', 'id_discription', '=', 'discription.id')
            ->leftJoin('phonenumber', 'id_phoneNumber', '=', 'phonenumber.id')
            ->leftJoin('images', 'id_imageHospital', '=', 'images.id')
            ->where('district','like','%'.$data->region.'%')
            ->get();
    }

    /**
     * Возвращает модель Hospital если найдена,
     * иначе отправляет ответ 404
     * @return Hospital
     * @param id
     */
    public static function getPolyclinicById($id)
    {
        return Hospital::leftJoin('discription', 'id_discription', '=', 'discription.id')
            ->leftJoin('phonenumber', 'id_phoneNumber', '=', 'phonenumber.id')
            ->leftJoin('images', 'id_imageHospital', '=', 'images.id')
            ->findOrFail($id);
    }

}
