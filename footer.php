<footer class="footer-content">

  <nav class="site-nav">
    <?php
      $args = array(
        'theme_location' => 'footer'
      );
    ?>

    <?php wp_nav_menu($args); ?>
  </nav>
  <?php if(is_active_sidebar('photo-upper-area')): ?>
    <div class="footer-widget">
      <?php dynamic_sidebar('photo-upper-area');?>
    </div>
  <?php endif;?>
</footer>

<?php wp_footer(); ?>
</body>
</html>
