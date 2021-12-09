@extends('header')
<title>Войти</title>
<link rel="stylesheet" href="{{ asset('css/appoint.css') }}">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
@section('bodyContent')

    <div class="container a">
        <div class="login-box">
            <h1 class="main_title">Авторизация</h1>
            <form action="{{route('login')}}" method="post">
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <p class="error">{{ $error }}</p>
                        @endforeach
                    </ul>
                @endif
                @csrf
                <div class="name-box">
                    <input type="text" name="name" class="input_login" required placeholder="Введите вашу фамилию...">
                    <p class="error"></p>
                </div>
                <input type="text" name="password" class="input_login" required
                       placeholder="Введите ваш номер полиса...">
                <p class="error"></p>
                <input type="checkbox" name="remember">
                <label>
                    Запомнить меня
                </label>
                <button type="submit" class="login-btn">Войти</button>
            </form>
        </div>
    </div>
@endsection
