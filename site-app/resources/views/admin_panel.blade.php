<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="{{ asset('css/admin_panel_styles.css') }}">
    <script type="text/javascript" src="{{ asset('js/admin_panel_actions.js') }}"></script>
</head>
<body>



<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
</div>

<!-- Используйте любой элемент, чтобы открыть sidenav -->
<span onclick="openNav()">open</span>

</body>
</html>
