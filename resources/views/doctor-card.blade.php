<h4 class="secondary_title">Список доступных врачей</h4>
<div class="box">
    <div id="doctorCards" class="doctors-cards">
        {{--врачи--}}
        <?php $i = 0 ?>
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


