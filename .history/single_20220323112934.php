<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vesuvio
 */

get_header('blog');
?>

<div class="ts-wrapper-post">

	<main id="primary" class="site-post">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-post', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Poprzedni:', 'vesuvio' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Następny:', 'vesuvio' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
?>
</div>

<?php
get_footer('main');