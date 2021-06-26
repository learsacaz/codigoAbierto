<?php include('header.php'); ?>
<!DOCTYPE html>
<html>
<head lang="es">
	<meta http-equiv="Content-type" charset="utf-8"/>
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="author" content="Learsacaz Art.">
    <link rel="stylesheet" type="text/css" href="view/css/informacion.css">
    <link rel="stylesheet" type="text/css" href="view/css/header.css">
    <link rel="stylesheet" type="text/css" href="view/css/loader.css">
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
        <div class="cuerpo">
            <div class="texto1">
                <h2 align="center">¿Quién soy?</h2><br>
                <p>Mi nombre es Leonard, soy estudiante de software y me gusta la tecnología. Esa es la razón por el que creé esta página, para poder mostrar lo que puedo hacer.<br><br>
                Espero disfrute de mi trabajo.</p>
                <br>
                <div class="tablacont">
                    <table class="tabla">
                        <tr>
                        <td><b>Nombres:</b></td>
                        <td>Leonard Armando</td>
                        </tr>
                        <tr>
                        <td><b>Apellidos:</b></td>
                        <td>Saumeth Camargo</td>
                        </tr>
                        <tr>
                        <td><b>Edad:</b></td>
                        <td>21</td>
                        </tr>
                        <tr>
                        <td><b>País:</b></td>
                        <td>Colombia</td>
                        </tr>
                        <tr>
                        <td><b>Ciudad:</b></td>
                        <td>Bogotá D.C.</td>
                        </tr>
                        <tr>
                        <td><b>Número:</b></td>
                        <td>+57 3212266943</td>
                        </tr>
                        <tr>
                        <td><b>Correo:</b></td>
                        <td>lsaumeth@uniempresarial.edu.co</td>
                        </tr>
                    </table>
                </div>
                <br><br>
                <p>Si le gustaría escribirme para requirir mis servicios, oprima <a href="<?php echo base_url(); ?>contacto">Aquí</a> para enviarme un correo directo.</p>
                <br><br>
            </div>
        </div>
        <div class="cuerpo_bajo">
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