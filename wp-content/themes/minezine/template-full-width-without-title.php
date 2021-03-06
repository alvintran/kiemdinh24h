<?php
/**
 * Template Name: Full Width without Title
 * The template file for full-width pages without the page title.
 * @package MineZine
 * @since MineZine 1.1.3
*/
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php if (get_theme_mod('minezine_display_breadcrumb', minezine_default_options('minezine_display_breadcrumb')) != 'Hide') { ?>
    <div class="content-headline">
<?php minezine_get_breadcrumb(); ?>
    </div>
<?php } ?>
<?php minezine_get_display_image_page(); ?>
    <div class="entry-content">
<?php the_content(); ?>
<?php wp_link_pages( array( 'before' => '<p class="page-link"><span>' . __( 'Pages:', 'minezine' ) . '</span>', 'after' => '</p>' ) ); ?>
<?php edit_post_link( __( 'Edit', 'minezine' ), '<p>', '</p>' ); ?>
<?php endwhile; endif; ?>
<?php comments_template( '', true ); ?>
    </div>   
  </div> <!-- end of content -->
<?php get_footer(); ?>