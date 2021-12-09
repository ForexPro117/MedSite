<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="{{ asset('css/admin_panel_styles.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/admin_panel_actions.js') }}"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<header class="header">
    Авторизация
</header>
<main>
    <form method="POST" action="{{ route('loginAdmin') }}" class="container mt-4">
        @csrf
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text_error"> {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mb-3">
            <label for="Email" class="form-label fw-bolder">Логин</label>
            <input type="text" class="form-control" name="login"
                   placeholder="Ваш логин">
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label fw-bolder">Пароль</label>
            <input type="password" autocomplete="on" class="form-control" name="password"
                   placeholder="Ваш пароль">
        </div>
        <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" name="remember">
            <label class="form-check-label" >
                Запомнить меня
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Войти</button>
    </form>

</main>
</body>
</html>
