<?php
function HeaderPag(){
?>
	<div id="loading">
        <div class="loader"></div><img src="view/imagenes/insignia.png" align="middle"/>
    </div>
	<header>
        <a href="<?php echo base_url(); ?>"><img alt="Press Start To Web" src="view/imagenes/titulo.gif" class="logo" align="middle"/></a>
        <div align="center">
        <div id="btn"><i class="fas fa-bars icon-menu" aling="right"></i></div>
            <div class="navegador" id="nav">
                <ul class="menu">
                    <a href="<?php echo base_url(); ?>"><li class="linka">Inicio</li></a>
                    <a href="<?php echo base_url(); ?>designweb"><li class="linka">Diseños web</li></a>
                    <a href="<?php echo base_url(); ?>informacion"><li class="linka">Información</li></a>
                </ul>
            </div>
        </div>
    </header>
<?php
}
?>