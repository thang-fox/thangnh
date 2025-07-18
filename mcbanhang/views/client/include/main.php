<div id="main">
    <div id="main_top">
        <!-- Tin tức & sự kiện -->
        <div class="sidebar">
            <h2 class="text_title">Tin tức & Sự kiện</h2>
            <div class="new">
                <!-- Sự kiện 1 -->
                <div class="sidebar_ct">
                    <div class="images">
                        <img src="./images/Tintuc1.webp" alt="" />
                    </div>
                    <div class="list_new">
                        <a href="">7+Tác dụng của trà shan tuyết không phải ai cũng biết</a>
                    </div>
                </div>
                <!-- Sự kiện 2 -->
                <div class="sidebar_ct">
                    <div class="images">
                        <img src="./images/Tintuc2.webp" alt="" />
                    </div>
                    <div class="list_new">
                        <a href="">Cách Ướp Trà Hoa Nhài & Cách Làm Trà Hoa Nhài Khô</a>
                    </div>
                </div>
                <!-- Sự kiện 3 -->
                <div class="sidebar_ct">
                    <div class="images">
                        <img src="./images/Tintuc3.webp" alt="" />
                    </div>
                    <div class="list_new">
                        <a href="">Cách pha trà shan tuyết cổ thụ đơn giản mà chuẩn vị</a>
                    </div>
                </div>
                <!-- Sự kiện 3 -->
                <div class="sidebar_ct">
                    <div class="images">
                        <img
                            src="./images/Tintuc4.webp"
                            alt=""
                            width="200px"
                            height="130px" />
                    </div>
                    <div class="list_new">
                        <a href="">12 Tác Dụng Của Trà Sen Mà Trước Khi Mua Bạn Phải Biết</a>
                    </div>
                </div>
                <!-- Sự kiện 4 -->
                <div class="sidebar_ct">
                    <div class="images">
                        <img
                            src="./images/Tintuc5.png"
                            alt=""
                            width="200px"
                            height="130px" />
                    </div>
                    <div class="list_new">
                        <a href="">Cách ướp trà với hoa cúc</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sản phẩm nổi bật -->
        <div class="content">
            <h2 class="text_title note">Sản phẩm nổi bật</h2>
            <div class="content1">
                <?php foreach ($products as $pr): ?>
                    <div class="content12">
                        <a href=""><img
                                src="<?= $pr['image'] ?>"
                                alt=""
                                width="250px"
                                height="200px" />
                        </a>
                        <span><?= $pr['name'] ?></span>
                        <span style="color: orange"><?= number_format($pr['price']) ?><sup>đ</sup></span>
                        <button class="btn_muahang">Đặt hàng</button>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="content_new">
        <h2 class="text_title1">Bài viết nổi bật</h2>
        <div class="new_item">
            <div class="item1">
                <img src="./images/new1.webp" alt="" />
                <p class="text_new">
                    Nơi Mua Trà Thái Nguyên Tại TPHCM Chính Gốc 100%
                </p>
            </div>
            <div class="item1">
                <img src="./images/new2.webp" alt="" />
                <p class="text_new">
                    Cây chè Thái Nguyên: Lịch sử, cách trồng & tác dụng
                </p>
            </div>
            <div class="item1">
                <img src="./images/new3.webp" alt="" />
                <p class="text_new">
                    TOP Những Bài Thơ Về Chè Thái Nguyên Hay Nhất
                </p>
            </div>
        </div>
    </div>
</div>