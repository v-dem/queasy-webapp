<?php

namespace queasy\webapp;

use queasy\db\Db;
use queasy\framework\App as BaseApp;

class App extends BaseApp
{
    private $db;
    
    public function db()
    {
        $config = $this->config();
        if (null === $this->db) {
            $this->db = new Db($config['db']);
        }

        return $this->db;
    }
}

