function selectСity(city) {
    document.getElementById('city').value = city;
    document.getElementById('city_box').style.display = 'none';
}

function selectDoctor(doctor) {
    document.getElementById('docSpecialization').value = doctor;
    document.getElementById('doctor_box').style.display = 'none';
}

function selectLocality() {
    if (document.getElementById('city').value !== '') {
        document.querySelector('.selected_locality').style.display = 'flex'
        document.getElementById('selected_city').value = document.getElementById('city').value;
        document.getElementById('box-locality').style.display = 'none';
        document.querySelector('.availablePolyclinics').style.display = 'block';
        loadPolyclinics();
    } else {
        document.getElementById('regionErr').style.display = 'block';
    }
}

function selectPolyclinic(index) {
    let cards = document.querySelectorAll('.grid_item');
    cards.forEach((elem)=>{
        if (elem.id == index) {
            document.querySelector('.available_specs').style.display = 'block';
            loadSpecs(elem.id);
        } else {
            elem.style.display = 'none';
        }
    });
    document.getElementById('delete_polyclinic').style.display = 'flex';
    document.querySelector('.available_specs').style.display = 'block';
}

function deletePolyclinic() {
    document.getElementById('delete_polyclinic').style.display = 'none';
    let cards = document.querySelectorAll('.grid_item');

    cards.forEach((elem)=>{
        elem.style.display = 'flex';
    });
    document.querySelector('.available_specs').style.display = 'none';
}

function selectDoctorSpec() {
    if (document.getElementById('docSpecialization').value !== '') {
        document.querySelector('.selected_doctor').style.display = 'flex';
        document.getElementById('selected_doctor_btn').value = document.getElementById('docSpecialization').value;
        document.getElementById('box-doctors').style.display = 'none';
        document.querySelector('.available_doctors').style.display = 'block';
        loadDoctorCards();
    } else {
        document.getElementById('specErr').style.display = 'block';
    }
}

function deleteCity() {
    document.querySelector('.selected_locality').style.display = 'none';
    document.getElementById('box-locality').style.display = 'flex';
    document.getElementById('city_box').style.display = 'flex';
    document.getElementById('city').value = "";
    document.querySelector('.availablePolyclinics').style.display = 'none';
}

function deleteDoctorSpec() {
    document.querySelector('.selected_doctor').style.display = 'none';
    document.querySelector('.available_doctors').style.display = 'none';
    document.getElementById('box-doctors').style.display = 'flex';
    document.getElementById('doctor_box').style.display = 'flex';
    document.getElementById('docSpecialization').value = "";

}

function selectDoctorCard(index) {
    let cards = document.querySelectorAll('.doctor_card');

    for (let i = 0; i < 10; i++) {
        if (i === index) {
            document.querySelector('.available_numbers').style.display = 'block';
            loadNumbers();
        } else {
            cards[i].style.display = 'none';
        }
    }
    document.getElementById('delete_doctor_card').style.display = 'flex';
}

function deleteDocCard() {
    document.getElementById('delete_doctor_card').style.display = 'none';
    let cards = document.querySelectorAll('.doctor_card');

    for (let i = 0; i < 10; i++) {
        cards[i].style.display = 'block';
    }
}

function showHide(index) {
    if (document.getElementById(index).style.display !== 'block') {
        document.getElementById(index).style.display = 'block';
    } else {
        document.getElementById(index).style.display = 'none';
    }
}

function selectNumber(time) {
    document.querySelector('.selected_num').style.display = 'flex';
    document.getElementById('selected_num_btn').value = time;
    document.querySelector('.available_days').style.display = 'none';
}

function deleteNum(numbers) {
    document.querySelector('.selected_num').style.display = 'none';
    document.querySelector('.available_days').style.display = 'inline-block';
}

/**
 * Пост запрос к серверу
 * @param url путь
 * @param parameters параменты
 * @param successFunction колбек при успешном выполнении функции
 * @param failFunction
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
        });
    });
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
}

/**
 * Загрузить поликлиники
 * [!] данные берутся из формы, вызывается при нажатии на кнопку
 */
function loadPolyclinics() {
    queryPostRequest("/appPolyCard",
        {
            region: document.getElementById('city').value,
        }, function (data) {
            document.querySelector(".availablePolyclinics").innerHTML = data;
        })
}

function loadSpecs(id) {
    queryPostRequest("/appSpecs",
        {
            id: id,
        }, function (data) {
            document.querySelector(".available_specs").innerHTML = data;
        })
}

/**
 * Загрузить докторов
 * [!] данные берутся из формы, вызывается при нажатии на кнопку
 */
function loadDoctorCards() {
    queryPostRequest("/appDocCard",
        {
            poly_id: document.querySelector('.grid_item').id,
            spec: document.getElementById('docSpecialization').value,
        }, function (data) {
            document.querySelector(".available_doctors").innerHTML = data;
        })
}

function loadNumbers() {
    queryPostRequest("/appNumbers",
        {
            doctor: document.querySelector('.doctor_card').id,
        }, function (data) {
            document.querySelector(".available_numbers").innerHTML = data;
        })
}
