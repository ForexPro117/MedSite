<h4 class="secondary_title">Список доступных номерков</h4>
<div id="numbers" class="available_days">
    {{--                    номерки--}}
  @for($i=0;$i<count($timetable);$i++)
        <div id="numbers" class="available_days">
            <p class="day" onclick="showHide({{$i}})">{{now()->addHour(4)->addDay($i)->dayName}}, {{now()->addHour(4)->addDay($i)->format('d.m.Y')}}</p>
            <div id="{{$i}}" class="number-box">
                @foreach($timetable[now()->addHour(4)->addDay($i)->subDay(1)->dayOfWeek] as $time)
                    <input type="button" readonly
                           onclick="selectNumber('{{$time}}','{{now()->addHour(4)->addDay($i)->format('Y-m-d')}}')"
                           class="time_button" value="{{$time}}">
                @endforeach
            </div>
        </div>
    @endfor
</div>
<div class="selected_num">

    <label for="selected_num_btn"></label><input name="time" id="selected_num_btn" type="text" class="time_button">
    <input id="delete_num_btn" onclick="deleteNum()" type="button"
           class="btn_delete">
    <input id="dateOnRecord" name="dateOnRecord" hidden>
</div>
<button type="submit" class="submit">Записаться</button>


