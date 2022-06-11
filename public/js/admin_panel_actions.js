/**
 * Гет запрос к серверу
 * @param url пусть
 * @param successFunction колбек при успешном получении ответа
 */
function queryGetRequest(url, successFunction) {
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
function queryPostRequest(url, parameters, successFunction, failFunction) {
    $(document).ready(function () {
        $.ajax({
            url: url,
            method: "POST",
            data: {'data': JSON.stringify(parameters)},
            dataType: "html",
            success: function (data) {
                successFunction(data)
            }
        }).fail((data) => failFunction(data));
    });
}


/**
 * загрузить страницу со списком юзеров
 */
function loadUsersListPage() {
    queryPostRequest("admin/user/list", {}, function (data) {
        document.getElementById("action_window").innerHTML = data
    })
    document.getElementById("text").innerText = "Список пользователей";
    document.getElementById('user_list').style.background = 'rgb(11, 136, 168)';
    document.getElementById('user_list').style.color = 'rgb(255, 255, 255)';
    document.getElementById('employee_list').style.color = 'rgb(0, 0, 0)';
    document.getElementById('employee_list').style.background = 'rgb(255, 255, 255)';
    document.getElementById('number_list').style.color = 'rgb(0, 0, 0)';
    document.getElementById('number_list').style.background = 'rgb(255, 255, 255)';
}
/**
 * загрузить страницу со списком номерков
 */
function loadNumbersListPage() {
    queryPostRequest("admin/user/numbersList", {}, function (data) {
        document.getElementById("action_window").innerHTML = data
    })
    document.getElementById('number_list').style.color = 'rgb(255, 255, 255)';
    document.getElementById('number_list').style.background = 'rgb(11, 136, 168)';
    document.getElementById("text").innerText = "Список номерков";
    document.getElementById('user_list').style.background = 'rgb(255, 255, 255)';
    document.getElementById('user_list').style.color = 'rgb(0, 0, 0)';
    document.getElementById('employee_list').style.color = 'rgb(0, 0, 0)';
    document.getElementById('employee_list').style.background = 'rgb(255, 255, 255)';

}
/**
 * загрузить страницу со списком сотрудников
 */
function loadEmployeesListPage() {
    queryPostRequest("admin/employee/list", {}, function (data) {
        document.getElementById("action_window").innerHTML = data
    })
    document.getElementById('employee_list').style.color = 'rgb(255, 255, 255)';
    document.getElementById('employee_list').style.background = 'rgb(11, 136, 168)';
    document.getElementById("text").innerText = "Список сотрудников";
    document.getElementById('user_list').style.background = 'rgb(255, 255, 255)';
    document.getElementById('user_list').style.color = 'rgb(0, 0, 0)';
    document.getElementById('number_list').style.color = 'rgb(0, 0, 0)';
    document.getElementById('number_list').style.background = 'rgb(255, 255, 255)';
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
    //TODO тут не забыть!
    /*loadUsersListPage();*/
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

    queryPostRequest("/admin/user/update",
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

    queryPostRequest("/admin/employee/update",
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

/**
 * загрузить страницу с формой для добавления юзера
 */
function loadAddUserPage() {
    queryGetRequest("/admin/user/add-form/", function (data) {
        document.getElementById("action_window").innerHTML = data;
    });
    document.getElementById("text").innerText = "Добавление пользователя";

}


/**
 * загрузить страницу с формой для добавления сотрудника
 */
function loadAddEmployeePage() {
    queryGetRequest("/admin/employee/add-form/", function (data) {
        document.getElementById("action_window").innerHTML = data;
    });
    document.getElementById("text").innerText = "Добавление сотрудника";
}

/**
 * Добавляет пользователя в базу данных
 * [!] данные берутся из формы, вызывается при нажатии на кнопку
 */
function addUser() {

    queryPostRequest("/admin/user/add-form",
        {
            name: document.getElementById('addForm_name').value,
            email: document.getElementById('addForm_email').value,
            policy: document.getElementById('addForm_policy').value
        }, function (data) {
            document.getElementById("action_window").innerHTML = data;
            document.getElementById("text").innerText = "Список пользователей";
        })
}

/**
 * Добавляет сотрудника в базу данных
 * [!] данные берутся из формы, вызывается при нажатии на кнопку
 */
function addEmployee() {

    queryPostRequest("admin/employee/add-form",
        {
            login: document.getElementById('addForm_login').value,
            email: document.getElementById('addForm_email').value,
            role: document.getElementById('addForm_selected').value,
            password: document.getElementById('addForm_password').value,
            password_confirmation: document.getElementById('addForm_password_confirmation').value
        }, function (data) {
            document.getElementById("action_window").innerHTML = data;
            document.getElementById("text").innerText = "Список сотрудников";
        })
}

// обработчик нажатия на главный чекбокс(отмечает все элементы или снимает отметки)
function markUnmarkAll() {
    let i;
    let checkbox = document.getElementById('select_all');
    let marks = document.getElementsByClassName('subscribeNews');
    if (checkbox.checked === true) {
        for (i = 0; i<marks.length; i++) {
            marks[i].checked = true
        }
    } else {
        for (i = 0; i<marks.length; i++) {
            marks[i].checked = false
        }
    }
}
