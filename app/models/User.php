<?php

/**
 * User Model
 * 
 * @author Alberto
 */
class User extends Model {

    public $name = '';
    private $db;

    public function __construct() {
        parent::__construct();

        $this->db = $this->instance();
    }

    public function test() {
        return $this->db->select('user', '*');
    }

}
