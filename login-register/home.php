<?php 
session_start();
if(!isset($_SESSION['login'])){
    header('location:form_login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <h1>Selamat Datang di Home Page</h1>

    <a href="proses/logout.php">Logout</a>
</body>
</html>