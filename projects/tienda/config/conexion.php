<?php 

$servidor = "mysql:dbname=".DB.";host=".URLHOST;

try{
	$pdo = new PDO($servidor, USUARIO, PASSW,
		array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
		);
}catch(PDOException $e){
}

 ?>