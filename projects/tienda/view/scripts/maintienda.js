var boton = document.getElementById('btn');
var nav = document.getElementById('nav');
boton.addEventListener('click', function(){
    nav.classList.toggle("mostrar");
});
var btnUp = document.getElementById('subirarrow');
btnUp.addEventListener("click", scrollUp);

function scrollUp(){
    let currentScroll = document.documentElement.scrollTop;
    if (currentScroll > 0) {
        window.requestAnimationFrame(scrollUp);
        window.scrollTo (0, currentScroll - (currentScroll /10));
    };
}

window.onscroll = function(){
    let currentScroll = document.documentElement.scrollTop;
    if (currentScroll > 400) {
        btnUp.style.transform = "scale(1)";
        console.log(currentScroll);
    }else if(currentScroll < 400){
        btnUp.style.transform = "scale(0)";
        console.log(currentScroll);
    };
}


//Bloquear CTRL C
window.onload = function() {
    var myInput = document.getElementById('bloquear');
    myInput.onpaste = function(e) {
    e.preventDefault();
    }

    myInput.oncopy = function(e) {
    e.preventDefault();
    }
}