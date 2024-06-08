/* the date is used in the footer to display the current year */
const date = new Date();
const year = date.getFullYear();
let span = document.getElementById('span')
span.innerHTML= year;

function show(){
    var pass = document.querySelector('#pass')
    if(pass.type === "password"){
        pass.type = "text"
    }else{
        pass.type = "password"
    }
}

function show2(){
    var pass = document.querySelector('#pass2')
    if(pass.type === "password"){
        pass.type = "text"
    }else{
        pass.type = "password"
    }
}

function show3(){
    var pass = document.querySelector("#pass3")
    if(pass.type === "password"){
        pass.type = "text"
    }else{
        pass.type = "password"
    }
}

function display(){
    let mobile_nav2 = document.querySelector('.mobile-nav2');
let hamburger = document.querySelector('#hamburger');
let close_btn = document.querySelector('#close');

    mobile_nav2.style.display='block';
    close_btn.style.display='block';
    hamburger.style.display='none';
}

function hide(){
    let mobile_nav2 = document.querySelector('.mobile-nav2');
let hamburger = document.querySelector('#hamburger');
let close_btn = document.querySelector('#close');

    mobile_nav2.style.display='none';
    close_btn.style.display='none';
    hamburger.style.display='block';
}