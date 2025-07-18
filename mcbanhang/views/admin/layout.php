<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/form.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/table.css">

</head>

<body>
    <div class="sidebar">
        <h2>Quản Lý</h2>
        <nav>
            <ul>
                <li>
                    <a href="./admin.php?controller=category&action=index">Loại sản phẩm</a>
                    <a href="./admin.php?controller=product&action=index">Sản phẩm</a>
                    <a href="./admin.php?controller=user&action=index">Người dùng</a>
                    <a href="./admin.php?controller=admin&action=logout">Đăng xuất</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="main">
        <?php echo $content ?? '' ?>
    </div>
</body>

</html>