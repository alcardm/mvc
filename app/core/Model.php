<?php

require '../vendor/autoload.php';

use Medoo\Medoo;

class Model {

    protected $database;

    public function __construct() {

        $this->database = new Medoo([
            'database_type' => 'mysql',
            'database_name' => 'test',
            'server' => 'localhost',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_general_ci',
            'port' => 3306,
        ]);
    }

}
