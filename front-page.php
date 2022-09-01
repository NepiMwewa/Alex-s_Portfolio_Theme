<?php
  get_header();
?>

  <div class="front-page-content">
  
    <?php if(have_posts()) :
      while (have_posts()) :the_post();
        ?><h1 style="display: none;"><?php the_title(); ?></h1><?php
        if(has_post_thumbnail() ):
        ?> <div class="front-page-img"><?php echo get_the_post_thumbnail();?></div>
      <hr> <?php
        endif;
        the_content();

      endwhile;

      else:
        echo '<p>No content found</p>';

      endif;
    ?>
  <!--
  </div>
  <div class="menu-opener">
      <input type="checkbox" class="toggler">
      <div class="hamburger">
        <div>
          <p class="open-content">content</p>
        </div>
      </div>
    </div>
    -->

<?php
  get_footer();
?>
