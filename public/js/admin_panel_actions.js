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
            data: {'data': JSON.stringify(parameters)},
            dataType: "html",
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
    queryPostRequest("admin/user/" + id, {}, function (data) {
        document.getElementById("user_form").innerHTML = data;
        document.getElementById("update_form_button").onclick = function (event) {
            updateUser();
        };
    })
}

/**
 * загрузить страницу со списком юзеров
 */
function loadUsersListPage() {
    queryPostRequest("admin/user_list", {}, function (data) {
        document.getElementById("action_window").innerHTML = data
    })
    document.getElementById("text").innerText = "Список пользователей"
}

/**
 * загрузить страницу с формой для добавления юзера
 */
function loadAddUserPage() {
    queryPostRequest("admin/add_user_from", {}, function (data) {
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
    }

    document.getElementById("add_user_button").onclick = function (event) {
        loadAddUserPage()
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

    queryPostRequest("/admin/user_update",
        {
            id: document.getElementById('update_form_id').value,
            name: document.getElementById('update_form_login').value,
            email: document.getElementById('update_form_email').value,
            role: document.getElementById('update_form_selected').value,
            password: document.getElementById('update_form_password').value
        }, function (data) {
            closeModalDialog()
            document.getElementById("action_window").innerHTML = data
        })
}

