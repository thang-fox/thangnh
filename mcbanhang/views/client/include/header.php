<div id="header">
    <div id="nav_1">
        <ul class="nav_ul">
            <li class="nav_li">
                <a href=""><i class="far fa-bell"></i> Thông báo</a>
            </li>
            <li class="nav_li">
                <a href=""><i class="far fa-question-circle"></i> Trợ giúp</a>
            </li>
            <?php session_start(); ?>
            <?php if (isset($_SESSION['client']) && $_SESSION['client']): ?>
                <li class="nav_li"><a href="./client.php?controller=client&action=logout" class="border_r">Đăng xuất</a></li>
                <li class="nav_li"><?= $_SESSION['client']['username'] ?></li>
            <?php else: ?>
                <li class="nav_li"><a href="" class="border_r">Đăng ký</a></li>
                <li class="nav_li"><a href="./auth.php">Đăng nhập</a></li>
            <?php endif ?>

        </ul>
    </div>
    <div id="search">
        <div class="logo">
            <img src="./images/logo.png" alt="" />
        </div>
        <form action="./client.php" method="GET" class="form_search">
            <input type="hidden" name="controller" value="client">
            <input type="hidden" name="action" value="search">

            <input type="text" class="txt_search" placeholder="Tìm kiếm" name="search" value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>" />
            <button class="btn_search" type="submit">Tìm kiếm</button>
        </form>

    </div>
    <div id="menu">
        <ul class="menu_ul">
            <li class="menu_li"><a href="#">Trang chủ </a></li>
            <?php foreach ($category as $cat) : ?>
                <li class="menu_li">
                    <a href="./client.php?controller=client&action=findCategory&category_id=<?= $cat['id'] ?>">
                        <?= $cat['name'] ?>
                    </a>
                </li>
            <?php endforeach; ?>

            <li class="menu_li"><a href="#">Tuyển dụng</a></li>
            <li class="menu_li"><a href="#">Liên hệ</a></li>
        </ul>
    </div>
    <!--Phần banner-->
    <div id="banner">
        <img src="./images/banner.jpg" alt="" />
    </div>
</div>