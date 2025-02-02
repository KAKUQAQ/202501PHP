<?php

require_once __DIR__ . '/../config/config.php';

class Database {
    private static $instance = null;
    private $conn;
    private function __construct() {
        global $db;
        $this->conn = $db;
    }
    public static function getInstance() {
        if (self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }
    public function getConnection() {
        return $this->conn;
    }
}