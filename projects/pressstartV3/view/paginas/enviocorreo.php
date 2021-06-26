<?php 
$nombreC = $_POST['nombreC'];
$correoC = $_POST['correoC'];
$mensajeC = $_POST['mensajeC'];
if (preg_match("/^[A-Za-z\s]+$/", $nombreC)) {
	if (preg_match("/^\w+@\w+\.+[a-z]+$/", $correoC)) {
		if ($nombreC != "" || $correoC != "" || $mensajeC != "") {
			if (strlen($nombreC)>40) {
				echo "<script type=\"text/javascript\">
				alert('Porfavor ingresar un nombre más corto.');
		        history.go(-1);
			    </script>";	
			}else{
				$contenidoC = "Nombre: ".$nombreC." <br> Correo: ".$correoC."<br> Mensaje: ".$mensajeC;
				mail("learsacaz@hotmail.com", "Contacto", $contenidoC);	
			}
		}else{
			echo "<script type=\"text/javascript\">
			alert('Porfavor ingresar todos los campos.');
	        history.go(-1);
		    </script>";	
		}
	}else{
		echo "<script type=\"text/javascript\">
		alert('Porfavor ingresar un correo válido.');
        history.go(-1);
	    </script>";
	}
}else{
	echo "<script type=\"text/javascript\">
	alert('Porfavor ingresar un nombre válido.');
    history.go(-1);
	</script>";
}
