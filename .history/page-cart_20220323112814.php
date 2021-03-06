<?php
/**
 * Template Name: Shopping cart page
 * 
 * This template displays a shopping cart page.
 * Please be careful when modifying this file.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vesuvio
 */

get_header();
?>
<div class="ts-wrapper-cart">
	<main id="primary" class="site-main-cart">
		
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'cart' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar('products');
?>
</div>
<?php
get_footer('main');