<?php
session_start();
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username === '') {
        $error = "Tên đăng nhập không được để trống!";
    } elseif (strlen($password) < 6) {
        $error = "Mật khẩu phải có ít nhất 6 ký tự!";
    } elseif ($username === 'admin' && $password === '123456') {
        $_SESSION['username'] = $username;
        header("Location: welcam.php");
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