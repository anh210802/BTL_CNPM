<?php
session_start();
session_destroy();
header("location: http://localhost/BTL/login/chose_login.php");
?>
