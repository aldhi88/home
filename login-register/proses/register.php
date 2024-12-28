<?php 

if(!isset($_POST['btn-register'])){
    header('location:../form_registrasi.php');
    exit();
}

$user_form = $_POST['username'];
$pass_form = $_POST['password'];
$pass_confirm_form = $_POST['password_confirm'];

session_start();

$_SESSION['ex_user'] = $user_form;

if($user_form==''){
    $_SESSION['err_user'] = "Username tidak boleh kosong.";
}
if($pass_form==''){
    $_SESSION['err_pass'] = "Password tidak boleh kosong.";
}
if($pass_confirm_form==''){
    $_SESSION['err_pass_confirm'] = "Confirmation Password tidak boleh kosong.";
}

if(
    isset($_SESSION['err_user']) || 
    isset($_SESSION['err_pass']) ||
    isset($_SESSION['err_pass_confirm'])
){
    header('location:../form_registrasi.php');
    exit();
}

if($pass_form != $pass_confirm_form){
    $_SESSION['err_pass_confirm'] = 'Password yang diketik tidak sama.';
    header('location:../form_registrasi.php');
    exit();
}

$conn = mysqli_connect('localhost', 'root', '', 'perpustakaan');
$query = "SELECT * FROM pengguna WHERE username='$user_form'";
$q = mysqli_query($conn, $query);

if(mysqli_num_rows($q) > 0){ //username sudah ada
    $_SESSION['err_global'] = "Data user sudah terdaftar, silahkan ganti nama username anda.";
    header('location:../form_registrasi.php');
    exit();
}

// simpan ke DB
$query = "INSERT INTO pengguna (id, username, password) VALUES(null,'$user_form','$pass_form')";
mysqli_query($conn, $query);
unset($_SESSION['ex_user']);
$_SESSION['ok_global'] = "Registrasi anda berhasil, silahkan login.";
// redirect ke form login
// header('location:../form_registrasi.php');
header('location:../form_login.php');
