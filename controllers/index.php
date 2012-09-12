<?php
public class indexController extends controller {\
	private $page = 'index.php';
	
	public function __constructor() {
		
	}
	
	public function render() {
		global $view;
		
		echo $view->render($page);
	}
}
?>