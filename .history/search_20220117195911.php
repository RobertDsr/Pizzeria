<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package thisSite
 */

get_header();
?>
<div></div>
	<main id="primary" class="site-search-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-search-header">
				<h1 class="page-search-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Wyniki wyszukiwania dla: %s', 'thissite' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
