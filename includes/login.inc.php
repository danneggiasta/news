<?php
require_once('dbh.inc.php');


class Check extends Dbh
{


    public function checkLogin($email, $pass)
    {

        $conn = parent::connect();


        $r = $conn->prepare("SELECT * FROM users WHERE email=? AND pass=?");
        $r->bind_param('ss', $email, SHA1($pass));
        $r->execute();
        $r->bind_result($email, $pass);
        $r->store_result();

        $count = $r->num_rows;

        if ($count == 1) {


            session_start();

            $_SESSION['loggedin'] = true;
            $_SESSION['email'] = $email;

            session_write_close();

        } else {

            session_start();

            $_SESSION['loggedin'] = false;
            $_SESSION['incorrect'] = "Wrong email or password!";

            header('Location: ../index.php');

            session_write_close();

        }
    }
}

$q = new Check();

$q->checkLogin($_POST['email'], $_POST['password']);

if (isset($_SESSION['loggedin'])) {

    header('Location: ../index.php');
    exit;
}

?>
