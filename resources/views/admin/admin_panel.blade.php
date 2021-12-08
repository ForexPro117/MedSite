<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="{{ asset('css/admin_panel_styles.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/admin_panel_actions.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
</head>
<body>
<header class="header">
    <div id="text"></div>
</header>
<div id="main" class="main">
    <div class="sidenav" id="mySidenav">
        <div class="sidenav_header"></div>
        <div class="sidenav_main_block">
            <div class="sidenav_item" onclick="loadUsersListPage()">
                <input type="image" class="logo_img" src="storage/users_icon.png" alt="">
                Список пользователей
            </div>
            <div class="sidenav_item" onclick="loadEmployeesListPage()">
                <input type="image" class="logo_img" src="storage/users_icon.png" alt="">
                Список сотрудников
            </div>
            <div class="sidenav_item" onclick="loadAddUserPage()">
                <input type="image" class="logo_img" src="storage/add_new_user_icon.png" alt="">
                Добавить пользователя
            </div>
        </div>
    </div>
    <div class="main_window" id="action_window"></div>
</div>
</body>
</html>
