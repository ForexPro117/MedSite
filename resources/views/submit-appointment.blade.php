<link rel="stylesheet" href="{{ asset('css/appoint.css') }}">
<title>Успешная запись</title>
@extends('header')

@section('bodyContent')
    <style>
        h2 {
            text-align: center;
            margin-top: 20%;
        }
    </style>
<h2>Вы записаны!<br> Состояние записи и историю записей можно посмотреть в <a href="/user/account">личном кабинете</a>
</h2>
@endsection
