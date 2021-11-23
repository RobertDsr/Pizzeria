

<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://robertdreszer.pl/', 'thissite' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'thissite' ), 'RobertDreszer' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'thissite' ), 'thissite', '<a href="http://robertdreszer.pl">Robert Dreszer</a>' );
				?>
		</div><!-- .site-info -->
			
	</footer><!-- #colophon -->
</div><!-- #page -->