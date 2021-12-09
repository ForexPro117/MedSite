@extends('header')
<title>Поликлиники</title>
<link rel="stylesheet" href="{{ asset('css/appoint.css') }}">
<link rel="stylesheet" href="{{ asset('css/poly.css') }}">
@section('bodyContent')
    <div class="container">
        {{-- изменить --}}
        <div class="header d-flex align-items-center justify-content-center">
            <h1 class="main_title">{{$polyclinics->first()->district}}. Список медицинских учреждений.</h1>
        </div>

        <h3 class="secondary_title">Бюджетные учреждения</h3>
        <div class="view d-flex flex-inline">
            <h6 class="d-flex justify-content-center m-2">Вид</h6>
            <button onclick="listView()" class="list_view"></button>
            <button onclick="gridView()" class="grid_view"></button>
        </div>

        <div class="box">
            @foreach($polyclinics as $polyclinic)
               <div class="list_item">
                <div onclick="location.href='/polyclinic_about'" class="list_item">
                    <img class="photo" src="{{asset($polyclinic->uri)}}">

                    <div class="text_about">
                        <h5 class="text_about_title"> {{$polyclinic->name}}</h5>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Fusce in imperdiet lorem. Etiam pretium rhoncus interdum.
                            Vivamus pellentesque augue at nunc venenatis,<br/> ut ultricies erat semper.
                            Ut sed magna et nulla feugiat scelerisque. Maecenas blandit nec
                            nibh non bibendum. Praesent.</p>
                        <p class="address">Адрес: {{$polyclinic->city}}, {{$polyclinic->street}} {{$polyclinic->home}}</p>
                        <p class="number">Телефон: {{$polyclinic->phoneNumber}}</p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
