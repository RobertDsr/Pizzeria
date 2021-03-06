<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thisSite
 */

?>

<footer id="colophon" class="site-footer">



	<div class="site-info">
		<a href="<?php echo esc_url(__('https://robertdreszer.pl/', 'thissite')); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf(esc_html__('Pod opieką %s', 'thissite'), 'RobertDreszer');
			?>
		</a>
		<span class="sep"> | </span>
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf(esc_html__('Motyw: %1$s by %2$s.', 'thissit'), 'thissite', '<a href="http://robertdreszer.pl">Robert Dreszer</a>');
		?>
	</div><!-- .site-info -->



</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(''); ?>

</body>

</html>