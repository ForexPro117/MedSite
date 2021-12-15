@extends('header')
<title>Запись к врачу</title>
<link rel="stylesheet" href="{{ asset('css/appoint.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@section('bodyContent')
    <div class="container">
        <h1 class="main_title">Запись на прием к врачу</h1>

        {{--        переделать на пост и тд--}}
        <form action="/appointment/record" method="post">
            @csrf
            {{--            бокс с населенными пунктами--}}
            <div class="availableRegions">
                <label for="city" class="secondary_title">В каком населенном пункте вы бы хотели записаться?</label>
                <div id="box-locality" class="input-box">
                    <div class="select_village">
                        <input name="locality_name" type="text" id="city" class="inputs"
                               placeholder="Введите название нас. пункта...">
                        <div id="city_box" class="hints">
                            @foreach($regions as $region)
                                <input type="button" class="btn_help"
                                       onclick="selectСity('{{$region->district}}')" value={{$region->district}}>
                            @endforeach
                        </div>
                    </div>
                    <button type="button" id="confirm" onclick="selectLocality()" class="select">Выбрать</button>
                </div>
                <div class="selected_locality">
                    <input id="selected_city" type="button" class="btn_help">
                    <input id="delete_city" onclick="deleteCity()" type="button" class="btn_delete">
                </div>
                {{--                ошибки--}}
                <div id="regionErr" class="error">some errors</div>
            </div>

            {{--            бокс с карточками поликлиник--}}
            <div class="availablePolyclinics">

            </div>

            {{--            бокс со специализациями--}}
            <div class="available_specs">

            </div>

            {{--            бокс с карточками врачей--}}
            <div class="available_doctors">

            </div>

            {{--            бокс с номерками--}}
            <div class="available_numbers">

            </div>
        </form>
    </div>
    <script src="{{asset("js/appointment.js")}}"></script>
@endsection
