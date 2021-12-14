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
                            {{--TODO не забыть--}}
                            <button onclick="location.href='/doctor/about/1'" class="details">Подробнее</button>
                        </div>
                    </div>
                </div>

                <div class="curren-box person-box">
                    <h3>Персональная информация</h3>
                    <div class="documents">
                        <p class="polys">Номер полиса: <span>{{request()->cookie('policy')}}</span></p>
                    </div>
                    <div class="documents">
                        <p class="polys">Email: <span>{{request()->user()->email}}</span></p>
                    </div>
                </div>
            </div>


            <div class="history-box">
                <h3>История записей</h3>
                    <div class="history-item">
                        <div class="date">
                            <p>Дата: <span>21.12.2020</span></p>
                            <p>Время: <span>12:20</span></p>
                        </div>
                        <div class="doctor">
                            <p class="spec">терапевт</p>
                            <p class="doctor-name">Иванов И. И.</p>
                        </div>
                        <button onclick="signUpDoctor()" class="same-doctor">Записаться к этому специалисту</button>
                    </div>
            </div>
        </div>

    </div>
@endsection
