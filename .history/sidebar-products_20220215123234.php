<?php
/**
 * Sidebar used on the products page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thisSite
 */


if ( ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}
?>

<aside id="productSidebar" class="widget-area-productSidebar">
	<?php dynamic_sidebar( 'sidebar-3' ); ?>
</aside><!-- #secondary -->