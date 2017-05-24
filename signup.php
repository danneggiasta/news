<?php
require_once "core/init.php";

$user = new User();

if ($user->found($_POST['username'])) {

	$_SESSION['register_exist'] = 'User all ready exists!';
	header('Location: index.php?page=1');

} else if ($user->register(["first"    => $_POST['first'],
                            "last"     => $_POST['last'],
                            "username" => $_POST['username'],
                            "email"    => $_POST['email'],
                            "pass"     => $_POST['password']]) == true
) {
	$_SESSION['register'] = 'Successfully Registered!';

} else {
	$_SESSION['register'] = 'U must provide all information fields!';
}

header('Location: index.php?page=1');


