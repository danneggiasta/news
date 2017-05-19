<?php
include('dbh.inc.php');

$page_title = 'Home Page';
$site_title = 'DanneggiastaCraft';


class Pages extends Dbh {

    public function connectPage($pageid) {

        $dbc = parent::connect();

        if(isset($_GET['page'])) {

            $pageid = $_GET['page'];

        } else {

            $pageid = 1;
        }

        $q = "SELECT * FROM pages WHERE id = $pageid";
        $r = mysqli_query($dbc, $q);

        $page = mysqli_fetch_assoc($r);

    }

}

$page = new Pages();
$page->connectPage($_GET['page']);
