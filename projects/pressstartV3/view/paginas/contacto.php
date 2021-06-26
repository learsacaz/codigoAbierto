<?php include('header.php'); ?>
<!DOCTYPE html>
<html>
<head lang="es">
    <meta http-equiv="Content-type" charset="utf-8"/>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="author" content="Learsacaz Art.">
    <link rel="stylesheet" type="text/css" href="view/css/diseños.css">
    <link rel="stylesheet" type="text/css" href="view/css/header.css">
    <link rel="stylesheet" type="text/css" href="view/css/loader.css">
    <link rel="stylesheet" type="text/css" href="view/css/contacto.css">
    <script src="view/scripts/validacion.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-a11y="true" ></script>
    <title>Press Start To Web - Diseños páginas web Bogotá Colombia</title> 
</head>
<body id="bloquear">
    <!----------------------
            Header
    ---------------------->
    <?php echo (HeaderPag()); ?>
    <div class="contenedor">
        <!----------------------
                Cuerpo
        ---------------------->
        <div class="contenedor">
        <form class="formulario" action="view/paginas/enviocorreo.php" method="POST" onSubmit="return validar();">
            <h2>Contáctame</h2>
            <div id="errores"></div>
            <input type="text" class="finput" id="nombre" placeholder="Nombre" name="nombreC" required/><br>
            <input type="text" id="correo" placeholder="Correo" name="correoC" required/><br>
            <textarea type="text" id="mensaje" placeholder="Mensaje" name="mensajeC" required></textarea><br>
            <button type="submit">Enviar</button>
        </form>
    </div>
    </div>
    <!----------------------
            Footer
    ---------------------->
    <footer>
        <div class="down">
            <div id="copyright" align="center">Copyright&copy; 2020 - Page Created By Learsacaz Art. - All Rights Reserved</div>
        </div>
    </footer>
    <script src="view/scripts/main.js"></script>
</body>
</html>