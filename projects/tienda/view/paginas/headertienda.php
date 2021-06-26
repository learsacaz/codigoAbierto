<?php
function HeaderPag(){
?>
	<div class="header">
        <div class="arribaheader">
            <div class="redes">
                <div class="red1" title="Nuestro Facebook"><a href=""><i class="fab fa-facebook-square"></i></a></div>
                <div class="red2" title="Nuestro Instagram"><a href=""><i class="fab fa-instagram-square"></i></a></div>
                <div class="red3" title="Nuestro Whatsapp"><a href=""><i class="fab fa-whatsapp-square"></i></a></div>
            </div>
            <div class="logo"><a href=""><img title="Tus dulces sueños" src="view/imagenes/logo.png"></a></div>
            <div class="buscadorhead">
                <input placeholder="Buscar producto" id="buscador" class="buscador"><button id="btn-buscar" class="btn-buscar"><i class="fas fa-search"></i> </button>
            </div>
        </div>
        <div id="btn"><i class="fas fa-bars icon-menu" aling="right"></i></div>
        <div class="menu" id="nav">
            <ul>
                <a id="enlace1" class="" href=""><li>Productos</li></a>
                <a id="enlace2" class="" href=""><li>Sobre nosotros</li></a>
                <a id="enlace3" class="" href=""><li>Contactanos</li></a>
                <a id="enlace4" class="" href=""><li>Blog</li></a>
            </ul>
        </div>
    </div>
<?php
}
?>