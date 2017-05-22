<nav>

    <ul>

        <?php
        $db = new Database();

        $out = [];

        $out = $db->read('id', 'pages', "id = :id", array(
            ':id' => $_GET['page']
        ));
        ?>

        <li<?php if (isset($out[0]['id']) && $out[0]['id'] == 1) {
            echo ' class="current"';
        } ?>><a href="?page=1">Home</a></li>

        <li<?php if (isset($out[0]['id']) && $out[0]['id'] == 2) {
            echo ' class="current"';
        } ?>><a href="?page=2">Tech</a></li>

        <li<?php if (isset($out[0]['id']) && $out[0]['id'] == 3) {
            echo ' class="current"';
        } ?>><a href="?page=3">Sport</a></li>

        <li<?php if (isset($out[0]['id']) && $out[0]['id'] == 4) {
            echo ' class="current"';
        } ?>><a href="?page=4">Weather</a></li>

        <li<?php if (isset($out[0]['id']) && $out[0]['id'] == 5) {
            echo ' class="current"';
        } ?>><a href="?page=5">About</a></li>

    </ul>

</nav>