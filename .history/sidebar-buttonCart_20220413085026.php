<?php
/**
 * Sidebar used in the header of the store
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vesuvio
 */


if ( ! is_active_sidebar( 'button-cart' ) ) {
	return;
}
?>

<aside id="Sidebar" class="widget-area-productSidebar">
	<?php dynamic_sidebar( 'button-cart' ); ?>
</aside><!-- #secondary -->