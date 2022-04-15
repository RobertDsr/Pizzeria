<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vesuvio
 */

?>

<footer id="colophon" class="site-footer">



	<div class="site-info">
		<a href="<?php echo esc_url(__('https://robertdreszer.pl/', 'vesuvio')); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__('Pod opieką %s', 'vesuvio'), 'RobertDreszer');
			?>
		</a>
		<span class="sep"> | </span>
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf(esc_html__('Motyw: %1$s by %2$s.', 'vesuvio'), 'Vesuvio', '<a href="http://robertdreszer.pl">vesuvio</a>');
		?>
	</div><!-- .site-info -->



</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(''); ?>

</body>

</html>