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