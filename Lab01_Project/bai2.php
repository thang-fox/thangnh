<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="baitap.css">
</head>
<body>
        <form action="" method="post">
            họ tên: <input type="text" name="hoten"><br>
            password: <input type="password" name="password"><br>
            đang ký học: <input type="checkbox" name="html" value="css">HTML</input>
                          <input type="checkbox" name="css" value="css">CSS</input><br>
            giới tính:
            <input type="radio" name="rad" value="nam">Nam
            <input type="radio" name="rad" value="nu">Nữ<br>               
            thành phố:             
            <select name="city">
                    <option value="hn"> hà nội</option>
                    <option value="hp"> hải phòng</option>
                    <option value="bn"> bắc ninh</option>
                    <option value="dn"> đà nẵng</option>
                    <option value="sg"> sài gòn</option>
            </select><br>
            tin nhắn:<br> <textarea name="message" rows="5" cols="30"></textarea><br>
            <input type="submit" name="submit" value="Gửi">
        </form>
    <?php
    if (isset($_POST['submit'])) {
        $hoten = $_POST['hoten'];
        $password = $_POST['password'];
        $html = isset($_POST['html']) ? $_POST['html'] : '';
        $css = isset($_POST['css']) ? $_POST['css'] : '';
        $rad = isset($_POST['rad']) ? $_POST['rad'] : '';
        $city = $_POST['city'];
        $message = $_POST['message'];

        echo "Họ tên: " . htmlspecialchars($hoten) . "<br>";
        echo "Password: " . htmlspecialchars($password) . "<br>";
        echo "Đăng ký học: " . htmlspecialchars($html) . " " . htmlspecialchars($css) . "<br>";
        echo "Giới tính: " . htmlspecialchars($rad) . "<br>";
        echo "Thành phố: " . htmlspecialchars($city) . "<br>";
        echo "Tin nhắn: " . nl2br(htmlspecialchars($message)) . "<br>";
    }
    ?>
</body>
</html>