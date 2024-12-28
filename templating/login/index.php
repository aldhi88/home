<?php
// login/index.php?page=login
if (!isset($_REQUEST['page'])) {
    header('location:?page=login');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Abstack - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/dashboard/assets/images/favicon.ico">

    <!-- App css -->
    <link href="../assets/dashboard/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/dashboard/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/dashboard/assets/css/app.min.css" rel="stylesheet" type="text/css" />
</head>
<body class="authentication-bg bg-gradient">
    <div class="account-pages mt-5 pt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-pattern">

                        <div class="card-body p-4">
                            
                            <?php include($_REQUEST['page'] . '.php'); ?>
                            
                        </div> <!-- end card-body -->
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->
    <script src="../assets/dashboard/assets/js/vendor.min.js"></script>
    <script src="../assets/dashboard/assets/js/app.min.js"></script>
</body>
</html>