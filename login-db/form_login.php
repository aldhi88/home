<?php 
    session_start();
    if(isset($_SESSION['login'])){
        header('location:home.php');
    }
    // echo '
    //     <span style="color: red;font-style:italic;">
    //         '.$_SESSION["err_global"].'
    //     </span>
    // ';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_SESSION['err_global'])){
    ?>
            <span style="color: red;font-style:italic;">
                <?= $_SESSION['err_global'] ?>
            </span>
    <?php
        }
    ?>

    
    
    <form action="process/ex_form_login.php" method="POST">
        <div>
            <label for="">Username</label><br>
            <input type="text" name="username"><br>
            <?php 
                if(isset($_SESSION['err_user'])){
            ?>
                    <span style="color: red;font-style:italic;">
                        <?= $_SESSION['err_user'] ?>
                    </span>
            <?php
                }
            ?>
        </div>
        <div>
            <label for="">Password</label><br>
            <input type="password" name="password"><br>
            <?php 
                if(isset($_SESSION['err_pass'])){
            ?>
                    <span style="color: red;font-style:italic;">
                        <?= $_SESSION['err_pass'] ?>
                    </span>
            <?php
                }
            ?>
        </div>
        <div style="margin-top: 20px;">
            <button type="submit" name="btn-login">Login</button>
        </div>
    </form>
</body>
</html>

<?php 
session_destroy();
?>