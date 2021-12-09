<form class="add_user_form">
    @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text_error">{{ $error }}</li>
                @endforeach
            </ul>
    @endif

    <label>
        <div class="login_form_title">Логин</div>
        <input type="text" name="login" id="addForm_login" placeholder="Введите логин" class="login_form_input"/>
    </label>

    <label>
        <div class="login_form_title">Email</div>
        <input type="email" name="email" id="addForm_email" placeholder="Введите email" class="login_form_input"/>
    </label>

    <label>
        <div class="login_form_title">Роль</div>
        <select class="login_form_input" name="role" id="addForm_selected">
            <option selected="selected" value="registration">registrar</option>
            <option value="doctor">doctor</option>
            <option value="admin">admin</option>
        </select>
    </label>

    <label>
        <div class="login_form_title"> Пароль</div>
        <input type="password" name="password" id="addForm_password" placeholder="Введите пароль"
               class="login_form_input"/>
    </label>

    <label>
        <div class="login_form_title">Повторите пароль</div>
        <input type="password" name="password_confirmation" id="addForm_password_confirmation"
               class="login_form_input" placeholder="Введите пароль"/>
    </label>

    <label>
        <input type="button" onclick="addEmployee()" value="Добавить пользователя" class="add_user_button"/>
    </label>
</form>

