<?php
require('inc/essentials.php');
require('inc/db_config.php');

session_start();
// Kiểm tra xem admin đã đăng nhập chưa
if (!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] === true)) {
    redirect("index.php");
}

// Lấy thông tin admin từ database
$admin_sql = "SELECT `admin_name`, `c_vu` FROM `admin_cred` WHERE `sr_no`=?";
$admin_values = [$_SESSION['adminId']];
$admin_res = select($admin_sql, $admin_values, "i");
$admin_row = mysqli_fetch_assoc($admin_res);
$ad_name = $admin_row['admin_name'];
$c_vu = $admin_row['c_vu'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <?php require('inc/links.php'); ?>
    <style>
        #dashboard-menu {
            background-color: #343a40;
            border-top: 3px solid #dee2e6;
        }

        #dashboard-menu a {
            color: #fff;
            text-decoration: none;
        }

        #dashboard-menu a:hover {
            color: #007bff;
        }
    </style>
</head>
<body class="bg-light">

<?php require('inc/header.php'); ?>

<div class="container-fluid" style="margin-top: 70px;">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
            <h3 class="mb-4">TRANG QUẢN LÝ</h3>
            <!-- Nội dung trang quản lý sẽ được thêm vào đây -->
        </div>
    </div>
</div>

<?php require('inc/scripts.php'); ?>
</body>
</html>