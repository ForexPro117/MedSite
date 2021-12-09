@php
    $numbers = array("9:00", "9:30", "10:00", "10:30", "11:00", "11:30", "12:00",
                      "12:30","13:00", "13:30", "14:00", "14:30", "15:00", "15:30")
@endphp

@extends('header')
{{--надо будет в title закинуть имя врача, о котором смотрим инфу--}}
<title>Имя врача</title>
<link rel="stylesheet" href="{{ asset('css/appoint.css') }}">
<link rel="stylesheet" href="{{ asset('css/doctor.css') }}">
@section('bodyContent')
    <div class="container">
        <div class="content">
            <div class="photo"></div>
            <h4 class="doctor_name">Иванов Иван Иванович</h4>
            <p class="specialization">Специализация: <span>терапевт</span></p>
            <p class="experience">Стаж: <span>25 лет</span></p>
            <p class="title_desc">Описание: </p>
            <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consequatur cumque eligendi enim ex exercitationem, in iusto laborum minus neque officiis omnis placeat quasi quibusdam sit vel voluptas? Eveniet, sit?</span>
            <p class="available_num_title">Доступные номерки: </p>
            <div class="available_days">
                <p class="day" onclick="showHide()">Пятница, 11.12.2021</p>
                <div class="number-box">
                    @foreach($numbers as $number)
                        <li class="time_button">{{$number}}</li>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection
