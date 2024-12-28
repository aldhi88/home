<?php 
session_start();
if(isset($_SESSION['login'])){
    header('location:home.php');
    exit();
}

header('location:form_login.php');

