<?php 


if(isset($_POST['btn-login'])){

    session_start();

    $user_form = $_POST['username'];
    $pass_form = $_POST['password'];

    if($user_form==""){
        $_SESSION['err_user'] = "Username tidak boleh kosong.";
    }
    if($pass_form==""){
        $_SESSION['err_pass'] = "Password tidak boleh kosong.";
    }

    if(isset($_SESSION['err_user']) || isset($_SESSION['err_pass'])){
        header('location:../form_login.php');
    }else{
        //login
        $conn = mysqli_connect('localhost', 'root', '', 'belajar_sql');
        $sql = "SELECT * FROM user WHERE username='$user_form' AND password='$pass_form'";
        $q = mysqli_query($conn, $sql);
        $jlhRow = mysqli_num_rows($q);


        if($jlhRow == 1){
            //login
            $_SESSION['login'] = true;
            header('location:../home.php');
        }else{
            $_SESSION['err_global'] = "Data login tidak valid.";
            header('location:../form_login.php');
        }

        // if($user_form == 'admin' && $pass_form == 123){
        //     //login benar
        //     header('location:../home.php');
        // }else{
        //     $_SESSION['err_global'] = "Data login tidak valid.";
        //     header('location:../form_login.php');
        // }
    }

}else{

    header('location:../index.php');
}