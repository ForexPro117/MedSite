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
 * загрузить страницу со списком юзеров
 */
function loadUsersListPage() {
    queryPostRequest("admin/user_list", {}, function (data) {
        document.getElementById("action_window").innerHTML = data
    })
    document.getElementById("text").innerText = "Список пользователей";
}

/**
 * загрузить страницу со списком сотрудников
 */
function loadEmployeesListPage() {
    queryPostRequest("admin/employee_list", {}, function (data) {
        document.getElementById("action_window").innerHTML = data
    })
    document.getElementById("text").innerText = "Список сотрудников";
}

/**
 * загрузить страницу с формой для добавления юзера
 */
function loadAddUserPage() {
    queryPostRequest("admin/add_user_from", {}, function (data) {
        document.getElementById("action_window").innerHTML = data
    })
    document.getElementById("text").innerText = "Добавление пльзователя";
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

    /*  document.getElementById("get_users_button").onclick = function (event) {
          loadUsersListPage();
      };

      document.getElementById("add_user_button").onclick = function (event) {
          loadAddUserPage();
      };*/
}

/**
 * Закрыть модальное окно
 */
function closeModalDialog() {
    document.getElementById("modal_dialog").style.display = 'none';
}

/**
 * Показать модальное окно
 */
function showModalDialog() {
    document.getElementById("modal_dialog").style.display = 'block';
}

/**
 * Обработчик при нажатии на юзера в таблице со списоком юзеров
 * @param userId Int айди юзера
 */
function clickOnUser(userId) {
    showModalDialog();
    loadUserInfoFormPage(userId, "admin/user");
}

/**
 * Обработчик при нажатии на сотрудника в таблице со списоком сотрудников
 * @param userId Int айди юзера
 */
function clickOnEmployee(userId) {
    showModalDialog();
    loadUserInfoFormPage(userId, "admin/employee");
}

/**
 * загрузить форму с информацией по пользователю
 * @param id Int айди юзера
 * @param url String адресс по какому руту искать пользователя
 */
function loadUserInfoFormPage(id, url) {
    document.getElementById("user_form").innerHTML = ""
    queryPostRequest(url + '/' + id, {}, function (data) {
        document.getElementById("user_form").innerHTML = data;
        document.getElementById("update_form_button").onclick = function (event) {
            (url === 'admin/user') ? updateUser() : updateEmployee();
        };
    });

}


/**
 * Обновить юзера
 * [!] данные берутся из формы, вызывается при нажатии на кнопку
 */
function updateUser() {

    queryPostRequest("/admin/user_update",
        {
            id: document.getElementById('update_form_id').value,
            name: document.getElementById('update_form_name').value,
            email: document.getElementById('update_form_email').value,
            password: document.getElementById('update_form_password').value
        }, function (data) {
            closeModalDialog()
            document.getElementById("action_window").innerHTML = data;
        })
}

/**
 * Обновить сотрудника
 * [!] данные берутся из формы, вызывается при нажатии на кнопку
 */
function updateEmployee() {

    queryPostRequest("/admin/employee_update",
        {
            id: document.getElementById('update_form_id').value,
            login: document.getElementById('update_form_login').value,
            email: document.getElementById('update_form_email').value,
            role: document.getElementById('update_form_selected').value,
            password: document.getElementById('update_form_password').value
        }, function (data) {
            closeModalDialog()
            document.getElementById("action_window").innerHTML = data;
        })
}
