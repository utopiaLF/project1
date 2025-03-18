document.addEventListener('DOMContentLoaded', function () {
    // Menu toggle for mobile view
    let menuToggle = document.getElementById('menu-toggle');
    let menu = document.querySelector('.menu');
    menuToggle.addEventListener('change', function () {
        if (menuToggle.checked) {
            menu.style.display = 'flex';
        } else {
            menu.style.display = 'none';
        }
    });
});

let btn = document.querySelectorAll("#btn1");
let closer = document.getElementById("close-icon");
let call_form = document.getElementById("call-form");

for (let i = 0; i < btn.length; i++) {
    btn[i].addEventListener('click', ()=>{
        call_form.classList.add('active');
        body.classList.add('active');
    });
}
closer.addEventListener('click', ()=>{
    call_form.classList.remove('active');
    body.classList.remove('active');
});

// let question = document.getElementById("question")
// let answer = document.getElementById("answer")
// let qblock = document.getElementById("q-block")

// question.addEventListener('click', ()=>{
//     qblock.classList.toggle('active')
//     answer.classList.toggle('active')
// })

let question = document.getElementsByClassName('question');
let qblock = document.getElementsByClassName('q_block');
let answer = document.getElementsByClassName('answer');
let down_icon = document.getElementsByClassName('down_icon');

for (let i = 0; i <= qblock.length; i++) {
    qblock[i].addEventListener('click', () => {
        qblock[i].classList.toggle('active');
        answer[i].classList.toggle('active');
        down_icon[i].classList.toggle('active');
    });
}