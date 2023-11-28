<?php
$host = "localhost";
$username = "root";
$password = "";
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

        $sql = "SELECT * FROM sales WHERE username_sales = '$username' AND password_sales = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            // Đăng nhập thành công
            $_SESSION['username_sales'] = $username;
            header("location: menu_sales.php");
        } else {     
            header("location: login_sales_error.php");
        }
    }
    $conn->close();
}
?>
