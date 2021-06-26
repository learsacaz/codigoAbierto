<?php include('headertienda.php'); include('controller/controlproduct.php'); ?>
<!DOCTYPE html>
<html>
<head lang="es">
    <meta http-equiv="Content-type" charset="utf-8"/>
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="author" content="Learsacaz Art.">
    <link rel="stylesheet" type="text/css" href="view/css/tienda.css">
    <link rel="stylesheet" type="text/css" href="view/css/headertienda.css">
    <link rel="icon" href="view/imagenes/insignia.ico">
    <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-a11y="true" ></script>
    <title>Pagina de presentación </title> 
</head>
<body id="bloquear">
    <div class="turnback">
        <a href="<?php echo base_url(); ?>designweb"><i class="fas fa-arrow-circle-left"></i> Volver</a>
    </div>
    <!----------------------
            Header
    ---------------------->
    <?php echo (HeaderPag()); ?>
    <div class="subir-arrow" id="subirarrow"><i class="fas fa-chevron-up"></i></i></div>
    <div class="contenedor">
        <!----------------------
                Cuerpo
        ---------------------->
        <div class="seccion">
            <div class="categorias">
                <h2>Categorías</h2>
                <ul>
                    <a href=""><li>Postres</li></a>
                    <a href=""><li>Pasteles</li></a>
                    <a href=""><li>Arreglos</li></a>
                    <a href=""><li>Bebidas</li></a>
                </ul>
            </div>
        </div>
        <div id="cuerpo" class="cuerpo">
            <div class="tituloseccion"><h2>Productos</h2></div> 
            <div class="cartas" id="cartas">
                <div class="card">
                    <img src="view/imagenes/${json[i].imagen}">
                    <div class="cardbody">
                        <h4>${json[i].nombre}</h4>
                        <h5 class="precioP">$${json[i].precio} COP</h5>
                        <p class="descripcion">${json[i].descripcion}</p>
                    </div>
                </div>
                <div class="card">
                    <img src="view/imagenes/${json[i].imagen}">
                    <div class="cardbody">
                        <h4>${json[i].nombre}</h4>
                        <h5 class="precioP">$${json[i].precio} COP</h5>
                        <p class="descripcion">${json[i].descripcion}</p>
                    </div>
                </div>
                <div class="card">
                    <img src="view/imagenes/${json[i].imagen}">
                    <div class="cardbody">
                        <h4>${json[i].nombre}</h4>
                        <h5 class="precioP">$${json[i].precio} COP</h5>
                        <p class="descripcion">${json[i].descripcion}</p>
                    </div>
                </div>
                <div class="card">
                    <img src="view/imagenes/${json[i].imagen}">
                    <div class="cardbody">
                        <h4>${json[i].nombre}</h4>
                        <h5 class="precioP">$${json[i].precio} COP</h5>
                        <p class="descripcion">${json[i].descripcion}</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!----------------------
            Footer
    ---------------------->
    <footer>
        <div class="down">
            <div id="copyright" align="center">Copyright&copy; 2021 - Page Created By Learsacaz Art. - All Rights Reserved</div>
        </div>
    </footer>
    <script src="view/scripts/mainapp.js"></script>
    <script src="view/scripts/buscador.js"></script>
</body>
</html>