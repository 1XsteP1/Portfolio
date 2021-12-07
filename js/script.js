let circle = document.querySelectorAll('.skills__circle');
let percent = document.querySelectorAll('.skills__percent');
let diagram = document.querySelectorAll(".skills__item");
let content = document.querySelectorAll(".skills__content");
const interval = 20;
let angle = 0;
const angle_increment = 6;
let percents = [100, 80, 30, 70, 70];
for (let i = 0; i < 5; i++) {
    animation(i, percents[i]);
}

function animation(i, percentNum) {
    let timer = window.setInterval(function () {
        circle[i].setAttribute("stroke-dasharray", angle + ", 10000");
        percent[i].innerHTML = parseInt(angle/560*100) + '%';
        if (angle >= 560) {
            window.clearInterval(window.timer);
        }
        angle += angle_increment;
        if (parseInt(percent[i].innerHTML.substring(0, percent[i].innerHTML.length - 1)) >= percentNum) {
            percent[i].innerHTML = percentNum+'%';
            clearInterval(timer);
        }
    }, interval);
}

diagram.forEach((e, index) => {
    e.addEventListener("click", ()=> {
        diagram.forEach(el => {
            el.id = '';
        })
        e.id = 'active';
        content.forEach(e => {
            e.style.display = "none";
        })
        content[index].style.display = "block";
    })
});

content.forEach(e => {
    e.style.display = "none";
})
content[0].style.display = "block";

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
let header = document.querySelector('.header');
let burger = document.querySelector(".menu");
burger.addEventListener('click', ()=> {
    burger.classList.toggle("active")
    header.classList.toggle("active__header")
})
let headerLinks = document.querySelectorAll('.header__item')
headerLinks.forEach((e) => {
    e.addEventListener('click', () => {
        burger.classList.toggle("active")
        header.classList.toggle("active__header")
    })
})
