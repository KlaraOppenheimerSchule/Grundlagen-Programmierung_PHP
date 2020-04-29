<?php
    

    require ('registry/registry.class.php');
    $registry = new Registry();

    $registry->setObject( 'URL', 'url' );

    $url_bits = $registry->getObject('url')->getURLBits();

    if( isset($url_bits[0]) )
    {
        switch($url_bits[0])
        {
            case "API":
                guide_db($registry, $url_bits);
                $controller = $url_bits[0];
            break;

            case "View":
                guide_db($registry, $url_bits);
                $controller = $url_bits[0];
            break;

            default:
                $controller = "Home";
            break;
        }
    } else
    {
        $controller = "Home";
    }

    
    require_once ('Schule/Uebungen/mvc/controllers/' . $controller . '/controller.php');
    $controller_class = $controller;
    $controller = new $controller_class ( $registry );

    $controller->guide();



    function guide_db($registry, $url_bits)
    {       
        if( isset($url_bits[1]) )
        {
            switch($url_bits[1])
            {
                case "kochbuch":
                    $registry->setObject('Database', 'db');
                    $registry->getObject('db')->newConnection( '', 'root', '', 'kochbuch' );
                    return;
                break;
            }
        }
    }
    
?>