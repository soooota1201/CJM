<footer class="l-footer footer">
    <ul class="footer-nav">
      <li class="footer-nav__item">
        <a href="<?php echo esc_url (home_url('menu')); ?>">メニュー</a>
      </li><!-- /.footer-nav -->
      <li class="footer-nav__item">
        <a href="<?php echo esc_url (home_url()); ?>#shop">店舗情報</a>
      </li><!-- /.footer-nav -->
      <li class="footer-nav__item">
        <a href="<?php echo esc_url (home_url()); ?>#news">お知らせ</a>
      </li><!-- /.footer-nav -->
    </ul>
    <div class="footer-copy">
      <p class="copy">©︎CJM</p>
    </div><!-- /.footer-copy -->
  </footer>
  
</div><!-- /.wrap -->


<!-- <script src="./src/js/jquery-3.5.0.min.js"></script> -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/infiniteslidev2/infiniteslidev2.min.js"></script>


<script type="text/javascript">
$(function() {
  $('.infiniteslide').infiniteslide({
    'speed': 100, //速さ　単位はpx/秒です。
    'direction': 'left', //up/down/left/rightから選択
    'pauseonhover': false, //マウスオーバーでストップ
    'responsive': false, //子要素の幅を%で指定しているとき
    'clone': 1 //子要素の複製回数
  });
});
</script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      const swiper = new Swiper('.swiper-container', {
  // Optional parameters
  loop: true,

  autoplay: {
    delay: 2000,
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

})

</script>

<script src="<?php echo get_template_directory_uri(); ?>/dist/main.js"></script>

<?php wp_footer(); ?>

  </body>

</html>