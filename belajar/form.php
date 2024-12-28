<?php
session_start();
if(isset($_SESSION['is_login'])){
    header('location:home.php');
    exit();
}
?>

<?php
if(isset($_SESSION['global_error'])){
    echo '<span style="color: red;">'.$_SESSION['global_error'].'</span>';
}
?>
<br>
<br>
<form action="proses_login.php" method="POST">
    <input type="text" name="username">
    <br>
    <?php
    if (isset($_SESSION['username_error'])) {
    ?>
        <span style="color: red;"><?= $_SESSION['username_error'] ?></span>
    <?php
    }
    ?>

    <br>
    <input type="password" name="password">
    <br>
    <?php
    if (isset($_SESSION['password_error'])) {
    ?>
        <span style="color: red;"><?= $_SESSION['password_error'] ?></span>
    <?php
    }
    ?>
    <br>
    <button type="submit">Login</button>
</form>

<?php
session_destroy();
?>