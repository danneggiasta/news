<?php
include 'config/database.php';

Class Database
{
    private $server = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . "";
    private $user = DB_USER;
    private $pass = DB_PASS;

    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);

    private $db;

    private static $instance = null;

    private function __construct()
    {
        try {
            $this->db = new PDO($this->server, $this->user, $this->pass, $this->options);

            return $this->db;

        } catch (PDOException $e) {

            return "There is some problem in connection: " . $e->getMessage();
        }
    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {

            self::$instance = new Database();
        }

        return self::$instance;
    }

    public function closeConnection()
    {
        $this->db = null;
    }

//    public function query($sql){
//
//        return $this->db->query();
//    }
}

?>