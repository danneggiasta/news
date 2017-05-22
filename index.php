<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


session_set_cookie_params(0);
session_start();


session_write_close();
?>

    <?php include 'partials/header.php'; ?>

    <?php include 'partials/main_section.php'; ?>

    <?php include 'partials/footer.php'; ?>

</div>
<!-- End Site Wrapper -->


</body>
</html>