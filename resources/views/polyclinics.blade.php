@extends('header')
<title>Поликлиники</title>
<link rel="stylesheet" href="{{ asset('css/appoint.css') }}">
<link rel="stylesheet" href="{{ asset('css/poly.css') }}">
@section('bodyContent')
    <div class="container">
        <div class="header d-flex align-items-center justify-content-center">
            <h1 class="main_title">Взрослые поликлиники и больницы</h1>
        </div>
        <h3 class="secondary_title">Бюджетные учреждения</h3>
        <div class="view d-flex flex-inline">
            <h6 class="d-flex justify-content-center m-2">Вид</h6>
            <button onclick="listView()" class="list_view"></button>
            <button onclick="gridView()" class="grid_view"></button>
        </div>

        <div class="row">
            <div class="list_item d-flex flex-inline">
                <div class="photo"></div>
                <div class="text_about">
                    <h5 class="text_about_title"> ГКБ №8 имени Однопозова И.Б. (ранее гор. поликлиника №3)</h5>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Fusce in imperdiet lorem. Etiam pretium rhoncus interdum.
                        Vivamus pellentesque augue at nunc venenatis, ut ultricies erat semper.
                        Ut sed magna et nulla feugiat scelerisque. Maecenas blandit nec
                        nibh non bibendum. Praesent.</p>
                    <p class="address">Адрес: г. Ижевск, ул. Советская, 13 (центр города,
                        рядом с Центральным автовокзалом)</p>
                    <p class="number">Телефон: +79999999999</p>
                </div>
            </div>
            <div class="list_item d-flex flex-inline">
                <div class="photo"></div>
                <div class="text_about">
                    <h5 class="text_about_title"> ГКБ №8 имени Однопозова И.Б. (ранее гор. поликлиника №3)</h5>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Fusce in imperdiet lorem. Etiam pretium rhoncus interdum.
                        Vivamus pellentesque augue at nunc venenatis, ut ultricies erat semper.
                        Ut sed magna et nulla feugiat scelerisque. Maecenas blandit nec
                        nibh non bibendum. Praesent.</p>
                    <p class="address">Адрес: г. Ижевск, ул. Советская, 13 (центр города,
                        рядом с Центральным автовокзалом)</p>
                    <p class="number">Телефон: +79999999999</p>
                </div>
            </div>
            <div class="list_item d-flex flex-inline">
                <div class="photo"></div>
                <div class="text_about">
                    <h5 class="text_about_title"> ГКБ №8 имени Однопозова И.Б. (ранее гор. поликлиника №3)</h5>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Fusce in imperdiet lorem. Etiam pretium rhoncus interdum.
                        Vivamus pellentesque augue at nunc venenatis, ut ultricies erat semper.
                        Ut sed magna et nulla feugiat scelerisque. Maecenas blandit nec
                        nibh non bibendum. Praesent.</p>
                    <p class="address">Адрес: г. Ижевск, ул. Советская, 13 (центр города,
                        рядом с Центральным автовокзалом)</p>
                    <p class="number">Телефон: +79999999999</p>
                </div>
            </div>
            <div class="list_item d-flex flex-inline">
                <div class="photo"></div>
                <div class="text_about">
                    <h5 class="text_about_title"> ГКБ №8 имени Однопозова И.Б. (ранее гор. поликлиника №3)</h5>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Fusce in imperdiet lorem. Etiam pretium rhoncus interdum.
                        Vivamus pellentesque augue at nunc venenatis, ut ultricies erat semper.
                        Ut sed magna et nulla feugiat scelerisque. Maecenas blandit nec
                        nibh non bibendum. Praesent.</p>
                    <p class="address">Адрес: г. Ижевск, ул. Советская, 13 (центр города,
                        рядом с Центральным автовокзалом)</p>
                    <p class="number">Телефон: +79999999999</p>
                </div>
            </div>
        </div>



        <div class="grid_item">
            <div class="photo"></div>
            <h5 class="text_about_title"> ГКБ №8 имени Однопозова И.Б. (ранее гор. поликлиника №3)</h5>
        </div>
    </div>
@endsection
