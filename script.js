let menu = document.querySelector('#menu-btn');

let navbar = document.querySelector('.header .navbar');

menu.onclick = function() {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}
window.onscroll = function() {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}




let loadmore = document.querySelector('.package .load-more .btn');
let currentitem = 3;

loadmore.onclick = () => {
    let boxes = [...document.querySelectorAll('.package .box-container .box')];
    for (var i = currentitem; i < currentitem + 3; i++) {
        boxes[i].style.display = "inline-block";
    };
    currentitem += 3;
    if (currentitem >= boxes.length) {
        loadmore.style.display = "none";
    }
}