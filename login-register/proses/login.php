<?php 

if(!isset($_POST['btn-login'])){
    header('location:../form_login.php');
    exit();
}

$user_form = $_POST['username'];
$pass_form = $_POST['password'];

session_start();

$_SESSION['ex_user'] = $user_form;


if($user_form==''){
    $_SESSION['err_user'] = "Username tidak boleh kosong.";
}
if($pass_form==''){
    $_SESSION['err_pass'] = "Password tidak boleh kosong.";
}

if(isset($_SESSION['err_user']) || isset($_SESSION['err_pass'])){
    header('location:../form_login.php');
    exit();
}

$conn = mysqli_connect('localhost', 'root', '', 'perpustakaan');
$query = "SELECT * FROM pengguna WHERE username='$user_form' AND password='$pass_form'";
$q = mysqli_query($conn, $query);

if(mysqli_num_rows($q) == 0){
    $_SESSION['err_global'] = "Data login tidak ditemukan.";
    unset($_SESSION['ex_user']);
    header('location:../form_login.php');
    exit();
}

// proses login
$_SESSION['login'] = true;
header('location:../home.php');












