<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package vesuvio
 */

get_header('404');
?>

	<main id="primary404" class="site-main404">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Ojej! Taka strona nie istnieje.', 'vesuvio' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content404">
				<p><?php esc_html_e( 'Wygląda na to, że w tym miejscu nic nie znaleziono. Może spróbuj jednego z poniższych linków lub wyszukaj?', 'vesuvio' ); ?></p>

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Możesz zajrzeć do kategorii', 'vesuvio' ); ?></h2>
						<ul>
							<?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							);
							?>
						</ul>
					</div><!-- .widget -->

					<?php
					/* translators: %1$s: smiley */
					$vesuvio_archive_content = '<p>' . sprintf( esc_html__( 'A może spróbuj zajrzeć do naszego archiwum. %1$s', 'vesuvio' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$vesuvio_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer('main');
