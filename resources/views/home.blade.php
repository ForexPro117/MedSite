@php
    $villages = array("Алнаши", "Балезино", "Вавож", "Воткинск", "Воткинский район", "Глазов", "Грахово",
                      "Дебесы","Завьялово", "Игра", "Камбарка", "Каракулино", "Кез", "Кизнер", "Киясово",
                      "Красногорский район", "Малопургинский район", "Можга", "Нылга", "Сарапул", "Сарапульский район", "Селты",
                       "Сюмси", "Ува", "Шаркан", "Юкаменское","Якшур-Бодья", "Яр")
@endphp

@extends('header')
<title>Главная</title>
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@section('bodyContent')
    <div class="title_homepage d-flex">
        <div class="d-flex flex-column col-6 align-items-center justify-content-center">
            <h1 class="title_text_homepage">Запись на прием <br>к врачу</h1>
            <button class="btn_appoint" onclick="location.href='/appointment'" type="button">Записаться на прием
            </button>
        </div>
    </div>
    <div class="quick_info">
        <div class="container d-flex flex-row justify-content-between item">
            <div class="block d-flex flex-column">
                <p class="number">253</p>
                <p class="desc">Записей сегодня</p>
            </div>
            <div class="block d-flex flex-column">
                <p class="number">342</p>
                <p class="desc">Доступных врачей</p>
            </div>
            <div class="block d-flex flex-column">
                <p class="number">54</p>
                <p class="desc">Свободных номерков</p>
            </div>
        </div>

    </div>
    <div class="container">
        <h1 class="titles">Учреждения г. Ижевска</h1>
        <div class="justify-content-between">
            <button onclick="location.href='/polyclinics'" class="btn_poly_orange">Взрослые поликлиники и больницы
            </button>
            <button class="btn_poly_orange">Детские поликлиники и больницы</button>
            <button class="btn_poly_blue">Стоматологии</button>
            <button class="btn_poly_blue">Спецучреждения и диспансеры</button>
        </div>
        <h1 class="titles">Учреждения Удмуртии</h1>
        <div class="d-flex flex-row">
            <ul class="d-flex flex-column col-md-4">
                @foreach($villages as $key => $area)
                    @if($key < 14)
                        <li class="udm_item"><a href="{{route('polyclinics',[$area])}}">{{$area}}</a></li>
                    @endif
                @endforeach
            </ul>
            <ul class="d-flex flex-column col-md-4">
                @foreach($villages as $key => $area)
                    @if($key > 13)
                        <li class="udm_item"><a href="{{route('polyclinics',[$area])}}">{{$area}}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
        <h1 class="titles">Прочие учреждения</h1>
        <ul>
            <li class="udm_item" href="#">Симонихинская больница филиал ФБУЗ ПОМЦ ФМБА России, Сарапул</li>
        </ul>
    </div>
@endsection
