<?php

namespace KochRezept;

use PDO;

class DbConnection
{
    private $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function getPdo() : PDO
    {
        return new PDO(
            $this->config->getMySqlDsn(),
            $this->config->getMySqlUser(),
            $this->config->getMySqlPassword()
        );
    }
}