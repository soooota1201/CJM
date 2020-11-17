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
      ?>

  
      <h2 class="section-heading sgl-heading">新栄 プレミアム店</h2><!-- /.shop-shop-heading -->
  
      <div class="detail">
  
        <figure class="detail__thumb"><?php echo get_the_post_thumbnail(); ?></figure>
  
        <div class="delivery detail-delivery">

          <?php if ($ubereats) { ?>
            <a class="delivery__icon delivery__ly" href="<?php echo $ubereats; ?>"><img width="50px"
                height="50px" src="<?php echo get_template_directory_uri(); ?>/src/img/UberEats.jpg" alt=""></a>
            <?php } ?>

          <a class="delivery__link" href="#"><img width="50px" height="50px" src="<?php echo get_template_directory_uri(); ?>/src/img/takeout.jpg" alt=""></a>
        </div>
  
        <ul class="detail-info detail-info-ly">
          <li class="detail-info__item detail-info__address">愛知県名古屋市中区新栄 3-1-1
            新栄ハイツ 1F </li>
          <li class="detail-info__item detail-info__tel">TEL:<a href="tel:052-249-5929"> 052-249-5929</a></li>
          <li class="detail-info__item detail-info__business">営業時間　11：00〜22：00</li>
          <li class="detail-info__item detail-info__business">予約可否：予約可</li>
          <li class="detail-info__item detail-info__business">
            支払い方法：カード可（VISA、Master、JCB、AMEX、Diners）　電子マネー可（楽天Edy、nanaco、iD、QUICPay）</li><!-- /.detail-info__ -->
        </ul>
        
      </div><!-- /.detail -->
  
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.4808313067256!2d136.9222927152449!3d35.16956648031673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600370e9a1371b3d%3A0xfb400ef86392fa3e!2z44CSNDYwLTAwMDcg5oSb55-l55yM5ZCN5Y-k5bGL5biC5Lit5Yy65paw5qCE77yT5LiB55uu77yR4oiS77yRIOaWsOaghOeUuuODj-OCpOODhCAxRg!5e0!3m2!1sja!2sjp!4v1605243808740!5m2!1sja!2sjp"
        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>

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