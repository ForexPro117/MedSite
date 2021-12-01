@extends('header')
<title>Войти</title>
<link rel="stylesheet" href="{{ asset('css/appoint.css') }}">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
@section('bodyContent')
    <div class="container a">
        <div class="login-box">
            <h1 class="main_title">Авторизация</h1>
            <input type="text" class="input_login" placeholder="Введите вашу фамилию...">
            <input type="text" class="input_login" placeholder="Введите ваш номер полиса...">
            <button class="login-btn">Войти</button>
        </div>
    </div>
@endsection
