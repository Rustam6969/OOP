<?php

namespace Car;

class DB
{
    protected $db = null;
//    protected static $instance = null;
//    protected $host = "localhost";
//    protected $db_name = "car";
//    protected $db_user = "root";
//    protected $db_pass = "";

    public function __construct()
    {
        $config = [
            'host'        => 'localhost',
            'driver'    => 'mysql',
            'database'    => 'car',
            'username'    => 'root',
            'password'    => 'Mamapapa1809',
            'charset'    => 'utf8',
            'collation'    => 'utf8_general_ci',
            'prefix'     => ''
        ];
        $this->db = new \Buki\Pdox($config);
    }
}
