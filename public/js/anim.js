function showHide(index) {
    if (document.getElementById(index).style.display !== 'block') {
        document.getElementById(index).style.display = 'block';
    } else {
        document.getElementById(index).style.display = 'none';
    }
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
    for (i = 0; i < elements.length; i++) {
        elements[i].classList.add('grid_item');
        desc[i].style.display = 'none';
        address[i].style.display = 'none';
        num[i].style.display = 'none';
    }
}

function showDoctor(index) {
    if (document.getElementById(index).style.display !== 'flex')
        document.getElementById(index).style.display = 'flex';
    else {
        document.getElementById(index).style.display = 'none';
    }
}


