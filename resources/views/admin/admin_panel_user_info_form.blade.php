<form method="post" class="update_from" id="update_from">

    <div class="login_form_title">Id</div>
    <label>
        <input type="text" name="userId" value="{{$id}}" class="login_form_input" id="update_form_id"/>
    </label>
    <div class="login_form_space"></div>

    <div class="login_form_title">Логин</div>
    <label>
        <input type="text" name="userId" value="{{$login}}" class="login_form_input" id="update_form_login"/>
    </label>
    <div class="login_form_space"></div>

    <div class="login_form_title">Почта</div>
    <label >
        <input type="email" name="email" value="{{$email}}" class="card-text" id="update_form_email"/>
    </label>
    <div class="login_form_space"></div>

    <div class="login_form_title">Роль</div>
    <label>

        <select class="login_form_input" id="update_form_selected">
            <option selected="selected">1</option>
            <option value="ADMIN">ADMIN</option>
            <option value="LOX">LOX</option>
        </select>

    </label>
    <div class="login_form_space"></div>

    <div class="login_form_title"> Пароль</div>
    <label >
        <input type="text" name="password" class="card-text" value="{{$password}}" id="update_form_password"/>
    </label>
    <div class="login_form_space"></div>

    <div>
        <label><input type="submit" value="Обновить" class="add_user_button" id="update_form_button"/></label>
    </div>
</form>
