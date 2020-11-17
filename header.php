<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?></title>
  </head>

  <body>
    <div class="wrap">

      <header class="l-header header">
        <div class="header-wrapper">
          <a href="./index.html" class="header-logo"><img src="<?php echo get_template_directory_uri(); ?>/src/img/mv-line.jpg/src/img/header-logo.png" alt="WONSHA CHICKENxKIMPA"></a>
          <!-- /.header-logo -->
          <div class="header-nav">
            <a class="header-nav__item header-nav__menu" href="./menu.html"><img width="35px" height="22px"
                src="<?php echo get_template_directory_uri(); ?>/src/img/mv-line.jpg/src/img/menu-icon.jpg" alt=""><span>メニュー</span></a>
            <a class="header-nav__item header-nav__shop" href="#shop"><img width="30px" height="22px"
                src="<?php echo get_template_directory_uri(); ?>/src/img/mv-line.jpg/src/img/map-icon.jpg" alt=""><span>店舗情報</span></a>
            <a class="header-nav__item header-nav__info" href="#news">お知らせ</a>
            <a href="https://wonshachicken.jp/fc2/" class="header-nav__item header-nav__fc-btn">FC加盟店募集中</a>
            <!-- /.header-nav__fc-btn -->
          </div><!-- /.header-pc__menu -->


          <div class="humbarger" id="humbarger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div><!-- /.header-wrapper -->
        <nav class="dropdown-nav" id="dropdown-nav">
          <ul>
            <li class="dropdown-item"><a href="./menu.html">メニュー</a></li>
            <li class="dropdown-item"><a href="#shop">店舗情報</a></li>
            <li class="dropdown-item"><a href="#news">お知らせ</a></li>
          </ul>
        </nav>
      </header>
