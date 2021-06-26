<?php 


class producto
{
	private $listaProducto;
	private $sentencia;
	
	public function __construct($pdo)
	{
		$this->sentencia = $pdo->prepare("SELECT * FROM productos");
		$this->sentencia->execute();
		$this->listaProducto = $this->sentencia->fetchAll(PDO::FETCH_ASSOC);
	}

	public function getProductos(){
		
		return $this->listaProducto;
	}
}

 ?>