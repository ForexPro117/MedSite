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

