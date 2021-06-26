<?php 
/**
* 
*/
class design1 extends Controllers
{
	
	public function __construct(){
		parent::__construct();
	}

	public function design1($params){
		$this->views->getView($this,"design1");
	}
}
