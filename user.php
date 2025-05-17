<?php
include('connection.php');
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php"); // redirect kalau belum login
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="user-page">
        <h2>Welcome to user page!</h2>
        <p>User : <span><?php echo  $_SESSION['user']; ?></span></p>
        <a href= "logout.php"><button class="btn font-weight-bold">logout</button></a>
    </div>
</body>
</html>
