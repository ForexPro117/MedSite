<form class="add_user_form">
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text_error">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <label>
        <div class="login_form_title">Фамилия</div>
        <input type="text" name="name" id="addForm_name" placeholder="Введите фамилию" class="login_form_input"/>
    </label>

    <label>
        <div class="login_form_title">Email</div>
        <input type="email" name="email" id="addForm_email" placeholder="Введите email" class="login_form_input"/>
    </label>

    <label>
        <div class="login_form_title">Полис</div>
        <input type="text" name="policy" id="addForm_policy" placeholder="Введите полис" class="login_form_input"/>
    </label>

    <label>
        <input type="button" onclick="addUser()" value="Добавить пользователя" class="add_user_button"/>
    </label>
</form>
