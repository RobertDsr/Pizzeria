<footer id="colophon" class="site-footer">

    <div class="logo logoFooter">
        <?php
    the_custom_logo();
    ?>
    </div>
    <div>
        
    </div>



    <div class="site-info">
        <a href="<?php echo esc_url(__('https://robertdreszer.pl/', 'thissite')); ?>">
            <?php
            /* translators: %s: CMS name, i.e. WordPress. */
            printf(esc_html__('Proudly powered by %s', 'thissite'), 'Robert Dreszer');
            ?>
        </a>
        <span class="sep"> | </span>
        <?php
        /* translators: 1: Theme name, 2: Theme author. */
        printf(esc_html__('Motyw: %1$s by %2$s.', 'thissite'), 'thisSite', '<a href="http://robertdreszer.pl">Robert Dreszer</a>');
        ?>
    </div><!-- .site-info -->

    <div class="pp">
        <a href="#">Regulamin</a>
        <a href="#">Polityka prywatności</a>
    </div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(''); ?>