<form method="post" action="/admin/user/add-form" class="add_user_from">
@csrf
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="login_form_title">Фамилия</div>
    <label>
        <input type="text" name="name" id="addForm_name" placeholder="Введите фамилию" class="login_form_input"/>
    </label>
    <div class="login_form_space"></div>

    <div class="login_form_title">Email</div>
    <label>
        <input type="email" name="email"  id="addForm_email" placeholder="Введите email" class="login_form_input"/>
    </label>
    <div class="login_form_space"></div>

    <div class="login_form_title">Полис</div>
    <label>
        <input type="text" name="password"  id="addForm_password" placeholder="Введите полис" class="login_form_input"/>
    </label>
    <div class="login_form_space"></div>

    <div>
        <label><input type="submit" value="Добавить пользователя" class="add_user_button"/></label>
    </div>
</form>

