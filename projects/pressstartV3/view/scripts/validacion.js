function validar(){
	var nombre, correo, mensaje, expresionC, expresionN, contenedor;
	nombre= document.getElementById("nombre").value;
	correo= document.getElementById("correo").value;
	mensaje= document.getElementById("mensaje").value;
	expresionN = /^[A-Za-z\s]+$/;
	expresionC = /\w+@\w+\.+[a-z]/;
	errores = document.getElementById("errores");
	if (nombre === "" || correo === "" || mensaje === "") {
		errores.innerHTML = '<div class="popupred"><h1 class="poph1">Error</h1><p>Por favor ingresar todos los campos.</p></div>';
		return false;
	}else if (nombre.length > 40) {
		errores.innerHTML = '<div class="popupred"><h1 class="poph1">Error</h1><p>Por favor ingresar un nombre más corto.</p></div>';
		return false;
	}else if (!expresionN.test(nombre)) {
		errores.innerHTML = '<div class="popupred"><h1 class="poph1">Error</h1><p>Por favor ingresar un nombre válido.</p></div>';
		return false;
	}else if (!expresionC.test(correo)){
		errores.innerHTML = '<div class="popupred"><h1 class="poph1">Error</h1><p>Por favor ingresar un correo válido.</p></div>';
		return false;
	}

}