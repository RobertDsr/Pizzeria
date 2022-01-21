<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thisSite
 */


if ( ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}
?>

<aside id="productSidebar" class="widget-area-postSidebar">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</aside><!-- #secondary -->