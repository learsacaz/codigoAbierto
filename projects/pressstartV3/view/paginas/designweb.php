<?php include('header.php'); ?>
<!DOCTYPE html>
<html>
<head lang="es">
	<meta http-equiv="Content-type" charset="utf-8"/>
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="author" content="Learsacaz Art.">
    <link rel="stylesheet" type="text/css" href="view/css/diseños.css">
    <link rel="stylesheet" type="text/css" href="view/css/size.css">
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
        <div class="cuerpo errors">
            <div>
            <h1 class="drawings" align="center">Diseños Web</h1>
            </div>
            <section class="webs">
                <article>
                    <a href="<?php echo base_url(); ?>design1"><img src="view/imagenes/design1.png" class="designpro"></a>
                    <a href="<?php echo base_url(); ?>design2"><img src="view/imagenes/design2.png" class="designpro"></a>
                </article>
            </section>
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