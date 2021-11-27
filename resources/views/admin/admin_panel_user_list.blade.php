<div class="sheet_for_form">

    <div class="element_header">
        <div class="element_header_text">Список юзеров</div>

        <a href="/admin_panel/add_user" class="element_header_href" id="add_user_button">
            <input type="image" class="element_header_icon" src="storage/plus_icon.png" alt="">
        </a>

        <a href="/admin_panel/delete_users" class="element_header_href" id="delete_users">
            <input type="image" class="element_header_icon" src="storage/trashcan_icon.png" alt="">
        </a>

    </div>

    <br>

    <table class="users_table">
        <tr class="users_table_header">
            <td>
                <label for="subscribeNews"></label><input type="checkbox" id="subscribeNews" name="subscribe"
                                                          value="newsletter">
            </td>
            <td>Id</td>
            <td>Логин</td>
            <td>Почта</td>
            <td>Пароль</td>
        </tr>
        @foreach($users as $user)
        <tr class="users_table_body" onclick="clickOnUser({{$user["id"]}})">
            <td>
                <label for="subscribeNews"></label><input type="checkbox" id="subscribeNews" name="subscribe"
                                                          value="newsletter">
            </td>
            <td>{{$user["id"]}}</td>
            <td>{{$user["login"]}}</td>
            <td>{{$user["email"]}}</td>
            <td>{{$user["password"]}}</td>
        </tr>
        @endforeach
    </table>

</div>

<div class="modal_dialog" id="modal_dialog" style="display:none;">
    <div>
        <img class="close" src="storage/close_icon.png" alt="закрыть" onclick="closeModalDialog()">

        <div id="user_form"></div>

    </div>



</div>
