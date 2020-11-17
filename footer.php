<footer class="l-footer footer">
    <ul class="footer-nav">
      <li class="footer-nav__item">
        <a href="./menu.html">メニュー</a>
      </li><!-- /.footer-nav -->
      <li class="footer-nav__item">
        <a href="#shop">店舗情報</a>
      </li><!-- /.footer-nav -->
      <li class="footer-nav__item">
        <a href="#news">お知らせ</a>
      </li><!-- /.footer-nav -->
    </ul>
    <div class="footer-copy">
      <p class="copy">©︎CJM</p>
    </div><!-- /.footer-copy -->
  </footer>
  
</div><!-- /.wrap -->

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

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
    
    <?php wp_footer(); ?>

  </body>

</html>