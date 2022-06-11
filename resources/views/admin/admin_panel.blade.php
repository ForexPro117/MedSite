<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/admin_panel_actions.js') }}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="{{ asset('css/admin_panel_styles.css') }}">
</head>
<body>
<header class="header">
    <a href="/" class="logo">
        {{--<input type="image" class="logo_img" src="{{asset("storage/igis_logo_lett.png")}}">--}}
    </a>
    <div id="text"></div>
    <button onclick="location.href='/logout'" class="logout">Выйти</button>
</header>
<main id="main" class="main">
    <div class="sidenav" id="mySidenav">
        <div class="sidenav_main_block">
            @canany(['admin-access','reg-access'])
                <div id="user_list" class="sidenav_item" onclick="loadUsersListPage()">
                    <input type="image" class="logo_img" src="storage/group.png" alt="">
                    Список пользователей
                </div>
            @endcanany
            @can('admin-access')
            <div id="employee_list" class="sidenav_item" onclick="loadEmployeesListPage()">
                <input type="image" class="logo_img" src="storage/admin.png" alt="">
                Список сотрудников
            </div>
            @endcan
                @canany(['admin-access','doctor-access'])
                    <div id="number_list" class="sidenav_item" onclick="loadNumbersListPage()">
                        <input type="image" class="logo_img" src="storage/number.png" alt="">
                        Список номерков
                    </div>
                @endcanany
        </div>
    </div>
    <div class="main_window" id="action_window"></div>
</main>
</body>
</html>
