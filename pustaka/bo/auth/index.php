<?php 
if(!isset($_REQUEST['page'])){
    header('location:?page=login');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include('head.php') ?>
    </head>

    <body class="fixed-left">

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center mt-0 m-b-15">
                        <a href="index.html" class="logo logo-admin"><img src="../../assets/bo/images/logo.png" height="24" alt="logo"></a>
                    </h3>

                    <div class="p-3">
                        <?php
                            $page = $_REQUEST['page'];
                            include($page.'.php');
                        ?>
                    </div>

                </div>
            </div>
        </div>

        <?php include('script.php') ?>
    </body>
</html>