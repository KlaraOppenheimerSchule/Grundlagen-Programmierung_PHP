<?php
    use Fahrtenbuch\BL\Fahrrad;
    use Fahrtenbuch\BL\Motorroller;
    use Fahrtenbuch\BL\Fahrt;
    use Fahrtenbuch\BL\Fahrer;
    use Fahrtenbuch\BL\Fahrtenbuch;

    function autoloader($classname) 
    {
        $lastSlash = strpos($classname, '\\')+1;
        $classname = substr($classname, $lastSlash);
        $directory = str_replace('\\', '/', $classname);
        $filename = __DIR__ .'/Fahrtenbuch/' . $directory . '.php';
        require_once($filename);
    }
      
    spl_autoload_register('autoloader');

    $conway1 = new Fahrrad(1.00);
    $conway2 = new Fahrrad(1.00);

    $honda1 = new Motorroller(2.00);
    
    $zobel = new Fahrer("Zobel");
    $steinam = new Fahrer("Steinam");
        
    $fahrt1 = new Fahrt($zobel, 10, $conway1);
    $fahrt2 = new Fahrt($zobel, 20, $conway2);
    $fahrt3 = new Fahrt($steinam, 45, $honda1);

    $fbuch = new Fahrtenbuch();
    $fbuch->setFahrten($fahrt1);
    $fbuch->setFahrten($fahrt2);
    $fbuch->setFahrten($fahrt3);

    echo($fbuch->getUmsatz());

    $testclass = new Testclass();