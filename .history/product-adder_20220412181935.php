<?php
/**
 * The template for displaying all  product pages
 *
 * Please be careful when modifying this file.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vesuvio
 */

get_header('');
?>
<div class="ts-wrapper-products">
	<main id="primary" class="site-main-products">

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