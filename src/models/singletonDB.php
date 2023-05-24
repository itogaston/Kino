<?php
class SingletonDB {
    private static $instance = null;
    private $connection;
    private function __construct() {
        $this->connection = mysqli_connect("localhost", "root", "starscourge", "ingweb");
        //$this->connection = mysqli_connect("localhost", "root", "", "ingweb");
    }

    public static function getInstance(): self
    {
        if(self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->connection;
    }
}
?>