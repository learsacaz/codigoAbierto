<?php 
/**
* 
*/
class designweb extends Controllers
{
	
	public function __construct(){
		parent::__construct();
	}

	public function designweb($params){
		$this->views->getView($this,"designweb");
	}
}
