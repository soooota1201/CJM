<?php get_header(); ?>

    <figure class="goldline"><img src="<?php echo get_template_directory_uri(); ?>/src/img/mv-line.jpg" alt=""></figure>
    
    <main>

    <?php if ( have_posts() ) : ?>
      <?php while( have_posts() ) : the_post(); ?>

      <?php
        $shop_name = get_field('shop-name');
        $address = get_field('address');
        $address_link = get_field('address-link');
        $ubereats = get_field('ubereats-link');
        $takeout = get_field('takeout-link');
        $tel = get_field('tel');
        $businessTime = get_field('business-time');
        $booking = get_field('booking');
        $booking = get_field('booking');
        $payments = get_field('payment');
        $googlemap = get_field('googlemap');
      ?>

  
      <h2 class="section-heading sgl-heading"><?php echo $shop_name; ?></h2><!-- /.shop-shop-heading -->
  
      <div class="detail">
  
        <figure class="detail__thumb"><?php echo get_the_post_thumbnail(); ?></figure>
  
        <div class="delivery detail-delivery">

          <?php if ($ubereats) { ?>
            <a class="delivery__icon delivery__ly" href="<?php echo $ubereats; ?>"><img width="50px"
                height="50px" src="<?php echo get_template_directory_uri(); ?>/src/img/UberEats.jpg" alt=""></a>
            <?php } ?>

          <a class="delivery__icon delivery__link" href="#"><img width="50px" height="50px" src="<?php echo get_template_directory_uri(); ?>/src/img/takeout.jpg" alt=""></a>
        </div>
  
        <ul class="detail-info detail-info-ly">
          <li class="detail-info__item detail-info__address"><?php echo $address; ?></li>
          <li class="detail-info__item detail-info__tel">TEL:<a href="tel:<?php echo $tel; ?>"><?php echo $tel; ?></a></li>
          <li class="detail-info__item detail-info__business">営業時間　<?php echo $businessTime; ?></li>
          <li class="detail-info__item detail-info__business">予約可否：<?php echo $booking; ?></li>
          <li class="detail-info__item detail-info__business">
            支払い方法：
            <?php if( $payments ): ?>
              <?php foreach( $payments as $payment ): ?>
                <span><?php echo $payment; ?></span>
              <?php endforeach; ?>
            <?php endif; ?>
          </li><!-- /.detail-info__ -->
        </ul>
        
      </div><!-- /.detail -->
  
      <?php echo $googlemap; ?>

        <?php endwhile;?>
    <?php endif; ?>
      
    </main>
  
    <a href="https://wonshachicken.jp/fc2/" class="fc-btn">
      <img width="100px" height="100px" src="./src/img/fc-btn.png" alt="">
    </a><!-- /.fc-btn -->
  
    <div class="main-btns">
      <div class="main-btns-wrapper">
        <a class="main-btns-item" href="#"><img width="42px" height="22px" src="./src/img/menu-icon.jpg"
            alt=""><span>メニュー</span></a>
      </div><!-- /.page-links-wrapper -->
    </div><!-- /.page-links -->
  
    <?php get_footer(); ?>