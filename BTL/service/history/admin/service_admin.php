<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['username_admin'])) {
    header("location: login_admin.php"); // Chuyển hướng về trang đăng nhập nếu chưa đăng nhập
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="service_admin.css">
    <title>In ấn</title>
</head>
<body>

    <header>
        <h1>Dịch vụ in ấn thông minh</h1>
        <nav>
            <ul>
                <li><a href="http://localhost/BTL/login/admin/menu_admin.php">Trang Chủ</a></li>
                <li><a href="http://localhost/BTL/service/admin/service_admin.php">Dịch Vụ</a></li>
                <li><a href="#">Lịch sử</a></li>
                <li><a href="#">Liên Hệ</a></li>
                <li><a href="http://localhost/BTL/login/logout.php">Đăng xuất</a></li>
            </ul>
        </nav>
    </header>

    <section id="main-content">
        <div class = "service">
            <h3>THÔNG SỐ IN</h3>
            <form id="loginForm" action="#" method="post">
                <button type="submit" name="print">Xem</button>
            </form>
            <form id="loginForm" action="#" method="post">
                <button type="submit" name="print">Chỉnh sửa</button>
            </form>
        </div>
        <div class = "service">
            <h3>LỊCH SỬ IN CỦA NGƯỜI DÙNG</h3>
            <form id="loginForm" action="#" method="post">
                <button type="submit" name="print">Xem</button>
            </form>
            <form id="loginForm" action="#" method="post">
                <button type="submit" name="print">Chỉnh sửa</button>
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; 2023 Trang Web In Ấn</p>
    </footer>

</body>
</html>

