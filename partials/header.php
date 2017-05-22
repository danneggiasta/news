<?php
require 'classes/Database.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>DanneggiastaCraft</title>
    <meta name="description" content="The Danneggisata Craft">
    <meta name="DanneggiastaCraft" content="News">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans|Baumans' rel='stylesheet' type='text/css'>


</head>
<body>

<!-- Site Wrapper -->
<div class="site-wrapper" id="page-top">
    <header class="main-header">

        <div class="header-logo">

            <h1>DanneggiastaCraft</h1>

            <p><?php

                $db = new Database();

                $out = [];

                $out = $db->read('title', 'pages', "id = :id",array(
                    ':id' => $_GET['page']
                ));

                echo $out[0]['title'];

                ?></p>

        </div>

        <?php require_once('partials/navigation.php'); // Main Navigation ?>

    </header>