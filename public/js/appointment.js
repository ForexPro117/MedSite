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
        document.querySelector('.selected_locality').style.display = 'flex'
        document.getElementById('selected_city').value = document.getElementById('city').value;
        document.getElementById('box-locality').style.display = 'none'
    }
}

function selectPolyclinic() {
    if (document.getElementById('polyclinic').value !== '') {
        document.querySelector('.selected_polyclinic').style.display = 'flex'
        document.getElementById('selected_poly_btn').value = document.getElementById('polyclinic').value;
        document.getElementById('box-polyclinics').style.display = 'none'
    }
}

function selectDoctorSpec() {
    if (document.getElementById('doctor').value !== '') {
        document.querySelector('.selected_doctor').style.display = 'flex'
        document.getElementById('selected_doctor_btn').value = document.getElementById('doctor').value;
        document.getElementById('box-doctors').style.display = 'none';
        document.querySelector('.available_doctors').style.display = 'block'
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
    document.getElementById('doctor.css').value = ""
}

function selectDoctorCard(index) {
        let cards = document.querySelectorAll('.doctor_card');

        for (let i = 0; i < 10; i++) {
            if (i === index) {
                document.querySelector('.available_numbers').style.display = 'block'
            } else {
                cards[i].style.display = 'none';
            }
        }
}

function showHide(index) {
    if (document.getElementById(index).style.display !== 'block') {
        document.getElementById(index).style.display = 'block';
    } else {
        document.getElementById(index).style.display = 'none';
    }
}
