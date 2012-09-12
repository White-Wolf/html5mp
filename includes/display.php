<?php
public class Display
{
	$hasHeader = true;
	$hasFooter = true;
	private $controllers = new array();
	
	public function __constructor()
	{
		array_unshift($controllers, new overallHeaderController());
	}
	public function addController($controller, $position = -1)
	{
		if($position == -1)
		{
			$controllers[] = $controller;
		}
		else
		{
			$tempArr1 = array_slice($controllers, 0, $position);
			$tempArr2 = array_slice($controllers, $position, count($controllers));
			$tempArr1[] = $controller;
			$controllers = array_merge($tempArr1, $tempArr2);
		}
	}
	public function render()
	{
		if($hasFooter)
			$controllers[] =  new overallFooterController();
			
		foreach($controllers as $cntrl)
		{
			if($contrl->name == 'overallHeader')
				if($hasHeader)
					$contrl->render();
				else
			else
				$contrl->render();
		}
	}
}