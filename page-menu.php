<?php get_header(); ?>

    <figure class="goldline"><img src="<?php echo get_template_directory_uri(); ?>/src/img/mv-line.jpg" alt=""></figure>
    
    <main>

    <?php if ( have_posts() ) : ?>
      <?php while( have_posts() ) : the_post(); ?>
          
  
      <h2 class="section-heading">メニュー</h2><!-- /.section-heading -->
  
      <figure class="menu"><img src="<?php echo get_template_directory_uri(); ?>/src/img/menu.jpg" alt=""></figure>
      
      <?php endwhile;?>
    <?php endif; ?>

    </main>
  
    <?php get_footer(); ?>