<form class="update_from" id="update_from">
    <label>
    <div class="login_form_title">Id</div>
        <input type="text" name="userId" disabled value="{{$user->id}}" class="login_form_input" id="update_form_id"/>
    </label>

    <label>
    <div class="login_form_title">Логин</div>
        <input type="text" name="userId" value="{{$user->login}}" class="login_form_input" id="update_form_login"/>
    </label>

    <label>
    <div class="login_form_title">Email</div>
        <input type="email" name="email" value="{{$user->email}}" class="card-text login_form_input" id="update_form_email"/>
    </label>

    <label>
    <div class="login_form_title">Роль</div>
        <select class="login_form_input" id="update_form_selected">
            <option selected="selected" value="registration">registration</option>
            <option value="doctor">doctor</option>
            <option value="admin">admin</option>
        </select>
    </label>

    <label>
    <div class="login_form_title">Пароль</div>
        <input type="text" name="password" placeholder="Введите новый пароль"
               class="card-text login_form_input" id="update_form_password"/>
    </label>
    <br>

    <input type="button" value="Обновить" class="add_user_button" id="update_form_button"/>
</form>
