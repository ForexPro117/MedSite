<form  class="add_user_from">

    <div class="login_form_title">Логин</div>
    <label>
        <input type="text" name="userId" placeholder="Введите логин" class="login_form_input"/>
    </label>
    <div class="login_form_space"></div>

    <div class="login_form_title">Email</div>
    <label>
        <input type="email" name="email" placeholder="Введите email" class="login_form_input"/>
    </label>
    <div class="login_form_space"></div>

    <div class="login_form_title">Роль</div>
    <label>

        <select class="login_form_input" id="update_form_selected">
            <option selected="selected" value="registration">registration</option>
            <option value="doctor">doctor</option>
            <option value="admin">admin</option>
        </select>

    </label>
    <div class="login_form_space"></div>

    <div class="login_form_title"> Пароль</div>
    <label>
        <input type="password" name="password" placeholder="Введите пароль" class="login_form_input"/>
    </label>
    <div class="login_form_space"></div>

    <div class="login_form_title">Повторите пароль</div>
    <label>
        <input type="password" name="password" class="login_form_input"/>
    </label>
    <div class="login_form_space"></div>


    <div>
        <label><input type="button" value="Добавить пользователя" class="add_user_button"/></label>
    </div>
</form>

