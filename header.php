<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <title><?php bloginfo('name'); ?></title>

    <script>
    (function(d) {
      var config = {
        kitId: 'pyt3qfv',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>

    <?php wp_head(); ?>
  </head>

  <body>
    <div class="wrap">

      <header class="l-header header">
        <div class="header-wrapper">
          <a href="<?php echo esc_url (home_url()); ?>" class="header-logo"><img src="<?php echo get_template_directory_uri(); ?>/src/img/header-logo.png" alt="WONSHA CHICKENxKIMPA"></a>
          <!-- /.header-logo -->
          <div class="header-nav">
              <a class="header-nav__item header-nav__menu" href="<?php echo esc_url (home_url('menu')); ?>"><img width="35px" height="22px"
              src="<?php echo get_template_directory_uri(); ?>/src/img/menu-icon.jpg" alt=""><span>メニュー</span></a>
              <a class="header-nav__item header-nav__shop" href="<?php echo esc_url (home_url()); ?>#shop"><img width="30px" height="22px"
              src="<?php echo get_template_directory_uri(); ?>/src/img/map-icon.jpg" alt=""><span>店舗情報</span></a>
              <a class="header-nav__item header-nav__info" href="<?php echo esc_url (home_url()); ?>#news">お知らせ</a>
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
