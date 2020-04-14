<?php 
//index.php ist der sogenannte Frontcontroller(Türsteher), der die Anfragen lenkt(routet)

//URI von der globalen Variable $_Server ausgelesen 
$uri = $_SERVER['REQUEST_URI'];

//Ist jeweils anzupassen
define('DIRECTORY', '/Grundlagen_Programmieren_PHP/02_Referenzen_OOP/BasicMVCmitP');
 
switch ($uri) 
{
	case DIRECTORY.'/index.php':
		require_once 'Controllers/MainController.php';
		$maincontroller=new MainController();
		$maincontroller->getAll();
		break;
	
	case isset($_GET['id']) && DIRECTORY.'/index.php/?id='.$_GET['id'] :
		require_once 'Controllers/MainController.php';
		$maincontroller=new MainController();
		$maincontroller->getRecipe($_GET['id']);
		break;

	case DIRECTORY.'/index.php/createRecipe':
		require_once 'Controllers/MainController.php';
		$maincontroller=new MainController();
		$maincontroller->createRecipe();
		break;

	case DIRECTORY.'/index.php/saveRecipe':
		require_once 'Controllers/MainController.php';
		$maincontroller=new MainController();
		$maincontroller->saveRecipe();
		break;

	default :
	    header('Status: 404 Not Found');
        echo '<html><body><h1>Page Not Found</h1></body></html>';
		break;
}

	