<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Alexander Harmon Portfolio, a Front-End and WordPress 
    web developer with Software development roots. Fast Learner with skills in Web Development
    , Software Development and Game development. Able to use the following languages:
    JavaScript, C#, Java, PHP, Python, Lua, HTML5, CSS3. Three associates with a perfect 4.0 GPA
    in Web Development, Cyber Security & Information Technology.">
    <title><?php bloginfo('name'); ?></title>
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <?php wp_head(); ?>
  </head>

<body <?php body_class(); ?>>

  <div id="tiles"></div>

  <div class="bodyWrapper">
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

    <label class="menu-opener">
      <input type="checkbox" id="checkId" class="toggler">
      <div class="grouped fancy-button">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
      </div>
      <div class="hamburger">
        <div>

          <nav class="site-nav open-content">
            <ul class="main-link closeTab"><li><a href="https://alexanderharmon.dev">Alexander Harmon</a></li></ul>
              <?php
                $args = array(
                  'theme_location' => 'primary'
                  );?>

                <?php wp_nav_menu($args); ?>

                <?php
                if(is_active_sidebar('left-sidebar')): ?>
                  <div class="left-widget-sidebar">
                  <?php dynamic_sidebar('left-sidebar');?>
                  </div>
              <?php endif;?>

          </nav>
        </div>
      </div>
    </label> 

    

    <h1><?php bloginfo('name'); ?></h1>
  </header>
 
