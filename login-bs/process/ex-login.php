<?php 


if(isset($_POST['btn-login'])){

    session_start();

    $user_form = $_POST['username'];
    $pass_form = $_POST['password'];

    if($user_form==""){
        $_SESSION['msg-username'] = "Username tidak boleh kosong.";
    }
    if($pass_form==""){
        $_SESSION['msg-password'] = "Password tidak boleh kosong.";
    }

    header('location:../login.php');

}else{

    header('location:../index.php');
}