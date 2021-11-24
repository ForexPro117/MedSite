if (window.location.pathname === '/') {
window.onscroll = function() {
    const scrolled = window.pageYOffset || document.documentElement.scrollTop;
    if(scrolled !== 0){
        document.querySelector('header').style.background = 'rgba(61, 126, 224, 0.95)';
    }else{
        document.querySelector('header').style.background = 'rgba(61, 126, 224, 0)';
    }
};
}


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
var i;
// Представление списка
function listView() {
  document.querySelector('.grid_view').style.background = 'rgba(183, 177, 177, 1)';
  document.querySelector('.list_view').style.background = 'rgba(138, 174, 242, 1)';
  for (i = 0; i < elements.length; i++) {
      (document.getElementsByClassName('description'))[i].style.display = '';
      (document.getElementsByClassName('address'))[i].style.display = '';
      (document.getElementsByClassName('number'))[i].style.display = '';
      elements[i].style.cssText = "background: ''; width: 100%; margin-bottom: 10px; cursor: pointer; padding: 10px; position: static;";
  }
}

// Представление сетки
function gridView() {
  document.querySelector('.grid_view').style.background = 'rgba(138, 174, 242, 1) url("../storage/grid.png") center no-repeat';
  document.querySelector('.list_view').style.background = 'rgba(183, 177, 177, 1)';
  let item = document.querySelectorAll("list_item").forEach(n => n.classList.remove('list_item').add('grid_item'));
//   item.forEach(n => n.classList.add('grid_item'));

}

