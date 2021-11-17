@extends('header')
<title>Запись к врачу</title>
<link rel="stylesheet" href="{{ asset('css/appoint.css') }}">
@section('bodyContent')
        <div class="container">
            <div class="header d-flex align-items-center justify-content-center">
                <h1 class="main_title">Запись на прием к врачу</h1>
            </div>
            <h4 class="secondary_title">В каком населенном пункте вы бы хотели записаться?</h4>
            <input type="text" class="inputs" placeholder="Введите название нас. пункта...">
            <div class="hints">
                <input type="button" class="city" value="Ижевск">
                <input type="button" class="city" value="Сарапул">
                <input type="button" class="city" value="Воткинск">
            </div>
            <h4 class="secondary_title">Выберите поликлинику или больницу</h4>
            <input type="text" class="inputs" placeholder="Введите название поликлиники...">
            <h4 class="secondary_title">Выберите специализацию врача</h4>
            <input type="text" class="inputs" placeholder="Введите специализацию врача...">
            <div class="hints">
                <input type="button" class="city" value="Терапевт">
                <input type="button" class="city" value="Гастроэнтеролог">
                <input type="button" class="city" value="Гинеколог">
            </div>
            <h4 class="secondary_title">Список доступных врачей</h4>
            <div class="doctor_card">
                    <div class="avatar"></div>
                    <p class="name">Иванов Иван Иванович</p>
                    <p class="spec">терапевт</p>
                    <button class="details">Подробнее</button>
            </div>
        </div>
@endsection
