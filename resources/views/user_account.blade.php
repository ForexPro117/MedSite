@extends('header')
<title>Личный кабинет</title>
<link rel="stylesheet" href="{{ asset('css/account.css') }}">
@section('bodyContent')
    <div class="container">
        <div class="content">
            <div class="title-sett">
                <div class="curren-box">
                    <h3>Текущая запись</h3>
                    <div class="current">
                        <div class="text-details">
                            <p class="city">Нас. пункт: <span>Ижевск</span></p>
                            <p class="polyclinic">Городская клиническая больница №7 (взрослое отделение)</p>
                            <p class="address">Адрес: <span>г.Ижевск, ш.Воткинское 81</span></p>
                            <p class="phone">Телефон: <span>45-24-01</span></p>
                            <p class="time">Время: <span>21:00</span></p>
                        </div>
                        <div class="doctor_card">
                            <div class="avatar"></div>
                            <p class="name">Иванов Иван Иванович</p>
                            <p class="spec">терапевт</p>
                            <button class="details">Подробнее</button>
                        </div>
                    </div>
                </div>

                <div class="curren-box person-box">
                    <h3>Персональная информация</h3>
                    <div class="documents">
                        <p class="polys">Номер полиса: <span>32414124242142134</span></p>
                    </div>
                </div>
            </div>


            <div class="curren-box history-box">
                <h3>История записей</h3>
                    <div class="history-item">

                    </div>
            </div>
        </div>

    </div>
@endsection
