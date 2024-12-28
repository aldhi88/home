<?php
if(!isset($_REQUEST['page'])){
    header('location:?page=home');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('components/head.php') ?>
    </head>

    <body>
        <!-- Begin page -->
        <div id="wrapper">
            <?php include('components/topbar.php') ?>
            <?php include('components/sidebar.php') ?>
            <div class="content-page">
                <div class="content">
                    <div class="container-fluid">

                        <?php include($_REQUEST['page'] . '.php'); ?>
                        
                    </div> <!-- end container-fluid -->
                </div> <!-- end content -->
                <?php include('components/footer.php') ?>
            </div>
        </div>
        <!-- END wrapper -->
        <!-- Right bar overlay-->
        <?php include('components/script.php') ?>
    </body>
</html>