<?php 
/**
* 
*/
class informacion extends Controllers
{
	
	public function __construct(){
		parent::__construct();
	}

	public function informacion($params){
		$this->views->getView($this,"informacion");
	}
}
