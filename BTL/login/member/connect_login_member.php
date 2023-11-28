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
} else {
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM member WHERE username_member = '$username' AND password_member = '$password'";
        $result = $conn->query($sql);
        $name = $result->fetch_assoc()['name_member'];
        $result = $conn->query($sql);
        
        if ($result->num_rows == 1) {
            // Đăng nhập thành công
            $_SESSION['name_member'] = $name;
            $_SESSION['username_member'] = $username;
            header("location: menu_member.php");
        } else {     
            header("location: login_member_error.php");
        }
    }
    $conn->close();
}
?>
