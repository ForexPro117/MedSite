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
}
