<label for="polyclinic" class="secondary_title">Выберите поликлинику или больницу</label>
<div class="box">
    <div id="polyclinicCards" class="input-box">
        {{--                        поликлиники--}}
        @foreach($polyclinics as $polyclinic)
            <div id="{{$polyclinic->id}}" onclick="selectPolyclinic({{$polyclinic->id}})" class="grid_item">
                <img alt="photo" class="photo" src="{{asset($polyclinic->uri)}}">
                <div class="text_about">
                    <h5 class="text_about_title">{{$polyclinic->name}}</h5>
                </div>
            </div>
        @endforeach
    </div>
    <input id="delete_polyclinic" onclick="deletePolyclinic()" type="button" class="btn_delete">
</div>

