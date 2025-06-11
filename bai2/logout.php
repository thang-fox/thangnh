<?php
session_start();

// Hủy session
session_unset();
session_destroy();

// Hủy cookie
setcookie('username', '', time() - 3600, "/");

// Quay lại trang đăng nhập
header("Location: login.php");
exit();
