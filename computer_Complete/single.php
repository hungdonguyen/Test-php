<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/solid.min.css"
        integrity="sha512-tk4nGrLxft4l30r9ETuejLU0a3d7LwMzj0eXjzc16JQj+5U1IeVoCuGLObRDc3+eQMUcEQY1RIDPGvuA7SNQ2w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Vi tính Đức Thành | Chuyên mua bán, sửa chữa laptop, máy bộ, gaming &#8211; nạp mực máy in &#8211; lắp đặt
        camnera &#8211; Mỹ Phước, Bến Cát, Bình Dương, Bàu Bàng</title>
    <link rel='stylesheet' id='blankslate-style-css'
        href='<?php echo get_theme_file_uri('style.css'); ?>' type='text/css'
        media='all' />
</head>

<body class="post-template-default single single-post postid-488 single-format-standard">
    <?php get_header("secondary"); ?>
    <?php
    if (in_category('news')) {

    ?>
        <nav aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="http://localhost/ducthanhcomputer">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a href="http://localhost/ducthanhcomputer/category/tin-tuc/"><?php single_cat_title(); ?></a></li>
                </ol>
            </div>
        </nav>

        <main id="content">
            <div class="container">
                <article id="post-55"
                    class="post-55 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-tuc">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            </div>
        </main>
    <?php
    } else {
    ?>
        <nav aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="http://localhost/ducthanh">Trang chủ</a></li>
                    <li class="breadcrumb-item"><a
                            href="http://localhost/ducthanh/category/laptop/laptop-cu/">Laptop cũ</a></li>
                </ol>
            </div>
        </nav>

        <main id="content">
            <div class="container">
                <article id="post-488"
                    class="post-488 post type-post status-publish format-standard has-post-thumbnail hentry category-laptop-cu">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4">
                            <img class="img-fluid"
                                src="<?php the_post_thumbnail_url(); ?>">
                        </div>

                        <div class="col-12 col-sm-12 col-md-8">
                            <h1 class="entry-title"><?php the_title(); ?></h1>
                            <div class="entry-price">Giá: <span>Liên hệ</span></div>
                            <div class="entry-content">
                                <p><?php the_content(); ?></p>
                            </div>
                            <div class="promotion-groups">
                                <div class="promotion-title">Khuyến mãi</div>
                                <div class="promotion-detail">Tặng chuột ko dây và túi chống sốc<br />
                                    Bảo hành: 03 tháng</div>
                            </div>
                        </div>
                    </div>
                    <div class="detail-product">
                        <h2 class="product-sub-title"><span>MÔ TẢ SẢN PHẨM</span></h2>
                    </div>
                </article>
            </div>
        </main>
    <?php
    }
    ?>

    <?php get_footer(); ?>
</body>