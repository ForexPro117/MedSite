@extends('header')
{{--название поликлиники--}}
<title>Название поликлиники</title>
<link rel="stylesheet" href="{{ asset('css/appoint.css') }}">
<link rel="stylesheet" href="{{ asset('css/poly_about.css') }}">
@section('bodyContent')
    <div class="container">
        <div class="content">
            <div class="photo"></div>
            <p class="title"> ГКБ №8 имени Однопозова И.Б. (ранее гор. поликлиника №3)</p>
            <p class="phone-number">Номер телефона: <span>+79999999999</span></p>
            <p class="address">Адрес: <span>ул. Софьи Ковалевской, 8</span></p>
            <p class="email">Email: <a href="#">example@example.ex</a></p>
            <p class="site">Сайт: <a href="#">example.com</a></p>
            <p class="desc-title">Описание: </p>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet architecto
                consequuntur esse, facilis nobis quia reprehenderit velit. Aliquam aliquid aut deserunt eligendi, est
                magni neque obcaecati quisquam sapiente temporibus.</p>
            <h4 class="spec-title">Специалисты в данном учреждении:</h4>
            <div class="box">
                <ul>
                    <li><p onclick="showDoctor()" class="specialization">Терапевты</p></li>
                    <div class="doctor-box">
                        <div class="doctor-mini">
                            <div class="doctor-avatar"></div>
                            <div class="doctor-info">
                                <a href="/doctor_about">Иванов И. И.</a>
                                <span class="free-num">Свободных номерков: <strong>32</strong></span>
                                <span class="cabinet">Кабинет: <strong>104</strong></span>
                                <button onclick="" class="signup">Записаться</button>
                            </div>
                        </div>
                        <div class="doctor-mini">
                            <div class="doctor-avatar"></div>
                            <div class="doctor-info">
                                <a href="/doctor_about">Иванов И. И.</a>
                                <span class="free-num">Свободных номерков: <strong>32</strong></span>
                                <span class="cabinet">Кабинет: <strong>104</strong></span>
                                <button onclick="" class="signup">Записаться</button>
                            </div>
                        </div>
                        <div class="doctor-mini">
                            <div class="doctor-avatar"></div>
                            <div class="doctor-info">
                                <a href="/doctor_about">Иванов И. И.</a>
                                <span class="free-num">Свободных номерков: <strong>32</strong></span>
                                <span class="cabinet">Кабинет: <strong>104</strong></span>
                                <button onclick="" class="signup">Записаться</button>
                            </div>
                        </div>
                        <div class="doctor-mini">
                            <div class="doctor-avatar"></div>
                            <div class="doctor-info">
                                <a href="/doctor_about">Иванов И. И.</a>
                                <span class="free-num">Свободных номерков: <strong>32</strong></span>
                                <span class="cabinet">Кабинет: <strong>104</strong></span>
                                <button onclick="" class="signup">Записаться</button>
                            </div>
                        </div>
                        <div class="doctor-mini">
                            <div class="doctor-avatar"></div>
                            <div class="doctor-info">
                                <a href="/doctor_about">Иванов И. И.</a>
                                <span class="free-num">Свободных номерков: <strong>32</strong></span>
                                <span class="cabinet">Кабинет: <strong>104</strong></span>
                                <button onclick="" class="signup">Записаться</button>
                            </div>
                        </div>
                    </div>
                </ul>
            </div>
        </div>
    </div>
@endsection
