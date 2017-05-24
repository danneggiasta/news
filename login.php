<?php
require_once "core/init.php";

$user = new User();

$user->login($_POST['username'], $_POST['password']);
if (!isset($_SESSION['id'])) {

	$_SESSION['login'] = 'Wrong username or password!';
} else {
	$_SESSION['login'] = 'Welcome';
}
header('Location: index.php?page=1');

