<?php get_header(); ?>

      <main>
        <section class="mv">
          <figure class="goldline"><img src="<?php echo get_template_directory_uri(); ?>/src/img/mv-line.jpg" alt="金色　線"></figure>

          <!-- swiper -->
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img class="swiper-img pc-mv" src="<?php echo get_template_directory_uri(); ?>/src/img/top-pc-1.jpg" alt="">
                <img class="swiper-img sp-mv" src="<?php echo get_template_directory_uri(); ?>/src/img/mv1.jpg" alt="チキン　画像"></div>
              <div class="swiper-slide">
                <img class="swiper-img pc-mv" src="<?php echo get_template_directory_uri(); ?>/src/img/top-pc-2.jpg" alt="">
                <img class="swiper-img sp-mv" src="<?php echo get_template_directory_uri(); ?>/src/img/mv2.jpg" alt="キンパ　画像"></div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
          <!-- END swiper -->

          <figure class="goldline"><img src="<?php echo get_template_directory_uri(); ?>/src/img/mv-line.jpg" alt=""></figure>
        </section><!-- /.mv -->


        <div class="infiniteslide">

          <ul class="infinite-list">
            <li class="infinite-item"><img src="<?php echo get_template_directory_uri(); ?>/src/img/slide-img1.jpg" alt="チキン　画像" /></li>
            <li class="infinite-item"><img src="<?php echo get_template_directory_uri(); ?>/src/img/slide-img2.jpg" alt="キンパ　画像" /></li>
            <li class="infinite-item"><img src="<?php echo get_template_directory_uri(); ?>/src/img/slide-img3.jpg" alt="" /></li>
            <li class="infinite-item"><img src="<?php echo get_template_directory_uri(); ?>/src/img/slide-img4.jpg" alt="" /></li>
            <li class="infinite-item"><img src="<?php echo get_template_directory_uri(); ?>/src/img/slide-img1.jpg" alt="チキン　画像" /></li>
            <li class="infinite-item"><img src="<?php echo get_template_directory_uri(); ?>/src/img/slide-img2.jpg" alt="キンパ　画像" /></li>
            <li class="infinite-item"><img src="<?php echo get_template_directory_uri(); ?>/src/img/slide-img3.jpg" alt="" /></li>
            <li class="infinite-item"><img src="<?php echo get_template_directory_uri(); ?>/src/img/slide-img4.jpg" alt="" /></li>
            <li class="infinite-item"><img src="<?php echo get_template_directory_uri(); ?>/src/img/slide-img1.jpg" alt="チキン　画像" /></li>
            <li class="infinite-item"><img src="<?php echo get_template_directory_uri(); ?>/src/img/slide-img2.jpg" alt="キンパ　画像" /></li>
            <li class="infinite-item"><img src="<?php echo get_template_directory_uri(); ?>/src/img/slide-img3.jpg" alt="" /></li>
            <li class="infinite-item"><img src="<?php echo get_template_directory_uri(); ?>/src/img/slide-img4.jpg" alt="" /></li>
          </ul>

        </div><!-- /.menu-scroll -->


        <section class="shop shop-kanto" id="shop">
          <h2 class="section-heading">店舗情報（関東エリア）</h2><!-- /.shop-shop-heading -->

          <div class="shop-index">

          <?php
          $args = array(
            'posts_per_page' => -1,
            'post_type' => array('shop'),
            'orderby' => 'date',
            'order' => 'ASC',
            'tax_query' => array(
              array(
                'taxonomy' => 'area', // タクソノミースラッグを指定
                'field' => 'slug',
                'terms' => 'kanto', // タームスラッグを指定
              )
            )
          );
          $my_posts = get_posts($args);
          ?>

            <?php
          $myposts = new WP_Query($args);
          if ($myposts->have_posts()) :
            ?>


            <?php while ($myposts->have_posts()) : $myposts->the_post(); ?>

            <?php
              $shop_name = get_field('shop-name');
              $address = get_field('address');
              $address_link = get_field('address-link');
              $ubereats = get_field('ubereats-link');
              $takeout = get_field('takeout-link');
            ?>

            <div class="shop-item l-shop-item">
              <figure class="shop-item__img">
                <?php echo get_the_post_thumbnail(); ?>
              </figure><!-- /.shop-item__left -->
              <div class="shop-item__text">
                <p class="shop-item__heading">
                  <?php echo $shop_name; ?>
                </p><!-- /.shop-item__heading -->
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/src/img/line.jpg" alt="">
                </figure>
                <a href="<?php echo $address_link ?>" class="shop-item__address"><?php echo $address; ?></a>
                <!-- /.shop-item__address -->
                <div class="delivery delivery-pl">

                  <?php if ($ubereats) { ?>
                    <a class="delivery__icon delivery__ly" href="<?php echo $ubereats; ?>"><img width="50px"
                        height="50px" src="<?php echo get_template_directory_uri(); ?>/src/img/UberEats.jpg" alt=""></a>
                    <?php } ?>

                    <?php if ($takeout) { ?>
                    <a class="delivery__icon delivery__ly" href="<?php the_permalink(); ?>"><img width="50px"
                        height="50px" src="<?php echo get_template_directory_uri(); ?>/src/img/takeout.jpg" alt=""></a>
                    <?php } ?>

                    <?php if (empty($ubereats) && empty($takeout)) { ?>
                    <figure><img width="110px" src="<?php echo get_template_directory_uri(); ?>/src/img/open.jpg" alt="">
                    </figure>
                    <?php } ?>

                </div><!-- /.delivery -->
              </div><!-- /.shop-item__address -->
            </div><!-- /.shop-item -->

            <?php endwhile; ?>
            
          </div><!-- /.shop-index -->

          <?php endif; ?>
          <?php wp_reset_postdata(); ?>

        </section><!-- /.shop -->

        <section class="shop shop-chubu">
          <h2 class="section-heading">店舗情報（中部エリア）</h2><!-- /.shop-shop-heading -->

          <div class="shop-index">

          <?php
            $args = array(
              'posts_per_page' => 6,
              'post_type' => array('shop'),
              'orderby' => 'date',
              'order' => 'ASC',
              'tax_query' => array(
                array(
                  'taxonomy' => 'area', // タクソノミースラッグを指定
                  'field' => 'slug',
                  'terms' => 'chubu', // タームスラッグを指定
                )
              )
            );
            $my_posts = get_posts($args);
          ?>

          <?php
            $myposts = new WP_Query($args);
            if ($myposts->have_posts()) :
          ?>

          <?php while ($myposts->have_posts()) : $myposts->the_post(); ?>

          <?php
            $shop_name = get_field('shop-name');
            $address_link = get_field('address-link');
            $ubereats = get_field('ubereats-link');
            $takeout = get_field('takeout-link');
          ?>

            <div class="shop-item l-shop-item">
              <figure class="shop-item__img">
                <?php echo get_the_post_thumbnail(); ?>
              </figure><!-- /.shop-item__left -->
              <div class="shop-item__text">
                <p class="shop-item__heading"><?php echo $shop_name; ?></p><!-- /.shop-item__heading -->
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/src/img/line.jpg" alt="">
                </figure>
                <a href="<?php echo $address_link ?>"
                  class="shop-item__address"><?php echo $address; ?></a><!-- /.shop-item__address -->
                <div class="delivery delivery-pl">

                <?php if ($ubereats) { ?>
                    <a class="delivery__icon delivery__ly" href="<?php echo $ubereats; ?>"><img width="50px"
                        height="50px" src="<?php echo get_template_directory_uri(); ?>/src/img/UberEats.jpg" alt=""></a>
                    <?php } ?>

                    <?php if ($takeout) { ?>
                    <a class="delivery__icon delivery__ly" href="<?php the_permalink(); ?>"><img width="50px"
                        height="50px" src="<?php echo get_template_directory_uri(); ?>/src/img/takeout.jpg" alt=""></a>
                    <?php } ?>

                    <?php if (empty($ubereats) && empty($takeout)) { ?>
                    <figure><img width="110px" src="<?php echo get_template_directory_uri(); ?>/src/img/open.jpg" alt="">
                    </figure>
                    <?php } ?>

                </div><!-- /.delivery -->
              </div><!-- /.shop-item__address -->
            </div><!-- /.shop-item -->

            <?php endwhile; ?>

          </div><!-- /.shop-index -->

          <?php endif; ?>
          <?php wp_reset_postdata(); ?>

        </section><!-- /.shop -->


        <section class="news" id="news">
          <h2 class="section-heading">お知らせ</h2><!-- /.section-heading -->

          <?php
          $args = array(
            'post_type' => 'news',  //カスタム投稿タイプ名
            'posts_per_page' => 5, // 表示件数
            'paged' => $paged, //ページネーションを入れたい場合は追加
          );
          ?>

          <?php
          $myposts = new WP_Query($args);
          if ($myposts->have_posts()) :
          ?>

          <div class="news-index">

          <?php while ($myposts->have_posts()) : $myposts->the_post(); ?>

            <div class="news-item l-news-item">
              <p class="news-item__time"><?php the_date('Y.m.d'); ?></p><!-- /.news-item__time -->
              <p class="news-item__ttl"><?php the_title(); ?></p><!-- /.news-item__ttl -->
              <p class="news-item__text"><?php the_excerpt(); ?></p><!-- /.news-item__text -->
            </div><!-- /.news-item -->

          <?php endwhile; ?>

          </div><!-- /.news-index -->

          <?php endif; ?>
          <?php wp_reset_postdata(); ?>

        </section><!-- /.news -->

      </main>

      <a href="https://wonshachicken.jp/fc2/" class="fc-btn">
        <img width="100px" height="100px" src="<?php echo get_template_directory_uri(); ?>/src/img/fc-btn.png" alt="">
      </a><!-- /.fc-btn -->

      <div class="main-btns">
        <div class="main-btns-wrapper">
          <a class="main-btns-item" href="<?php echo esc_url (home_url('menu')); ?>"><img width="42px" height="22px" src="<?php echo get_template_directory_uri(); ?>/src/img/menu-icon.jpg"
              alt=""><span>メニュー</span></a>
        </div><!-- /.page-links-wrapper -->
      </div><!-- /.page-links -->

    <?php get_footer(); ?>