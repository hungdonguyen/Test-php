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

<body class="search search-results">
    <?php get_header("secondary"); ?>

    <main id="content">
        <div class="container">
            <h1 class="entry-title"><span>Kết Quả Tìm Kiếm Cho <?php echo get_search_query(); ?></span></h1>
            <div class="row san-pham-group">
                <?php

                while (have_posts()) {
                    the_post();
                ?>
                    <div class="col-12 col-sm-6 col-md-3">
                        <article class="group-product">
                            <a
                                href="<?php the_permalink(); ?>">
                                <div class="group-info">
                                    <img class="img-fluid"
                                        src="<?php the_post_thumbnail_url(); ?>">
                                    <div class="info-hover"><?php the_content(); ?></div>
                                </div>
                                <div class="san-pham-title"><?php the_title(); ?>
                                </div>
                                <div class="san-pham-price">Giá: <span>Liên hệ</span></div>
                            </a>
                        </article>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </main>

    <?php get_footer(); ?>
</body>