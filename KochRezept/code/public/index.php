<?php

namespace KochRezept;

use Exception;

require_once __DIR__ . '/../../vendor/autoload.php';

try{
    $config = Config::fromConfigPath(__DIR__ . '/../src/config/config.ini');
    $factory = new Factory($config);
    $app = $factory->createApplication();
    echo $app->run();
}
catch(Exception $exception)
{
    error_log($exception->getMessage());
}