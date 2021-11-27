<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="{{ asset('css/admin_panel_styles.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/admin_panel_actions.js') }}"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
<header class="header">
    Авторизация
</header>
<div>

    <form action="/login" method="post" class="login_form">

        <div class="login_form_title">Логин или Email</div>
        <label class="login_form_input">
            <input type="text" name="userId" class="login_form_input"/>
        </label>
        <div class="text_error">Неверный логин</div>

        <div class="login_form_title"> Пароль</div>
        <label class="login_form_input">
            <input type="password" name="password" class="card-text"/>
        </label>
        <div class="text_error">Неверный пароль</div>

        <div>
            <label><input type="submit" value="Войти" class="btn btn-primary submit"/></label>
            <div><a href="/reg" id="subCommand">Регистрация</a></div>
        </div>
        <input type="hidden" name="recaptchaResponse" id="recaptchaResponse">
    </form>

</div>
</body>
</html>
