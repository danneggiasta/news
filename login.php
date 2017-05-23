<?php
require 'classes/Database.php';
require 'classes/User.php';
session_start();
$user = new User();

$user->login($_POST['username'], $_POST['password']);
if (!isset($_SESSION['id'])) {

	echo $_SESSION['login'] = 'Wrong username or password!';
}

header('Location: index.php?page=1');

