<?php

require_once('dbh.inc.php');

class User extends Dbh {

    private $first;
    private $last;
    private $email;
    private $pass;
    private $status;

    protected function selectUser() {

        $conn = parent::connect();

        $r = mysqli_query($conn, "SELECT id, first, last, email, pass FROM users ");

        if ($r->num_rows > 0) {

            while ($row = $r->fetch_assoc()) {

                echo "id: " . $row["id"] . " - Name: " . $row["first"] . " " . $row["last"] . " - Email: " . $row["email"] . " Password: " . $row["pass"] . " Status: " . $row["status"] . "<br>";
            }
        } else {

            echo "No results";
        }

        $conn->close();
    }

    protected function updateUser() {

        $conn = parent::connect();

        $r = mysqli_query($conn, "UPDATE users SET first='sss', last='sss', email='asdad@asdsad', pass='asdsa', status='1'  WHERE id='2'");
        return $r;


    }

    protected function insertUser() {

        $conn = parent::connect();

        $r = mysqli_query($conn, "INSERT INTO users (first, last, email, pass, status) VALUES ('first','last','asdas@asdsad','asdas','1')");
        return $r;


    }

    protected function removeUser() {

        $conn = parent::connect();

        $r = mysqli_query($conn, "DELETE FROM users WHERE id=3");
        return $r;

    }
}