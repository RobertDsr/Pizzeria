<?php
/**
 * The template for displaying all  product pages
 *
 * 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thisSite
 */

get_header();
?>
<div class="ts-wrapper-products">
	<main id="primary" class="site-main">

		<?php
		content_product_adder();
		?>

	</main><!-- #main -->

<?php
get_sidebar('products');
?>
</div>
<?php
get_footer('main');