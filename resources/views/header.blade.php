<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <script src="js/anim.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</head>
<body>
<header id="1232323" class="text-white some">
    <div class="container nav p-2">
        <a href="/" class="navbar-brand nav text-white">
            <input type="image" class="logo_img" src="storage/igis_logo_lett.png">
            <p class="logo_text">ГЕОИНФОРМАЦИОННАЯ<br>СПРАВОЧНАЯ<br>СИСТЕМА</p>
        </a>
        <div class="d-flex ms-auto">
            <input type="image" src="storage/search.png" class="btn_search">
            <button type="button" onclick="location.href='/login'" class="button_login">Войти</button>
        </div>
    </div>
</header>
<main>
    @yield("bodyContent")
</main>
<footer>
    <div class="container d-flex flex-column">
        <img src="storage/igis_logo_white.png" width="40" class="logo_footer">
        <a href="#" class="footer_link">Единый справочный номер +79999999999</a>
        <a href="#" class="footer_link">Оставить отзыв или предложение</a>
        <a href="#" class="footer_link">Реклама</a>
    </div>
</footer>
</body>
</html>
