

function showHide() {
    if (document.querySelector('.number-box').style.display !== 'block') {
        document.querySelector('.number-box').style.display = 'block';
    } else {
        document.querySelector('.number-box').style.display = 'none';
    }
}

function selectСity(city) {
    document.getElementById('city').value = city;
    document.getElementById('city_box').style.display = 'none';
}

function selectDoctor(doctor) {
    document.getElementById('doctor').value = doctor;
    document.getElementById('doctor_box').style.display = 'none';
}

function selectLocality() {
    if (document.getElementById('city').value !== '') {
        document.querySelector('.selected_locality').style.display = 'block'
        document.getElementById('selected_city').value = document.getElementById('city').value;
        document.getElementById('box-locality').style.display = 'none'
    }
}

function selectPolyclinic() {
    if (document.getElementById('polyclinic').value !== '') {
        document.querySelector('.selected_polyclinic').style.display = 'block'
        document.getElementById('selected_poly_btn').value = document.getElementById('polyclinic').value;
        document.getElementById('box-polyclinics').style.display = 'none'
    }
}

function selectDoctorSpec() {
    if (document.getElementById('doctor').value !== '') {
        document.querySelector('.selected_doctor').style.display = 'block'
        document.getElementById('selected_doctor_btn').value = document.getElementById('doctor').value;
        document.getElementById('box-doctors').style.display = 'none'
    }
}

function deleteCity() {
    document.querySelector('.selected_locality').style.display = 'none'
    document.getElementById('box-locality').style.display = 'block'
    document.getElementById('city_box').style.display = 'block';
    document.getElementById('city').value = ""
}

function deletePolyclinic() {
    document.querySelector('.selected_polyclinic').style.display = 'none'
    document.getElementById('box-polyclinics').style.display = 'block'
    document.getElementById('polyclinic').value = ""
}

function deleteDoctor() {
    document.querySelector('.selected_doctor').style.display = 'none'
    document.getElementById('box-doctors').style.display = 'block'
    document.getElementById('doctor_box').style.display = 'block';
    document.getElementById('doctor').value = ""
}

var elements = document.getElementsByClassName("list_item");
var row = document.getElementsByClassName("row");
let desc = document.getElementsByClassName("description");
let address = document.getElementsByClassName("address");
let num = document.getElementsByClassName("number");
let box = document.querySelector(".box");
let grid = document.querySelector('.grid_view');
let list = document.querySelector('.list_view');
var i;

// Представление списка
function listView() {
     list.style.backgroundColor = '#8D98F9';
     list.style.backgroundImage = 'url("../storage/list.png")';
     grid.style.backgroundColor = '#B7B1B1';
     grid.style.backgroundImage = 'url("../storage/grid.png")';
     box.style.flexFlow = 'column';
  for (i = 0; i < elements.length; i++) {
      elements[i].classList.add('list_item');
      elements[i].classList.remove('grid_item');
      desc[i].style.display = '';
      address[i].style.display = '';
      num[i].style.display = '';
  }
}

// Представление сетки
function gridView() {
    list.style.backgroundColor = '#B7B1B1';
    list.style.backgroundImage = 'url("../storage/list.png")';
    grid.style.backgroundColor = '#8D98F9';
    grid.style.backgroundImage = 'url("../storage/grid.png")';
    box.style.flexFlow = 'row wrap';
    for(i = 0;i < elements.length; i++) {
        elements[i].classList.add('grid_item');
        desc[i].style.display = 'none';
        address[i].style.display = 'none';
        num[i].style.display = 'none';
    }
}

