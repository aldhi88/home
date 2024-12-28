<?php 
session_start();

if(isset($_SESSION['is_login'])){
    header('location:home.php');
}else{
    header('location:form.php');
}


