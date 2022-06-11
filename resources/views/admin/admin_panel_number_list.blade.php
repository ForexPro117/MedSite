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
            <th>Время</th>
            <th>Пациент</th>
        </tr>
        @foreach($numbers as $number)
            <tr class="users_table_body">
                <td>
                    <label for="subscribeNews"></label>
                    <input type="checkbox" class="subscribeNews" id="subscribeNews" name="subscribe" value="newsletter">
                </td>
                <td>{{$number->id}}</td>
                <td>{{$number->time}}</td>
                <td>{{$number->name}}</td>
                <td>
                    <button onclick="clickOnUser()" class="edit_info"></button>
                </td>
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
