/**
 * Гет запрос к серверу
 * @param url пусть
 * @param successFunction колбек при успешном получении ответа
 */
function queryGetPage(url, successFunction) {
    $(document).ready(function () {
        $.ajax({
            url: url,
            method: "GET",
            dataType: "html",
            success: function (data) {
                successFunction(data)
            }
        });
    });
}

/**
 * Пост запрос к серверу
 * @param url путь
 * @param parameters параменты
 * @param successFunction колбек при успешном выполнении функции
 */
function queryPostRequest(url, parameters, successFunction) {
    $(document).ready(function () {
        $.ajax({
            url: url,
            method: "POST",
            data: JSON.stringify(parameters),
            success: function (data) {
                successFunction(data)
            }
        });
    });
}

/**
 * загрузить форму с информацией по юзеру
 * @param id Int айди юзера
 */
function loadUserInfoFormPage(id) {
    document.getElementById("user_form").innerHTML = ""
    queryPostRequest("admin_panel_user_info_form/" + id, {}, function (data) {
        document.getElementById("user_form").innerHTML = data
        applyUserInfoForm()
    })
}

/**
 * загрузить страницу со списком юзеров
 */
function loadUsersListPage() {
    queryPostRequest("admin_panel_user_list", {}, function (data) {
        document.getElementById("action_window").innerHTML = data
    })
    document.getElementById("text").innerText = "Список пользователей"
}

/**
 * загрузить страницу с формой для добавления юзера
 */
function loadAddUserPage() {
    queryPostRequest("admin_panel_add_user_from",{}, function (data) {
        document.getElementById("action_window").innerHTML = data
    })
    document.getElementById("text").innerText = "Добавление пльзователя"
}

/**
 * Действия при загрузке страницы
 */
window.onload = function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    loadUsersListPage()

    document.getElementById("get_users_button").onclick = function (event) {
        loadUsersListPage()
        return false
    }

    document.getElementById("add_user_button").onclick = function (event) {
        loadAddUserPage()
        return false
    };
}

/**
 * Закрыть модальное окно
 */
function closeModalDialog() {
    document.getElementById("modal_dialog").style.display = 'none'
}

/**
 * Показать модальное окно
 */
function showModalDialog() {
    document.getElementById("modal_dialog").style.display = 'block'
}

/**
 * Обработчик при нажатии на юзера с таблице со списокм юзеров
 * @param userId Int айди юзера
 */
function clickOnUser(userId) {
    showModalDialog()
    loadUserInfoFormPage(userId)
}

/**
 * Обновить юзера
 * [!] данные берутся из формы, вызывается при нажатии на кнопку submit
 */
function updateUser() {

    queryPostRequest("admin_panel_update_user",
        {
            id: document.getElementById('update_form_id').value,
            login: document.getElementById('update_form_login').value,
            email: document.getElementById('update_form_email').value,
            role: document.getElementById('update_form_selected').value,
            password: document.getElementById('update_form_password').value
        }, function (data) {
            closeModalDialog()
            document.getElementById("action_window").innerHTML = data
        })
}

/**
 * Обновляет логику нажатия на кнопку в форме при загрузке форму
 */
function applyUserInfoForm() {

    var form = document.getElementById('update_from');
    if (form.attachEvent) {
        form.attachEvent("submit", processForm);
    } else {
        form.addEventListener("submit", processForm);
    }
}

/**
 * Логика нажатия на кнопку в форме
 * @param e элемент
 */
function processForm(e) {
    if (e.preventDefault) e.preventDefault();
    updateUser()
    return false;
}
