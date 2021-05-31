var show = document.getElementById("show");
var hide = document.getElementById("hide");
var passField = document.getElementById("password");

console.log(show);
console.log(hide);
console.log(passField);

show.onclick = function(){
    passField.setAttribute('type', 'password');
    show.style.display = 'none';
    hide.style.display = 'block';
}

hide.onclick = function(){
    passField.setAttribute('type', 'text');
    hide.style.display = 'none';
    show.style.display = 'block';
}