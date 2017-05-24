<?php
session_start();

require_once "config/sandbox.php";

$page = get_path();

spl_autoload_register(function($className){
	require_once "classes/".$className.".php";
});