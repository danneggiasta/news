<?php


class Dbh {

    private $servername;
    private $username;
    private $password;
    private $dbname;

    protected function Connect() {

        $this->servername = "localhost";
        $this->username = "danneggiasta";
        $this->password = "";
        $this->dbname = "news";

        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            echo "Connected successfully";
            return $conn;
        }

    }

}
