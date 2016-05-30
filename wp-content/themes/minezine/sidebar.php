<?php
/**
 * The sidebar template file.
 * @package MineZine
 * @since MineZine 1.0.0
*/
?>
<?php if (get_theme_mod('minezine_display_sidebar', minezine_default_options('minezine_display_sidebar')) != 'Hide') { ?>
<aside id="sidebar">
<?php if ( dynamic_sidebar( 'sidebar-1' ) ) : else : ?>
<?php endif; ?>
</aside> <!-- end of sidebar -->
<?php } ?>