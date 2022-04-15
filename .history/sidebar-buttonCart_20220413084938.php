<?php
/**
 * Sidebar used in the header of the store
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vesuvio
 */


if ( ! is_active_sidebar( 'button' ) ) {
	return;
}
?>

<aside id="productSidebar" class="widget-area-productSidebar">
	<?php dynamic_sidebar( 'sidebar-3' ); ?>
</aside><!-- #secondary -->