<?php
session_start();
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    if ($username === 'admin' && $password === '123') {
        $_SESSION['username'] = $username;
        header("Location: welcom.php");
        exit();
    } else {
        $error = "Tên đăng nhập hoặc mật khẩu không đúng!";
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Đăng Nhập</title>
</head>
<body>
  <h2> Đăng Nhập</h2>
  <form action="" method="post">
    <label for="">Tên đăng nhập:</label><br>
    <input type="text" name="username" required><br><br>

    <label for="">Mật khẩu:</label><br>
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Đăng nhập">
  </form>
  <?php if ($error) echo "<p style='color:red;'>$error</p>"; ?>
</body>
</html>