<?php
/**
 * Sidebar used on the products page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thisSite
 */


if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<aside id="postSidebar" class="widget-area-postSidebar">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</aside><!-- #secondary -->