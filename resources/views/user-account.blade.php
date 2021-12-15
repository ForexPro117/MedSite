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
                            <p class="city">Нас. пункт: <span>{{$polyclinic->city}}</span></p>
                            <p class="polyclinic">{{$polyclinic->name}}</p>
                            <p class="address">Адрес: <span>{{$polyclinic->city}},
                                    {{$polyclinic->street}}, {{$polyclinic->home}}</span></p>
                            <p class="phone">Телефон: <span>{{$polyclinic->phoneNumber}}</span></p>
                            <p class="time">Время: <span>{{date('H:i d-m-y',strtotime($currentNumber->time))}}</span>
                            </p>
                        </div>
                        <div class="doctor_card">
                            <img class="avatar" src="{{asset($doctor->uri)}}">
                            <p class="name">{{$doctor->name}}</p>
                            <p class="spec">{{$doctor->specialization}}</p>
                            {{--TODO не забыть--}}
                            <button onclick="location.href='{{route('doctor-about',[$doctor->id])}}'"
                                    class="details">Подробнее
                            </button>
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
                @foreach($history as $record)
                    <div class="history-item">
                        <div class="date">
                            <p>Дата: <span>{{date('d-m-y',strtotime($record->time))}}</span></p>
                            <p>Время: <span>{{date('H:i',strtotime($record->time))}}</span></p>
                        </div>
                        <div class="doctor">
                            <p class="spec">{{$record->specialization}}</p>
                            <p class="doctor-name">{{$record->name}}</p>
                        </div>
                        <button onclick="signUpDoctor({{$record->id_doctor}})" class="same-doctor">Записаться к этому специалисту</button>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
