<?php
include('dbh.inc.php');

$page_title = 'Home Page';
$site_title = 'DanneggiastaCraft';


class Pages extends Dbh
{

    public function connectPage($pageid)
    {

        $dbc = parent::connect();


        if (isset($_GET['page'])) {

            $pageid = $_GET['page'];

        } else {

            $pageid = 1;
        }


        $page = $dbc->prepare("SELECT * FROM pages WHERE id = ?");
        $page->bind_param('i', $pageid);
        $page->execute();

        $result = $page->get_result();

        while($row = $result->fetch_array()) {

            $output['label'] = $row['label'];
            $output['title'] = $row['title'];
            $output['header'] = $row['header'];
            $output['body'] = $row['body'];

            var_dump($output);

        }


    }

}

$page = new Pages();
$page->connectPage($_GET['page']);
