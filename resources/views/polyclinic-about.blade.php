@extends('header')
{{--название поликлиники--}}
<title>{{$polyclinic->name}}</title>
<link rel="stylesheet" href="{{ asset('css/appoint.css') }}">
<link rel="stylesheet" href="{{ asset('css/poly_about.css') }}">
@section('bodyContent')
    <div class="container">
        <div class="content">
            <img class="photo" src="{{asset($polyclinic->uri)}}">
            <p class="title">{{$polyclinic->name}}</p>
            @isset($polyclinic->phoneNumber)
                <p class="phone-number">Номер телефона: <span>{{$polyclinic->phoneNumber}}</span></p>
            @endisset
            <p class="address">Адрес:
                <span>{{$polyclinic->city}}, {{$polyclinic->street}}, {{$polyclinic->home}}</span></p>
            @isset($polyclinic->email)
                <p class="email">Email: <a href="mailto:{{$polyclinic->email}}">{{$polyclinic->email}}</a></p>
            @endisset
            @isset($polyclinic->website)
                <p class="site">Сайт: <a href="https://{{$polyclinic->website}}">{{$polyclinic->website}}</a></p>
            @endisset
            <p class="desc-title">Описание: </p>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet architecto
                consequuntur esse, facilis nobis quia reprehenderit velit. Aliquam aliquid aut deserunt eligendi, est
                magni neque obcaecati quisquam sapiente temporibus.</p>
            <h4 class="spec-title">Специалисты в данном учреждении:</h4>
            <div class="box">
                <ul>
                    <?php $i = 0 ?>
                    @foreach($specializations as $key => $doctors)
                        <li><p onclick="showDoctor(<?php echo $i?>)" class="specialization">{{$key}}</p></li>
                        <div id="<?php echo $i?>" class="doctor-box">
                            @foreach($doctors as $doctor)
                                <div class="doctor-mini">
                                    <img class="doctor-avatar" src="{{asset($doctor->uri)}}">
                                    <div class="doctor-info">
                                        <a href={{route('doctor-about',[$doctor->id])}}>{{$doctor->name}}</a>
                                        {{--TODO сюда тоже на будущее--}}
                                        <span class="free-num">Свободных номерков: <strong>32</strong></span>
                                        @isset($doctor->area)
                                            <span class="cabinet">Участок: <strong>{{$doctor->area}}</strong></span>
                                        @endisset
                                        @isset($doctor->cabinet)
                                            <span class="cabinet">Кабинет: <strong>{{$doctor->cabinet}}</strong></span>
                                        @endisset
                                        <button onclick="signUpDoctor()" class="signup">Записаться</button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                            <?php $i++ ?>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
