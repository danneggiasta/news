<?php

include 'config/database.php';

Class Database
{

    private $server = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . "";

    private $user = DB_USER;

    private $pass = DB_PASS;

    private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);

    protected $con;

    public function openConnection()

    {
        try {

            $this->con = new PDO($this->server, $this->user, $this->pass, $this->options);

            return $this->con;

        } catch (PDOException $e) {

            return "There is some problem in connection: " . $e->getMessage();

        }

    }

    public function closeConnection()
    {

        $this->con = null;

    }

}

?>