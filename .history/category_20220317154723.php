<?php

/**
 * The template for displaying category pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thisSite
 */
get_header('category');
?>

<div class="ts-wrapper-posts" >

	<main id="primary" class="site-main-posts">

		<?php if (have_posts()) : ?>

			<header class="page-header">
				<?php
				the_archive_title('<h1 class="page-title">', '</h1>');
				the_archive_description('<div class="archive-description">', '</div>');
				?>
			</header><!-- .page-header -->

		<?php
			/* Start the Loop */
			while (have_posts()) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part('template-parts/content-blog', get_post_type());

			endwhile;

			the_posts_navigation();

		else :

			get_template_part('template-parts/content', 'none');

		endif;
		?>

	</main><!-- #main -->

	<?php
	get_sidebar('post');
	?>
</div>
<?php
get_footer('main');
