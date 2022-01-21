<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thisSite
 */

get_header();
?>
<div class="ts-wrapper-p">
	<main id="primary" class="site-main">

		<?php
		content_product_adder();
		?>

	</main><!-- #main -->

<?php
get_sidebar();
?>
</div>
<?php
get_footer('content');