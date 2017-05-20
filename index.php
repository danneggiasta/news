<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//include "functions/check.php";
include('includes/pages.inc.php');

session_set_cookie_params(0);
session_start();


/*
var_dump($_SESSION['loggedin']);
var_dump($_SESSION['email']);
var_dump($_SESSION['password']);
*/
session_write_close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php if(isset($page->output['header'])){ echo $page->output['header'].' | '.$site_title; } ?></title>
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

            <p>World News</p>

        </div>
        <nav>

            <ul>

                <li<?php if(isset($page->pageid) && $page->pageid == 1) { echo ' class="current"'; } ?>><a href="?page=1">Home</a></li>
                <li<?php if(isset($page->pageid) && $page->pageid == 2) { echo ' class="current"'; } ?>><a href="?page=2">Tech</a></li>
                <li<?php if(isset($page->pageid) && $page->pageid == 3) { echo ' class="current"'; } ?>><a href="?page=3">Sport</a></li>
                <li<?php if(isset($page->pageid) && $page->pageid == 4) { echo ' class="current"'; } ?>><a href="?page=4">Weather</a></li>
                <li<?php if(isset($page->pageid) && $page->pageid == 5) { echo ' class="current"'; } ?>><a href="?page=5">About</a></li>

            </ul>

        </nav>
    </header>

    <!-- Body Wrapper -->
    <div class="body-wrapper" id="main-section">

        <section id="news">

            <div class="fourth">

                <img src="assets/img/news.jpg">

                <h3>Phasellus lorem erat, fringilla vestibulum est sit amet, lobortis tincidunt leo. Nam non
                    posuere lorem.</h3>

                <p>Nulla vitae ultricies metus, sed consequat elit. Suspendisse nisl velit, cursus sed mattis a, varius
                    sit amet nibh. Cras imperdiet nulla vitae euismod blandit. Sed pulvinar nibh ut dolor semper
                    accumsan. Phasellus lorem erat, fringilla vestibulum est sit amet, lobortis tincidunt leo. Nam non
                    posuere lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                    egestas. Nunc scelerisque, odio eu efficitur commodo, tortor tellus accumsan magna, ut eleifend sem
                    velit vitae sapien. Donec nec ornare mi, sit amet mollis neque. Donec mattis sapien elit, at
                    hendrerit diam suscipit in. In molestie ut diam vitae luctus. Duis neque lorem, ultricies eu elit
                    vitae, malesuada varius arcu. Suspendisse lobortis blandit orci sit amet mattis.</p>

            </div>

            <div class="fourth">

                <img src="assets/img/news1.jpg">

                <h3>Nulla vitae ultricies metus, sed consequat elit. Suspendisse nisl velit, cursus sed mattis a, varius
                    sit amet nibh. Cras imperdiet nulla vitat</h3>

                <p>Nulla vitae ultricies metus, sed consequat elit. Suspendisse nisl velit, cursus sed mattis a, varius
                    sit amet nibh. Cras imperdiet nulla vitae euismod blandit. Sed pulvinar nibh ut dolor semper
                    accumsan. Phasellus lorem erat, fringilla vestibulum est sit amet, lobortis tincidunt leo. Nam non
                    posuere lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                    egestas. Nunc scelerisque, odio eu efficitur commodo, tortor tellus accumsan magna, ut eleifend sem
                    velit vitae sapien. Donec nec ornare mi, sit amet mollis neque. Donec mattis sapien elit, at
                    hendrerit diam suscipit in. In molestie ut diam vitae luctus. Duis neque lorem, ultricies eu elit
                    vitae, malesuada varius arcu. Suspendisse lobortis blandit orci sit amet mattis.</p>

            </div>

            <div class="fourth">

                <img src="assets/img/news2.jpg">

                <h3>Comtrade prvi na svetu lansirao bankarsku aplikaciju za VIBER!.</h3>

                <p>Nulla vitae ultricies metus, sed consequat elit. Suspendisse nisl velit, cursus sed mattis a, varius
                    sit amet nibh. Cras imperdiet nulla vitae euismod blandit. Sed pulvinar nibh ut dolor semper
                    accumsan. Phasellus lorem erat, fringilla vestibulum est sit amet, lobortis tincidunt leo. Nam non
                    posuere lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                    egestas. Nunc scelerisque, odio eu efficitur commodo, tortor tellus accumsan magna, ut eleifend sem
                    velit vitae sapien. Donec nec ornare mi, sit amet mollis neque. Donec mattis sapien elit, at
                    hendrerit diam suscipit in. In molestie ut diam vitae luctus. Duis neque lorem, ultricies eu elit
                    vitae, malesuada varius arcu. Suspendisse lobortis blandit orci sit amet mattis.</p>

            </div>

            <div class="fourth">

                <img src="assets/img/news3.jpg">

                <h3>Comtrade prvi na svetu lansirao bankarsku aplikaciju za VIBER!.</h3>

                <p>Nulla vitae ultricies metus, sed consequat elit. Suspendisse nisl velit, cursus sed mattis a, varius
                    sit amet nibh. Cras imperdiet nulla vitae euismod blandit. Sed pulvinar nibh ut dolor semper
                    accumsan. Phasellus lorem erat, fringilla vestibulum est sit amet, lobortis tincidunt leo. Nam non
                    posuere lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                    egestas. Nunc scelerisque, odio eu efficitur commodo, tortor tellus accumsan magna, ut eleifend sem
                    velit vitae sapien. Donec nec ornare mi, sit amet mollis neque. Donec mattis sapien elit, at
                    hendrerit diam suscipit in. In molestie ut diam vitae luctus. Duis neque lorem, ultricies eu elit
                    vitae, malesuada varius arcu. Suspendisse lobortis blandit orci sit amet mattis.</p>

            </div>


        </section>

        <?php

        if (isset($_SESSION['email'])) {

            ?>
            <aside id="aside-logout">

                <h2><?php echo 'Welcome, ' ?><br><?php echo $_SESSION['email']; ?></h2>

                <a href="includes/logout.inc.php"><input id="logout" type="submit" value="Log Out"></a>

            </aside>


            <?php

        } else { ?>

            <aside>

                <div class="form-wrapper">

                    <form action="includes/login.inc.php" id="login" method="post">

                        <h2>Login</h2>
                        <input type="text" name="email" placeholder="Email"
                               pattern="^\w+([.-]?\w+)*@\w+([.-]?\w+)*(.\w{2,3})+$" required><br>
                        <input type="password" name="password" placeholder="Password" required><br>

                        <input type="submit" value="Log In">

                        <?php if (isset($_SESSION['loggedin'])) {

                            ?><p><?php echo $_SESSION['incorrect']; ?></p>

                        <?php } ?>


                    </form>

                    <form action="includes/register.inc.php" id="register" method="post">

                        <h2>Register New Account</h2>
                        <input type="text" name="first" placeholder="First Name" required><br>
                        <input type="text" name="last" placeholder="Last Name" required><br>
                        <input type="email" name="email" placeholder="Email"
                               pattern="^\w+([.-]?\w+)*@\w+([.-]?\w+)*(.\w{2,3})+$" required><br>
                        <input type="password" name="password" placeholder="Password" required><br>

                        <input type="submit" value="Register">

                        <?php if (!empty($_SESSION['flash_message']) && !empty($_SESSION['green'])) { ?>

                            <h4><?php echo $_SESSION['flash_message'];

                                unset($_SESSION['flash_message']); ?></h4>

                        <?php } elseif (!empty($_SESSION['flash_message']) && empty($_SESSION['green'])) { ?>

                            <p><?php echo $_SESSION['flash_message'];

                                unset($_SESSION['flash_message']); ?></p>

                        <?php } ?>

                        <!--                        --><?php //$f = new Functions(); ?><!--<p>-->
                        <?php //$f->checkErrorMessage($_SESSION['flash_message'], $_SESSION['green']);?><!--</p>    Don't work cause checking not defined values  -->

                    </form>

                </div>

            </aside>

        <?php } ?>

    </div>
    <!-- End Body Wrapper -->

    <footer>

        <p>Copyright &copy; DanneggiastaCraft 2017.</p>

    </footer>

</div>
<!-- End Site Wrapper -->


</body>
</html>