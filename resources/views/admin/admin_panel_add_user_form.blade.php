<form action="/login" method="post" class="add_user_from">

    <div class="login_form_title">Логин</div>
    <label>
        <input type="text" name="userId" class="login_form_input"/>
    </label>
    <div class="login_form_space"></div>

    <div class="login_form_title">Роль</div>
    <label>

        <select id="cities" class="login_form_input">
            <option value="ADMIN">ADMIN</option>
            <option value="LOX">LOX</option>
        </select>

    </label>
    <div class="login_form_space"></div>

    <div class="login_form_title"> Пароль</div>
    <label>
        <input type="password" name="password" class="login_form_input"/>
    </label>
    <div class="login_form_space"></div>

    <div class="login_form_title">Повтор пароля</div>
    <label>
        <input type="password" name="password" class="login_form_input"/>
    </label>
    <div class="login_form_space"></div>


    <div>
        <label><input type="submit" value="Добавить пользователя" class="add_user_button"/></label>
    </div>
</form>

