
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="chose_login.css">
</head>
<body>
    <div class="container">
        <div class="image-top">
            <img src="http://localhost/BTL/image/hcmut.png" alt="#">
        </div>
        <div class="top">
            <h2>Đăng nhập dành cho:</h2>
        <form id="loginForm" action="member/login_member.php" method="post">
            <button type="submit" name="dangnhap">Sinh viên/ công nhân viên nhà trường</button>
        </form>
        <form id="loginForm" action="admin/login_admin.php" method="post">
            <button type="submit" name="dangnhap">Quản trị hệ thống</button>
        </form>
        <form id="loginForm" action="sales/login_sales.php" method="post">
            <button type="submit" name="dangnhap">Nhân viên tại quầy</button>
        </form>
    </div>
</body>
</html>
