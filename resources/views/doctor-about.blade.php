@extends('header')
{{--надо будет в title закинуть имя врача, о котором смотрим инфу--}}
<title>{{$doctor->name}}</title>
<link rel="stylesheet" href="{{ asset('css/appoint.css') }}">
<link rel="stylesheet" href="{{ asset('css/doctor.css') }}">
@section('bodyContent')
    <div class="container">
        <div class="content">
            <img class="photo" src="{{asset($doctor->uri)}}" alt="doctor">
            <h4 class="doctor_name">{{$doctor->name}}</h4>
            <p class="specialization">Специализация: <span>{{$doctor->specialization}}</span></p>
            <p class="experience">Стаж: <span>{{random_int(5,10)}} лет</span></p>
            <p class="title_desc">Описание: </p>
            <span class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consequatur cumque eligendi enim ex exercitationem, in iusto laborum minus neque officiis omnis placeat quasi quibusdam sit vel voluptas? Eveniet, sit?</span>
            <p class="available_num_title">Доступные номерки: </p>
            @for($i=0;$i<count($timetable);$i++)
            <div class="available_days">
                <p class="day" onclick="showHide({{$i}})">{{now()->addHour(4)->addDay($i)->dayName}}, {{now()->addHour(4)->addDay($i)->format('d.m.Y')}}</p>
                <div id="{{$i}}" class="number-box">
                    @foreach($timetable[now()->addHour(4)->addDay($i)->subDay(1)->dayOfWeek] as $time)
                        <li class="time_button">{{$time}}</li>
                    @endforeach
                </div>
            </div>
            @endfor

        </div>
    </div>
@endsection
