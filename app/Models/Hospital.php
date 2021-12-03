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
     * @return Hospital
     */
    public static function getDiscription()
    {
        return Hospital::leftJoin('discription', 'id_discription', '=', 'discription.id')
            ->leftJoin('phonenumber', 'id_phoneNumber', '=', 'phonenumber.id')
            ->get();
    }

}
