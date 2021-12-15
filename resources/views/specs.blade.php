<label for="spec" class="secondary_title">Выберите специализацию врача</label>
<div id="box-doctors" class="input-box">
    <div class="select_village">
        <input name="doctor_spec" type="text" id="docSpecialization" class="inputs"
               placeholder="Введите специализацию врача...">
        <div id="doctor_box" class="hints">
            @foreach($specs as $key => $spec)
            <input type="button" class="btn_help" onclick="selectDoctor('{{$key}}')" value="{{$key}}">
            @endforeach
        </div>
    </div>
    <button type="button" onclick="selectDoctorSpec()" class="select">Выбрать</button>
</div>
<div class="selected_doctor">
    <input id="selected_doctor_btn" type="button" class="btn_help">
    <input id="delete_doctor" onclick="deleteDoctorSpec()" type="button" class="btn_delete">
</div>
{{--                ошибки--}}
<div id="specErr" class="error">some errors</div>
