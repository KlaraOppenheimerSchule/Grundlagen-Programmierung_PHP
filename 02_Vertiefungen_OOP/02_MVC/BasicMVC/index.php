<?php 

//index.php ist der sogenannte Frontcontroller(Türsteher), der die Anfragen lenkt(routet)

//URI von der globalen Variable $_Server ausgelesen 
$uri = $_SERVER['REQUEST_URI'];

//Ist jeweils anzupassen
define('DIRECTORY', '/Grundlagen_Programmieren_PHP/02_Referenzen_OOP/BasicMVC');

//Debugmöglichkeit des individuellen Pfades der Datei
//var_dump($uri);
 
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

	