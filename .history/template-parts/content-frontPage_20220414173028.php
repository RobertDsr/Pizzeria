<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vesuvio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-page-title">', '</h1>' ); ?>
	</header> <!-- .entry-header -->

	<?php vesuvio_post_thumbnail(); ?>

	<div class="entry-content-front-page">
		<div>
			<a href=""></a>
			<svg class= xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" version="1.0"><path d="M1 31L16 1l15 30-15-10L1 31z" stroke-linejoin="round" fill-rule="evenodd" stroke="#000" stroke-linecap="round" stroke-width="2" fill="#fff"/></svg>
		</div>
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'vesuvio' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'vesuvio' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
