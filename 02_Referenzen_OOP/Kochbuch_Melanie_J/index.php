<?php 

//TODO LATER: Autoloader implementieren

$uri = $_SERVER['REQUEST_URI'];
define('VERZEICHNIS','/Webgrundlagenskript/06_OOP/Kochbuch_Melanie_J');
 
switch ($uri) 
{
	case VERZEICHNIS.'/index.php':
		require_once 'Controllers/MainController.php';
		$maincontroller=new MainController();
		$maincontroller->getAll();
		break;
	
	case VERZEICHNIS.'/index.php/?id='.$_GET['id']:
		require_once 'Controllers/MainController.php';
		$maincontroller=new MainController();
		$maincontroller->getRecipe($_GET['id']);
		break;

	default :
	    header('Status: 404 Not Found');
        echo '<html><body><h1>Page Not Found</h1></body></html>';
		break;
}

	