<h4 class="secondary_title">Список доступных врачей</h4>
<div class="box">
    <div id="doctorCards" class="doctors-cards">
        {{--врачи--}}
        @foreach($doctors as $doctor)
            <div id="{{$doctor->id}}" onclick="{{$doctor->id}}" class="doctor_card">
                <img  class="avatar" src="{{asset($doctor->uri)}}">
                <p class="name">{{$doctor->name}}</p>
                {{--<p class="spec">{{$doctor->specialization}}</p>--}}
                <button onclick="location.href='/doctor_about'" class="details">Подробнее</button>
            </div>
        @endforeach
    </div>
    <input id="delete_doctor_card" onclick="deleteDocCard()" type="button" class="btn_delete">
</div>


