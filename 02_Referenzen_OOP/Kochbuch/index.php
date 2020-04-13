<?php 

$uri = $_SERVER['REQUEST_URI'];
define('DIRECTORY', '/Webgrundlagenskript/06_OOP/Kochbuch');
 
switch ($uri) 
{
	case DIRECTORY.'/index.php':
		require_once 'Controllers/MainController.php';
		$maincontroller=new MainController();
		$maincontroller->getAll();
		break;
	
	case DIRECTORY.'/index.php/?id='.$_GET['id']:
		require_once 'Controllers/MainController.php';
		$maincontroller=new MainController();
		$maincontroller->getRecipe($_GET['id']);
		break;

	default :
	    header('Status: 404 Not Found');
        echo '<html><body><h1>Page Not Found</h1></body></html>';
		break;
}

	