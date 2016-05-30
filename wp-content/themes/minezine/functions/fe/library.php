<?php 
/**
 * Library of Theme options functions.
 * @package MineZine
 * @since MineZine 1.0.0
*/

// Display Breadcrumb navigation
function minezine_get_breadcrumb() { 
		if (get_theme_mod('minezine_display_breadcrumb', minezine_default_options('minezine_display_breadcrumb')) != 'Hide') { ?>
<?php if (function_exists( 'bcn_display' ) && !is_front_page()){ _e('<p class="breadcrumb-navigation">', 'minezine'); ?><?php bcn_display(); ?><?php _e('</p>', 'minezine');} ?>
<?php } 
} 

// Display featured images on single posts
function minezine_get_display_image_post() { 
		if (get_theme_mod('minezine_display_image_post', minezine_default_options('minezine_display_image_post')) == '' || get_theme_mod('minezine_display_image_post', minezine_default_options('minezine_display_image_post')) == 'Display') { ?>
<?php if ( has_post_thumbnail() ) : ?>
<?php the_post_thumbnail(); ?>
<?php endif; ?>
<?php } 
}

// Display featured images on pages
function minezine_get_display_image_page() { 
		if (get_theme_mod('minezine_display_image_page', minezine_default_options('minezine_display_image_page')) == '' || get_theme_mod('minezine_display_image_page', minezine_default_options('minezine_display_image_page')) == 'Display') { ?>
<?php if ( has_post_thumbnail() ) : ?>
<?php the_post_thumbnail(); ?>
<?php endif; ?>
<?php } 
} ?>