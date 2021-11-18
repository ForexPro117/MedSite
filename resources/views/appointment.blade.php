@php
    $numbers = array("9:00", "9:30", "10:00", "10:30", "11:00", "11:30", "12:00",
                      "12:30","13:00", "13:30", "14:00", "14:30", "15:00", "15:30")
@endphp

@extends('header')
<title>Запись к врачу</title>
<link rel="stylesheet" href="{{ asset('css/appoint.css') }}">
@section('bodyContent')
    <div class="container">
        <div class="header d-flex align-items-center justify-content-center">
            <h1 class="main_title">Запись на прием к врачу</h1>
        </div>
            <h4 class="secondary_title">В каком населенном пункте вы бы хотели записаться?</h4>
        <div class="input-box">
            <div class="select_village d-flex flex-inline">
                <input type="text" id="city" class="inputs" placeholder="Введите название нас. пункта...">
                <button class="select">Выбрать</button>
            </div>
            <div id="city_box" class="hints">
                <input type="button" class="btn_help" onclick="selectСity('Ижевск')" value="Ижевск">
                <input type="button" class="btn_help" onclick="selectСity('Сарапул')" value="Сарапул">
                <input type="button" class="btn_help" onclick="selectСity('Воткинск')" value="Воткинск">
            </div>
        </div>
        <h4 class="secondary_title">Выберите поликлинику или больницу</h4>
        <div class="input-box">
            <div class="select_village d-flex flex-inline">
                <input type="text" id="polyclinic" class="inputs" placeholder="Введите название поликлиники...">
                <button class="select">Выбрать</button>
            </div>
        </div>
        <h4 class="secondary_title">Выберите специализацию врача</h4>
        <div class="input-box">
            <div class="select_village d-flex flex-inline">
                <input type="text" id="doctor" class="inputs" placeholder="Введите специализацию врача...">
                <button class="select">Выбрать</button>
            </div>

            <div id="doctor_box" class="hints">
                <input type="button" class="btn_help" onclick="selectDoctor('Терапевт')" value="Терапевт">
                <input type="button" class="btn_help" onclick="selectDoctor('Гастроэнтеролог')" value="Гастроэнтеролог">
                <input type="button" class="btn_help" onclick="selectDoctor('Гинеколог')" value="Гинеколог">
            </div>
        </div>
        <h4 class="secondary_title">Список доступных врачей</h4>
        <div class="doctor_card">
            <div class="avatar"></div>
            <p class="name">Иванов Иван Иванович</p>
            <p class="spec">терапевт</p>
            <button class="details">Подробнее</button>
        </div>
        <h4 class="secondary_title">Список доступных номерков</h4>
        <div class="available_days">
            <p class="day" onclick="showHide()">Пятница, 11.12.2021</p>
            <div class="number-box">
                @foreach($numbers as $number)
                    <li class="time_button">{{$number}}</li>
                @endforeach
            </div>
        </div>
        <button class="submit">Записаться</button>
    </div>
@endsection
