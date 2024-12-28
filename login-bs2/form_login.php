<?php 
    session_start();
    if(isset($_SESSION['login'])){
        header('location:home.php');
    }
    
    if(isset($_SESSION['err_global'])){
        $isErrGlobal = true;
    }
    if(isset($_SESSION['err_user'])){
        $isErrUser = true;
    }
    if(isset($_SESSION['err_pass'])){
        $isErrPass = true;
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

                

                <form action="process/ex_form_login.php" method="POST">

                    <div class="bg-white p-5 shadow-sm p-3 mb-5 rounded">

                        <?php 
                            if(isset($isErrGlobal)){
                        ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= $_SESSION['err_global'] ?>
                                </div>
                        <?php
                            }
                        ?>

                        <div class="mb-3">
                            <label for="">Username</label>
                            <input type="text" name="username" class="form-control form-control-lg <?= isset($isErrUser)?'is-invalid':null ?>">
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
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control form-control-lg 
                                <?php 
                                    if(isset($_SESSION['err_pass'])){
                                        echo "is-invalid";
                                    }
                                ?>
                            ">
                            <?php 
                                if(isset($_SESSION['err_pass'])){
                            ?>
                                <div class="invalid-feedback">
                                    <?= $_SESSION['err_pass'] ?>
                                </div>
                            <?php
                                }
                            ?>
                            
                        </div>

                        <div style="margin-top: 20px;">
                            <button type="submit" name="btn-login" class="btn btn-primary btn-lg">Login</button>
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