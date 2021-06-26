<?php 
/**
* 
*/
class contacto extends Controllers
{
	
	public function __construct(){
		parent::__construct();
	}

	public function contacto($params){
		$this->views->getView($this,"contacto");
	}
}
