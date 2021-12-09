<form class="add_user_from">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text_error">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="login_form_title">Логин</div>
    <label>
        <input type="text" name="login" id="addForm_login" placeholder="Введите логин" class="login_form_input"/>
    </label>
    <div class="login_form_space"></div>

    <div class="login_form_title">Email</div>
    <label>
        <input type="email" name="email" id="addForm_email" placeholder="Введите email" class="login_form_input"/>
    </label>
    <div class="login_form_space"></div>

    <div class="login_form_title">Роль</div>
    <label>

        <select class="login_form_input" name="role" id="addForm_selected">
            <option selected="selected" value="registration">registration</option>
            <option value="doctor">doctor</option>
            <option value="admin">admin</option>
        </select>

    </label>
    <div class="login_form_space"></div>

    <div class="login_form_title"> Пароль</div>
    <label>
        <input type="password" name="password" id="addForm_password" placeholder="Введите пароль"
               class="login_form_input"/>
    </label>
    <div class="login_form_space"></div>

    <div class="login_form_title">Повторите пароль</div>
    <label>
        <input type="password" name="password_confirmation" id="addForm_password_confirmation"
               class="login_form_input"/>
    </label>
    <div class="login_form_space"></div>
    <div>
        <label><input type="button" onclick="addEmployee()" value="Добавить пользователя" class="add_user_button"/></label>
    </div>
</form>

