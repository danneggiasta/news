<?php

require_once('dbh.inc.php');

class Register extends Dbh
{

    public function registerUser($first, $last, $email, $pass)
    {

        session_start();

        if ($first == "" || $last == "" || $email == "" || $pass == "") {

            $_SESSION['green'] = '';
            $_SESSION['flash_message'] = 'You must fill out all fields!';

            header('Location: ../index.php');
            exit;


        } else if($first != "" && $last != "" && $email != "" && $pass != "") {

            $conn = parent::connect();

            $r = $conn->prepare("INSERT INTO users (first, last, email, pass) VALUES (?, ?, ?, ?)");
            $r->bind_param('ssss', $first, $last, $email, SHA1($pass));
            $r->execute();
            $r->bind_result($first, $last, $email, $pass);
            $r->store_result();

            $_POST = array();

            $_SESSION['green'] = 'yes';
            $_SESSION['flash_message'] = 'Success!';

            session_write_close();

        }
    }
}

$q = new Register();

$q->registerUser($_POST['first'], $_POST['last'], $_POST['email'], $_POST['password']);
header('Location: ../index.php');
exit;