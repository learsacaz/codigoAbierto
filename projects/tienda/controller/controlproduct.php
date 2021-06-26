<?php 

include('config/config.php'); 
require_once('config/conexion.php'); 
include('models/producto_model.php');
$obj= new producto($pdo);
$listaProductos = $obj->getProductos();
$objson=json_encode($listaProductos);
echo("<script type='text/javascript'>let json = eval($objson);</script>");

 ?>