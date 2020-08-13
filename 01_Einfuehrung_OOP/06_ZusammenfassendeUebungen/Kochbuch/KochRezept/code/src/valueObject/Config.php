<?php

namespace KochRezept;

use Exception;

class Config
{
    private $mySqlHost;
    private $mySqlUser;
    private $mySqlPassword;
    private $mySqlDatabase;

    private function __construct(array $config)
    {
        try{
            $this->ensureIsArray($config);
        } catch (Exception $exception) {
            error_log($exception->getMessage());
        }
        $this->mySqlHost = $config['mySqlHost'];
        $this->mySqlUser = $config['mySqlUser'];
        $this->mySqlPassword = $config['mySqlPassword'];
        $this->mySqlDatabase = $config['mySqlDatabase'];
    }

    public static function fromConfigPath(string $configPath) : Config
    {
        $config = parse_ini_file($configPath);
        return (new Config($config));
    }

    private function ensureIsArray($value) : void
    {
        if(!is_array($value))
        {
            throw new Exception('Wrong Config.ini');
        }
    }

    public function getMySqlDsn() : string
    {
        return 'mysql:dbname=' . $this->getMySqlDatabase() . ';host=' . $this->getMySqlHost();
    }

    public function getMySqlHost()
    {
        return $this->mySqlHost;
    }

    public function getMySqlUser()
    {
        return $this->mySqlUser;
    }

    public function getMySqlPassword()
    {
        return $this->mySqlPassword;
    }

    public function getMySqlDatabase()
    {
        return $this->mySqlDatabase;
    }
}