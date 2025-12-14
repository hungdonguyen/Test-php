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

<body class="page-template-default page page-id-7">

    <?php get_header("secondary"); ?>

    <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="http://10.10.114.221/ducthanhcomputer">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Giới thiệu</li>
            </ol>
        </div>
    </nav>

    <main id="content">
        <div class="container">
            <article id="post-7" class="post-7 page type-page status-publish hentry">
                <?php
                    while (have_posts()) {
                        the_post();
                ?>
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>
                <?php
                  }
                ?>
            </article>
        </div>
    </main>

    <?php get_footer(); ?>
</body>