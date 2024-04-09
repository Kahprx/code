<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chính</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Chào mừng đến trang chính của hệ thống!</h1>
        <p>Đây là trang chính của hệ thống của chúng tôi.</p>
        <a href="profile.php">Xem hồ sơ cá nhân</a>
        <a href="logout.php">Đăng xuất</a>
    </div>
</body>
</html>
