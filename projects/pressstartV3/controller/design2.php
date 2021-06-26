<?php 
/**
* 
*/
class design2 extends Controllers
{
	
	public function __construct(){
		parent::__construct();
	}

	public function design2($params){
		$this->views->getView($this,"design2");
	}
}
