<?php
include_once 'database.php';
include_once 'Session.php';
class User{
    private $db;
    public function __construct() {
        $this->db = new Database();
    }
}