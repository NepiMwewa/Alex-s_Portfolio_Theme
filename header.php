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

  <div id="tiles" class="remove-opacity"></div>

  <div class="bodyWrapper">
  <header id="header-id" class="header-content">

  <nav role="navigation" aria-label="Main menu" id="hamburger-menu">
      <button aria-expanded="false" aria-label="Main menu toggle button"  aria-controls="main-menu" href="#menu" id="menu-toggle" class="menu-toggle" onclick="toggleMenu()">
          <svg aria-hidden="true" focusable="false" fill="none" stroke="currentColor" 
              viewBox="0 0 24 24" 
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" 
              stroke-linejoin="round" 
              stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16">
              </path>
          </svg>
      </button>
    </nav>
    <nav class="site-nav" id="menu-nav">
      <ul class="main-link closeTab"><li><a href="https://alexanderharmon.dev">Alexander Harmon</a></li></ul>
        <?php
          wp_nav_menu( array(
            'theme_location' 	=> 'primary',
            'menu_id' 		 	  => 'main-menu',
            'menu_class' 		  => 'menu',
            'container' 	 	  => '',
            'container_id'    => '',
            'container_class'	=> '',
            'depth'				    => 2,
            'fallback_cb' 		=> false
          ) );
        ?>
        <?php
            if(is_active_sidebar('left-sidebar')): ?>
              <div class="left-widget-sidebar">
              <?php dynamic_sidebar('left-sidebar');?>
              </div>
        <?php endif;?>
      </nav>
    <h1><?php bloginfo('name'); ?></h1>
  </header>
 
