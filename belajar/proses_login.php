<?php 

session_start();

if ($_POST['username']=='') {
    $_SESSION['username_error'] = "Username tidak boleh kosong";
}

if ($_POST['password']=='') {
    $_SESSION['password_error'] = "Password tidak boleh kosong";
}

if ($_POST['username']=='' || $_POST['password']=='') {
    header('location:form.php');
    exit();
}

if($_POST['username']!='admin' || $_POST['password']!='admin'){
    $_SESSION['global_error'] = "Data login tidak valid.";
    header('location:form.php');
    exit();
}

$_SESSION['is_login'] = true;
header('location:home.php');

