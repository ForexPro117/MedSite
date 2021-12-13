@php
    $numbers = array("9:00", "9:30", "10:00", "10:30", "11:00", "11:30", "12:00",
                      "12:30","13:00", "13:30", "14:00", "14:30", "15:00", "15:30")
@endphp

@extends('header')
<title>Запись к врачу</title>
<link rel="stylesheet" href="{{ asset('css/appoint.css') }}">
@section('bodyContent')
    <div class="container">
        <h1 class="main_title">Запись на прием к врачу</h1>

{{--        переделать на пост и тд--}}
        <form action="/submit_appointment" method="get">
            <label for="sity" class="secondary_title">В каком населенном пункте вы бы хотели записаться?</label>
                <div id="box-locality" class="input-box">
                    <div class="select_village d-flex flex-inline">
                        <input name="locality_name" type="text" id="city" class="inputs"
                               placeholder="Введите название нас. пункта...">
                        <button type="button" id="confirm" onclick="selectLocality()" class="select">Выбрать</button>
                    </div>
                    <div id="city_box" class="hints">
                        <input type="button" class="btn_help" onclick="selectСity('Ижевск')" value="Ижевск">
                        <input type="button" class="btn_help" onclick="selectСity('Сарапул')" value="Сарапул">
                        <input type="button" class="btn_help" onclick="selectСity('Воткинск')" value="Воткинск">
                    </div>
                </div>
                <div class="selected_locality">
                    <input id="selected_city" type="button" class="btn_help">
                    <input id="delete_city" onclick="deleteCity()" type="button" class="btn_delete">
                </div>

            <label for="polyclinic" class="secondary_title">Выберите поликлинику или больницу</label>
                <div id="box-polyclinics" class="input-box">
                    <div class="select_village d-flex flex-inline">
                        <input name="polyclinic_name" type="text" id="polyclinic" class="inputs"
                               placeholder="Введите название поликлиники...">
                        <button type="button" onclick="selectPolyclinic()" class="select">Выбрать</button>
                    </div>
                </div>
                <div class="selected_polyclinic">
                    <input id="selected_poly_btn" type="button" class="btn_help">
                    <input id="delete_polyclinic" onclick="deletePolyclinic()" type="button" class="btn_delete">
                </div>


            <label for="spec" class="secondary_title">Выберите специализацию врача</label>
                <div id="box-doctors" class="input-box">
                    <div class="select_village d-flex flex-inline">
                        <input name="doctor_spec" type="text" id="doctor" class="inputs"
                               placeholder="Введите специализацию врача...">
                        <button type="button" onclick="selectDoctorSpec()" class="select">Выбрать</button>
                    </div>
                    <div id="doctor_box" class="hints">
                        <input type="button" class="btn_help" onclick="selectDoctor('Терапевт')" value="Терапевт">
                        <input type="button" class="btn_help" onclick="selectDoctor('Гастроэнтеролог')"
                               value="Гастроэнтеролог">
                        <input type="button" class="btn_help" onclick="selectDoctor('Гинеколог')" value="Гинеколог">
                    </div>
                </div>
                <div class="selected_doctor">
                    <input id="selected_doctor_btn" type="button" class="btn_help">
                    <input id="delete_doctor" onclick="deleteDoctor()" type="button" class="btn_delete">
                </div>


            <div class="available_doctors">
                <h4 class="secondary_title">Список доступных врачей</h4>

                <div class="box">
                    <div class="doctors-cards">
                    {{--врачи--}}
                    <?php $i = 0 ?>
                    <!--                на foreach-->
                        @for($i = 0; $i < 10;$i++)
                            <div id="<?php echo $i ?>" onclick="selectDoctorCard(<?php echo $i ?>)" class="doctor_card">
                                <div class="avatar"></div>
                                <p class="name">Иванов Иван Иванович</p>
                                <p class="spec">терапевт</p>
                                <button onclick="location.href='/doctor_about'" class="details">Подробнее</button>
                            </div>
                        @endfor
                    </div>
                    <input id="delete_doctor_card" onclick="deleteDocCard()" type="button" class="btn_delete">
                </div>

            </div>

            <div class="available_numbers">
                <h4 class="secondary_title">Список доступных номерков</h4>
                <div class="available_days">
                    <?php $i = 1000 ?>
                    <p class="day" onclick="showHide(<?php echo $i ?>)">Пятница, 11.12.2021</p>
                    <div id="<?php echo $i ?>" class="number-box">
                        @foreach($numbers as $number)
                            <input type="button" onclick="selectNumber('{{$number}}')" class="time_button" value="{{$number}}">
                        @endforeach
                    </div>
                    <?php $i++ ?>
                </div>
                <div class="selected_num">
                    <input name="time" id="selected_num_btn" type="text" class="time_button">
                    <input id="delete_num_btn" onclick="deleteNum({{count($numbers)}})" type="button" class="btn_delete">
                </div>
                <button type="submit" class="submit">Записаться</button>
            </div>
        </form>
    </div>
    <script src="{{asset("js/appointment.js")}}"></script>
@endsection
