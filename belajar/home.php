<?php 
session_start();
if(!isset($_SESSION['is_login'])){
    header('location:form.php');
    exit();
}
?>

ini home 

<a href="logout.php">logout</a>