
    <header>
        <div class="middle-header">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5">
                         <a href="http://localhost/cse454.com.vn/">
                            <div class="media logo-groups">
                                <img src="<?php echo get_theme_file_uri('images/logo.png'); ?>" class="mr-3"
                                    alt="Vi tính - laptop - camera Đức Thành">
                                <div class="media-body">
                                    <h5 class="mt-0">VI TÍNH - LAPTOP - CAMERA</h5>
                                    <p>ĐỨC THÀNH</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-3">
                        <form action="<?php bloginfo('url'); ?>" method="GET">
                            <div class="input-group search-groups">
                                <input type="text" class="form-control" name="s" placeholder="Nhập từ khóa">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit">Tìm</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-md-4 righ-logo-groups">
                        <div class="righ-logo">
                            <i class="fa fa-phone"></i> <a href="tel:0969609639"><b>0969.609.639</b></a> - Mr. Đức
                        </div>
                        <div>
                            <i class="fa fa-clock-o"></i> Mở cửa từ 8h - 19h các ngày trong tuần
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom-header">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-12 col-md-4">
                    <div class="title-menu-groups">
                        <i class="fas fa-align-justify mgr-5"></i> <span>DANH MỤC SẢN PHẨM</span>
                    </div>
                    <div class="menu-groups">
                                            </div> -->
                    <!-- &nbsp; -->
                    <!-- </div> -->
                    <div class="d-none d-md-block col-md-8 offset-md-4">
                        <div class="left-menu">
                            <?php wp_nav_menu(array(
                                "theme_location" => "main-menu",
                                "menu_class" => "left-menu",
                                "menu_id" => "menu-top-menu",
                                "contrainer" => ""
                            ))

                                ?>
                            <!-- <ul id="menu-top-menu" class="left-menu">
                                <li id="menu-item-12"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a
                                        href="http://www.vitinhducthanh.com/">Trang chủ</a></li>
                                <li id="menu-item-14"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14"><a
                                        href="http://10.10.114.221/ducthanhcomputer/gioi-thieu/">Giới thiệu</a></li>
                                <li id="menu-item-46"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-46"><a
                                        href="http://10.10.114.221/ducthanhcomputer/category/tin-tuc/">Tin tức</a></li>
                                <li id="menu-item-13"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13"><a
                                        href="http://10.10.114.221/ducthanhcomputer/bao-hanh/">Bảo hành</a></li>
                                <li id="menu-item-15"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15"><a
                                        href="http://10.10.114.221/ducthanhcomputer/lien-he/">Liên hệ</a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 menu-position">
                    <div class="title-menu-groups mobile-show d-block d-md-none">
                        <i class="fa fa-align-justify mgr-5"></i> <span>DANH MỤC SẢN PHẨM</span>
                    </div>
                    <div class="title-menu-groups d-none d-md-block">
                        <i class="fa fa-align-justify mgr-5"></i> <span>DANH MỤC SẢN PHẨM</span>
                    </div>
                    <div class="menu-groups">
                        <ul id="menu-main-menu" class="main-menu">
                            <li id="menu-item-31"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-31">
                                <a href="http://10.10.114.221/ducthanhcomputer/category/laptop/">Laptop</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-90"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-90">
                                        <a href="http://10.10.114.221/ducthanhcomputer/category/laptop/laptop-moi/">Laptop
                                            mới</a>
                                    </li>
                                    <li id="menu-item-89"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-89">
                                        <a href="http://10.10.114.221/ducthanhcomputer/category/laptop/laptop-cu/">Laptop
                                            cũ</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-33"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-33">
                                <a href="http://10.10.114.221/ducthanhcomputer/category/may-bo/">Máy bộ</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-92"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-92">
                                        <a href="http://10.10.114.221/ducthanhcomputer/category/may-bo/may-bo-moi/">Máy
                                            bộ mới</a>
                                    </li>
                                    <li id="menu-item-91"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-91">
                                        <a href="http://10.10.114.221/ducthanhcomputer/category/may-bo/may-bo-cu/">Mãy
                                            bộ cũ</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-32"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-32">
                                <a href="http://10.10.114.221/ducthanhcomputer/category/man-hinh/">Màn hình</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-112"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-112">
                                        <a href="http://10.10.114.221/ducthanhcomputer/category/man-hinh/man-hinh-moi/">Màn
                                            hình mới</a>
                                    </li>
                                    <li id="menu-item-111"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-111">
                                        <a href="http://10.10.114.221/ducthanhcomputer/category/man-hinh/man-hinh-cu/">Màn
                                            hình cũ</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-17"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-17">
                                <a href="http://10.10.114.221/ducthanhcomputer/category/linh-kien/">Linh kiện</a>
                                <ul class="sub-menu">
                                    <li id="menu-item-22"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-22">
                                        <a
                                            href="http://10.10.114.221/ducthanhcomputer/category/linh-kien/mainboard/">Mainboard</a>
                                    </li>
                                    <li id="menu-item-20"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-20">
                                        <a
                                            href="http://10.10.114.221/ducthanhcomputer/category/linh-kien/bo-vi-xu-ly-cpu/">Bộ
                                            vi xử lý – CPU</a>
                                    </li>
                                    <li id="menu-item-19"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-19">
                                        <a href="http://10.10.114.221/ducthanhcomputer/category/linh-kien/bo-nho-ram/">Bộ
                                            nhớ RAM</a>
                                    </li>
                                    <li id="menu-item-24"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-24">
                                        <a
                                            href="http://10.10.114.221/ducthanhcomputer/category/linh-kien/o-cung-ssd-hdd/">Ổ
                                            cứng SSD – HDD</a>
                                    </li>
                                    <li id="menu-item-21"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-21">
                                        <a
                                            href="http://10.10.114.221/ducthanhcomputer/category/linh-kien/card-do-hoa-vga/">Card
                                            Đồ họa – VGA</a>
                                    </li>
                                    <li id="menu-item-18"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-18">
                                        <a
                                            href="http://10.10.114.221/ducthanhcomputer/category/linh-kien/bo-nguon-psu/">Bộ
                                            nguồn – PSU</a>
                                    </li>
                                    <li id="menu-item-27"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-27">
                                        <a
                                            href="http://10.10.114.221/ducthanhcomputer/category/linh-kien/vo-may-tinh-case/">Vỏ
                                            máy tính – CASE</a>
                                    </li>
                                    <li id="menu-item-26"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-26">
                                        <a
                                            href="http://10.10.114.221/ducthanhcomputer/category/linh-kien/quat-tan-nhiet-fan-led/">Quạt
                                            tản nhiệt – FAN LED</a>
                                    </li>
                                    <li id="menu-item-25"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-25">
                                        <a href="http://10.10.114.221/ducthanhcomputer/category/linh-kien/phu-kien/">Phụ
                                            kiện</a>
                                    </li>
                                    <li id="menu-item-23"
                                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-23">
                                        <a href="http://10.10.114.221/ducthanhcomputer/category/linh-kien/may-in/">Máy
                                            in</a>
                                    </li>
                                </ul>
                            </li>
                            <li id="menu-item-30"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category current-post-ancestor current-menu-parent current-post-parent menu-item-30">
                                <a href="http://10.10.114.221/ducthanhcomputer/category/gears/">GEARS</a>
                            </li>
                            <li id="menu-item-28"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-28"><a
                                    href="http://10.10.114.221/ducthanhcomputer/category/ban-ghe-gaming/">Bàn ghế
                                    Gaming</a></li>
                            <li id="menu-item-29"
                                class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-29"><a
                                    href="http://10.10.114.221/ducthanhcomputer/category/camera/">Camera</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>