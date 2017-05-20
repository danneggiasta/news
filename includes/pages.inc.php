<?php
include('dbh.inc.php');

$page_title = 'Home Page';
$site_title = 'DanneggiastaCraft';


class Pages extends Dbh
{

    public function connectPage($pageid)
    {

        $dbc = parent::connect();

        $r = $dbc->prepare("SELECT * FROM pages WHERE id = $?");
        $r->bind_param('s', $pageid);
        $r->execute();
        $r->bind_result($pageid);
        $r->store_result();

        $page = $r->fetch();

        $count = $r->num_rows;

        if ($count == 1) {

            session_start();
            if (isset($_GET['page'])) {

                $pageid = $_GET['page'];

            } else {

                $pageid = 1;
            }

        } else {

            header('Location: ../index.php');

            session_write_close();

        }

    }

}

$page = new Pages();
$page->connectPage($_GET['page']);
