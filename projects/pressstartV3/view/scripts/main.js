var boton = document.getElementById('btn');
console.log(boton);
var nav = document.getElementById('nav');
boton.addEventListener('click', function(){
    nav.classList.toggle("mostrar");
});

//Bloquear CTRL C
window.onload = function() {
    var myInput = document.getElementById('bloquear');
    var contenedor = document.getElementById('loading');
    myInput.onpaste = function(e) {
    e.preventDefault();
    }

    myInput.oncopy = function(e) {
    e.preventDefault();
    }

    myInput.oncontextmenu = function(e){
      return false;
    }
    contenedor.style.visibility = 'hidden';
    contenedor.style.opacity = '0';
    contenedor.style.transition = '1.5s';
}