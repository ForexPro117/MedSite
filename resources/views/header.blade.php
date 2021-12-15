<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <header class="text-white">
        <div class="container nav p-2">
            <a href="/" class="logo navbar-brand nav text-white">
                <input type="image" class="logo_img" src="{{asset("storage/igis_logo_lett.png")}}">
                <p class="logo_text">ГЕОИНФОРМАЦИОННАЯ<br>СПРАВОЧНАЯ<br>СИСТЕМА</p>
            </a>
            <div class="d-flex ms-auto">
               {{-- <input type="button" class="btn_search">--}}
                @if(Auth::check())
                    <a href="/user/account" class="user-name nav-link py-3 text-white">{{Auth::user()->name}}</a>
                    <button type="button" onclick="location.href='/logout'" class="button_login">Выйти</button>
                @else
                    <button type="button" onclick="location.href='/login'" class="button_login">Войти</button>
                @endif
                <a href="#" class="per-acc">Личный кабинет</a>
            </div>
        </div>
    </header>
    <main class="main">
        @yield("bodyContent")
        <script src="{{asset("js/anim.js")}}"></script>
    </main>
    <footer>
        <div class="container d-flex flex-column">
            <img src="{{asset("storage/igis_logo_white.png")}}" width="40" class="logo_footer">
            <a href="#" class="footer_link">Единый справочный номер +79999999999</a>
            <a href="#" class="footer_link">Оставить отзыв или предложение</a>
            <a href="#" class="footer_link">Реклама</a>
        </div>
    </footer>
</div>
</body>
</html>
