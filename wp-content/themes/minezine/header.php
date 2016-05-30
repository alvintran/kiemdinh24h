<?php
/**
 * The header template file.
 * @package MineZine
 * @since MineZine 1.0.0
*/
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" /> 
  <meta name="viewport" content="width=device-width" />
<?php if ( ! function_exists( '_wp_render_title_tag' ) ) { ?><title><?php wp_title( '|', true, 'right' ); ?></title><?php } ?> 
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"> 
<?php wp_head(); ?> 
</head>
 
<body <?php body_class(); ?> id="wrapper">
<?php if ( get_theme_mod('minezine_display_background_pattern', minezine_default_options('minezine_display_background_pattern')) != 'Hide' ) { ?>
<div class="pattern"></div> 
<?php } ?>   
<div id="container">

  <header id="header">
<?php if ( !is_page_template('template-landing-page.php') ) { ?>
<?php if ( has_nav_menu( 'top-navigation' ) || get_theme_mod('minezine_header_facebook_link', minezine_default_options('minezine_header_facebook_link')) != '' || get_theme_mod('minezine_header_twitter_link', minezine_default_options('minezine_header_twitter_link')) != '' || get_theme_mod('minezine_header_google_link', minezine_default_options('minezine_header_google_link')) != '' || get_theme_mod('minezine_header_rss_link', minezine_default_options('minezine_header_rss_link')) != '' ) {  ?>
    <div id="top-navigation-wrapper">
      <div class="top-navigation">
<?php if ( has_nav_menu( 'top-navigation' ) ) { wp_nav_menu( array( 'menu_id'=>'top-nav', 'theme_location'=>'top-navigation' ) ); } ?>
<?php if (get_theme_mod('minezine_header_facebook_link', minezine_default_options('minezine_header_facebook_link')) != '' || get_theme_mod('minezine_header_twitter_link', minezine_default_options('minezine_header_twitter_link')) != '' || get_theme_mod('minezine_header_google_link', minezine_default_options('minezine_header_google_link')) != '' || get_theme_mod('minezine_header_rss_link', minezine_default_options('minezine_header_rss_link')) != '' ) { ?>      
        <div class="header-icons">
<?php if (get_theme_mod('minezine_header_facebook_link', minezine_default_options('minezine_header_facebook_link')) != ''){ ?>
          <a class="social-icon facebook-icon" target="_blank" href="<?php echo esc_url(get_theme_mod('minezine_header_facebook_link', minezine_default_options('minezine_header_facebook_link'))); ?>"></a>
<?php } ?>
<?php if (get_theme_mod('minezine_header_twitter_link', minezine_default_options('minezine_header_twitter_link')) != ''){ ?>
          <a class="social-icon twitter-icon" target="_blank" href="<?php echo esc_url(get_theme_mod('minezine_header_twitter_link', minezine_default_options('minezine_header_twitter_link'))); ?>"></a>
<?php } ?>
<?php if (get_theme_mod('minezine_header_google_link', minezine_default_options('minezine_header_google_link')) != ''){ ?>
          <a class="social-icon google-icon" target="_blank" href="<?php echo esc_url(get_theme_mod('minezine_header_google_link', minezine_default_options('minezine_header_google_link'))); ?>"></a>
<?php } ?>
<?php if (get_theme_mod('minezine_header_rss_link', minezine_default_options('minezine_header_rss_link')) != ''){ ?>
          <a class="social-icon rss-icon" target="_blank" href="<?php echo esc_url(get_theme_mod('minezine_header_rss_link', minezine_default_options('minezine_header_rss_link'))); ?>"></a>
<?php } ?>
        </div>
<?php } ?>
      </div>
    </div>
<?php }} ?>    
    <div class="header-content">
<?php if ( get_theme_mod('minezine_logo_url', minezine_default_options('minezine_logo_url')) == '' ) { ?>
      <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
<?php } else { ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="header-logo" src="<?php echo esc_url(get_theme_mod('minezine_logo_url', minezine_default_options('minezine_logo_url'))); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>
<?php } ?>
<?php if ( get_theme_mod('minezine_display_site_description', minezine_default_options('minezine_display_site_description')) != 'Hide' ) { ?>
      <p class="site-description"><?php bloginfo( 'description' ); ?></p>
<?php } ?>
<?php if ( get_theme_mod('minezine_display_search_form', minezine_default_options('minezine_display_search_form')) != 'Hide' && !is_page_template('template-landing-page.php') ) { ?>
<?php get_search_form(); ?>
<?php } ?>
    </div>
<?php if ( !is_page_template('template-landing-page.php') ) { ?>
    <div class="menu-box">
      <div class="navigation-pattern"></div>
      <a class="link-home" href="<?php echo esc_url( home_url( '/' ) ); ?>"></a>
<?php wp_nav_menu( array( 'menu_id'=>'nav', 'theme_location'=>'main-navigation' ) ); ?>
    </div>
<?php } ?>    
<?php if ( is_home() || is_front_page() ) { ?>
<?php if ( get_header_image() != '' ) { ?>    
    <div class="header-image"><img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>" /></div>
<?php } ?>
<?php } else { ?>
<?php if ( get_header_image() != '' && get_theme_mod('minezine_display_header_image', minezine_default_options('minezine_display_header_image')) != 'Only on Homepage' ) { ?>    
    <div class="header-image"><img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>" /></div>
<?php } ?>
<?php } ?>
  </header> <!-- end of header -->

  <div id="main-content">
  <div id="content">