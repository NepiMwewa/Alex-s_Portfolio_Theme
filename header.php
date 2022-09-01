<!DOCTYPE html>
<html <?php language_attributes(); ?>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>

  <header class="header-content">
    <div class="logo">
      <?php if( has_custom_logo() ):  ?>
          <?php
              // Get Custom Logo URL
              $custom_logo_id = get_theme_mod( 'custom_logo' );
              $custom_logo_data = wp_get_attachment_image_src( $custom_logo_id , 'full' );
              $custom_logo_url = $custom_logo_data[0];
          ?>

          <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
             title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
             rel="home">

              <img src="<?php echo esc_url( $custom_logo_url ); ?>"
                   alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"/>

          </a>
      <?php endif; ?>
    </div>
    <nav class="site-nav">
     <ul class="main-link"><li><a href="https://alexanderharmon.dev">Alexander Harmon</a></li></ul>
       <?php
         $args = array(
           'theme_location' => 'primary'
          );
        ?>
        <?php wp_nav_menu($args); ?>
        

        <?php
        if(is_active_sidebar('left-sidebar')): ?>
          <div class="left-widget-sidebar">
           <?php dynamic_sidebar('left-sidebar');?>
          </div>
        <?php endif;?>

      </nav>

    <h1><?php bloginfo('name'); ?></h1>
  </header>
