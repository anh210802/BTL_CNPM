<?php
$host = "localhost";
$username = "root";
$password = "";
$name = "";
$dbname = "smart_print";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM admin WHERE username_admin = '$username' AND password_admin = '$password'";
        $result = $conn->query($sql);
        $name = $result->fetch_assoc()['name_admin'];
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // Đăng nhập thành công
            $_SESSION['name_admin'] = $name;
            $_SESSION['username_admin'] = $username;
            header("location: menu_admin.php");
        } else { 
            header("location: login_admin_error.php");
        }
    }
    $conn->close();
}
?>
