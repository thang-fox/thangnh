<?php
$name = $email = $password = $confirm_password = "";
$name_err = $email_err = $password_err = $confirm_password_err = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    $name = trim($_POST["name"] ?? '');
    if ($name === "") {
        $name_err = "Họ tên không được để trống!";
    } elseif (mb_strlen($name) < 3) {
        $name_err = "Họ tên phải có ít nhất 3 ký tự!";
    }

    // Validate email
    $email = trim($_POST["email"] ?? '');
    if ($email === "") {
        $email_err = "Email không được để trống!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_err = "Email không hợp lệ!";
    }

    // Validate password
    $password = $_POST["password"] ?? '';
    if ($password === "") {
        $password_err = "Mật khẩu không được để trống!";
    } elseif (strlen($password) < 6) {
        $password_err = "Mật khẩu phải có ít nhất 6 ký tự!";
    }

    // Validate confirm_password
    $confirm_password = $_POST["confirm_password"] ?? '';
    if ($confirm_password === "") {
        $confirm_password_err = "Vui lòng xác nhận mật khẩu!";
    } elseif ($confirm_password !== $password) {
        $confirm_password_err = "Mật khẩu xác nhận không khớp!";
    }

    // Nếu không có lỗi, thông báo thành công
    if (!$name_err && !$email_err && !$password_err && !$confirm_password_err) {
        $success = "Đăng ký thành công!";
        // Reset form nếu muốn
        // $name = $email = $password = $confirm_password = "";
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký người dùng</title>
</head>
<body>
    <h2>Đăng ký người dùng</h2>
    <form method="post" action="">
        <label>Họ tên:</label><br>
        <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"><br>
        <span style="color:red;"><?php echo $name_err; ?></span><br>

        <label>Email:</label><br>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>"><br>
        <span style="color:red;"><?php echo $email_err; ?></span><br>

        <label>Mật khẩu:</label><br>
        <input type="password" name="password"><br>
        <span style="color:red;"><?php echo $password_err; ?></span><br>

        <label>Xác nhận mật khẩu:</label><br>
        <input type="password" name="confirm_password"><br>
        <span style="color:red;"><?php echo $confirm_password_err; ?></span><br><br>

        <input type="submit" value="Đăng ký">
    </form>
    <?php if ($success) echo "<p style='color:green;'>$success</p>"; ?>
</body>
</html>