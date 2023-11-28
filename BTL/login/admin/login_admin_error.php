
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="login_admin.css">
</head>
<body>
    <div class="container">
        <form id="loginForm" action="connect_login_admin.php" method="post">
        <div class="image-top">
            <img src="http://localhost/BTL/image/hcmut.png" alt="#">
        </div>
        <div class="top">
            <h2>Đăng nhập</h2>
        </div>
            <?php     
                $txt_error = "Tài khoản hoặc mật khẩu sai. Vui lòng nhập lại!";
                echo "<font color='red'>".$txt_error."</font>";
            ?>
            <label for="username">Tên người dùng:</label>
            <input type="text" id="username" name="username" required="">
            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" required="">
            <button type="submit" name="dangnhap">Đăng nhập</button>
        </form>
    </div>
</body>
</html>
