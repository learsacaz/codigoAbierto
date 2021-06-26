<?php 

/**
* 
*/
class Views
{
	
	public function getView($controller,$view){
		$controller = get_class($controller);
		if ($controller == "Home") {
			$view = "view/paginas/".$view.".php";
		}else{
			$view = "view/paginas/".$view.".php";
		}
		require_once($view);
	}
}

 ?>