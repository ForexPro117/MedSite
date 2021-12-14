@php
    $numbers = array("9:00", "9:30", "10:00", "10:30", "11:00", "11:30", "12:00",
                      "12:30","13:00", "13:30", "14:00", "14:30", "15:00", "15:30")
@endphp

<h4 class="secondary_title">Список доступных номерков</h4>
<div id="numbers" class="available_days">
    {{--                    номерки--}}
    <?php $i = 1000 ?>
    <p class="day" onclick="showHide(<?php echo $i ?>)">Пятница, 11.12.2021</p>
    <div id="<?php echo $i ?>" class="number-box">
        @foreach($numbers as $number)
            <input type="button" onclick="selectNumber('{{$number}}')" class="time_button"
                   value="{{$number}}">
        @endforeach
    </div>
    <?php $i++ ?>
</div>
<div class="selected_num">
    <label for="selected_num_btn"></label><input name="time" id="selected_num_btn" type="text" class="time_button">
    <input id="delete_num_btn" onclick="deleteNum({{count($numbers)}})" type="button"
           class="btn_delete">
</div>
<button type="submit" class="submit">Записаться</button>


