<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    use HasFactory;

    /**
     * Таблица БД, ассоциированная с моделью.
     *
     * @var string
     */
    protected $table = 'number';

    public static function GetHistoryByUserId($id)
    {
        return Number::leftJoin('doctors', 'doctors.id', '=', 'number.id')
            ->leftJoin('specialization', 'id_spec', '=', 'specialization.id')
            ->where('id_user', $id)
            ->select('number.*', 'doctors.name', 'doctors.cabinet', 'doctors.area', 'specialization.specialization');
    }

}
