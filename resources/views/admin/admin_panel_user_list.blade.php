<div class="sheet_for_form">
    <div class="element_header">
        <button id="add_users" onclick="loadAddUserPage()" class="element_header_icon"></button>
        <button id="delete_users" onclick="" class="element_header_icon"></button>
        <button onclick="" id="search" class="element_header_icon"></button>
    </div>
    <br>
    <table class="users_table">
        <tr class="users_table_header">
            <td>
                <label for="subscribeNews"></label>
                <input onclick="markUnmarkAll()" type="checkbox" id="select_all" name="subscribe" value="newsletter">
            </td>
            <th>Id</th>
            <th>Фамилия</th>
            <th>Email</th>
            <th>Создан</th>
            <th>Обновлен</th>
        </tr>
        @foreach($users as $user)
            <tr class="users_table_body">
                <td>
                    <label for="subscribeNews"></label>
                    <input type="checkbox" class="subscribeNews" id="subscribeNews" name="subscribe" value="newsletter">
                </td>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>
                <td><button onclick="clickOnUser({{$user->id}})" class="edit_info"></button></td>
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
