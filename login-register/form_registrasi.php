<?php 
    session_start();

    if(isset($_SESSION['login'])){
        header('location:home.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">

    <div class="container-fluid">
        <div class="row align-items-center justify-content-md-center" style="min-height: 100vh;">

            

            <div class="col-3">
                <div class="text-center mb-3">
                    <img src="https://sttdumai.ac.id/assets/image/material/icon/logo.png" width="100" class="img-thumbnail" alt="...">
                    <h3>Sekolah Tinggi Teknologi Dumai</h3>
                </div>

                

                <form action="proses/register.php" method="POST">

                    <div class="bg-white p-5 shadow-sm p-3 mb-5 rounded">

                        <?php 
                            if(isset($_SESSION['err_global'])){
                        ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= $_SESSION['err_global'] ?>
                                </div>
                        <?php
                            }
                        ?>

                        <?php 
                            if(isset($_SESSION['ok_global'])){
                        ?>
                                <div class="alert alert-success" role="alert">
                                    <?= $_SESSION['ok_global'] ?>
                                </div>
                        <?php
                            }
                        ?>

                        <h4 class="text-center">Form Registrasi</h4>
                        <div class="mb-3">
                            <label for="">Your Username</label>
                            <input type="text" value="<?= isset($_SESSION['ex_user'])?$_SESSION['ex_user']:null ?>" name="username" class="form-control form-control-lg <?= isset($_SESSION['err_user'])?'is-invalid':null ?>">
                            <?php 
                                if(isset($_SESSION['err_user'])){
                            ?>
                                <div class="invalid-feedback">
                                    <?= $_SESSION['err_user'] ?>
                                </div>
                            <?php
                                }
                            ?>
                            
                        </div>

                        
                        <div class="mb-3">
                            <label for="">Your Login Password</label>
                            <input type="password" name="password" class="form-control form-control-lg <?= isset($_SESSION['err_pass'])?'is-invalid':null ?>">
                            <?php 
                                if(isset($_SESSION['err_pass'])){
                            ?>
                                <div class="invalid-feedback">
                                    <?= $_SESSION['err_pass'] ?>
                                </div>
                            <?php
                                }
                            ?>

                            <input type="password" placeholder="Password confirmation" name="password_confirm" class="mt-2 form-control form-control-lg <?= isset($_SESSION['err_pass_confirm'])?'is-invalid':null ?>">
                            <?php 
                                if(isset($_SESSION['err_pass_confirm'])){
                            ?>
                                <div class="invalid-feedback">
                                    <?= $_SESSION['err_pass_confirm'] ?>
                                </div>
                            <?php
                                }
                            ?>
                            
                        </div>

                        <div class="text-end">
                            <a href="form_login.php">Back to Login</a>
                        </div>

                        <div style="margin-top: 20px;" class="d-grid">
                            <button type="submit" value="ini button" name="btn-register" class="btn btn-primary btn-lg w-100">Register</button>
                        </div>
                    </div>

                </form>

            </div>


        </div>
    </div>


    
    

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</body>
</html>

<?php 
session_destroy();
?>