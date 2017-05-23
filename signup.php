<?php
require 'classes/Database.php';
require 'classes/User.php';
session_start();
$user = new User();

if ($user->register(["first"    => $_POST['first'],
                     "last"     => $_POST['last'],
                     "username" => $_POST['username'],
                     "email"    => $_POST['email'],
                     "pass"     => $_POST['password']]) == true) {
	$_SESSION['msg'] = 'Successfully Registered!';

} else {
	$_SESSION['msg'] = 'U must provide all information fields!';
}

header('Location: index.php?page=1');