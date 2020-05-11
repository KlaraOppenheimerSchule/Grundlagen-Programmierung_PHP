<?php 
//index.php ist der sogenannte Frontcontroller(Türsteher), der die Anfragen lenkt(routet)

//URI von der globalen Variable $_Server ausgelesen 
$uri = $_SERVER['REQUEST_URI'];

//Ist jeweils anzupassen
define('DIRECTORY', '/Webgrundlagenskript/06_OOP/Adressbook');
 
switch ($uri) 
{
	case DIRECTORY.'/index.php':
		require_once 'Controllers/MainController.php';
		$maincontroller=new MainController();
		$maincontroller->showAdressbooks();
		break;
	
	case isset($_GET['adressbook']) && DIRECTORY.'/index.php/?adressbook='.$_GET['adressbook'] :
		require_once 'Controllers/MainController.php';
		$maincontroller=new MainController();
		$maincontroller->showAll($_GET['adressbook']);
		break;
	
	default :
	    header('Status: 404 Not Found');
        echo '<html><body><h1>Page Not Found</h1></body></html>';
		break;
}

	