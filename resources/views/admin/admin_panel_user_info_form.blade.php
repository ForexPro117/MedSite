<form class="update_from" id="update_from">

    <label>
    <div class="login_form_title">Id</div>
        <input type="text" name="userId" disabled value="{{$user->id}}" class="login_form_input" id="update_form_id"/>
    </label>

    <label>
    <div class="login_form_title">Имя</div>
        <input type="text" name="name" value="{{$user->name}}" class="login_form_input" id="update_form_name"/>
    </label>

    <label>
    <div class="login_form_title">Email</div>
        <input type="email" name="email" value="{{$user->email}}" class="card-text login_form_input" id="update_form_email"/>
    </label>

    <label>
    <div class="login_form_title">Пароль</div>
        <input type="text" name="password" class="card-text login_form_input" placeholder="Введите новый пароль" value=""
               id="update_form_password"/>
    </label>

    <button class="add_user_button" id="update_form_button">Обновить</button>
</form>
