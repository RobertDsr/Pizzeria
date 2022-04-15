<!-- Footer template with widgets  -->

<footer id="footerMain" class="footer-widget-main">

    <div class="logo logoFooter">
        <?php
        the_custom_logo();
        ?>
    </div>

    <div id="footerWidgetMain" class="widget-area-footerWidgetMain">
        <?php dynamic_sidebar('footer-main'); ?>
    </div>



    <div class="site-info">
        <a href="<?php echo esc_url(__('https://robertdreszer.pl/', 'vesuvio')); ?>">
            <?php
            /* translators: %s: CMS name, i.e. WordPress. */
            printf(esc_html__('Pod opieką %s', 'vesuvio'), 'Robert Dreszer');
            ?>
        </a>
        <span class="sep"> | </span>
        <?php
        /* translators: 1: Theme name, 2: Theme author. */
        printf(esc_html__('Motyw: %1$s by %2$s.', 'vesuvio'), 'Vesuvio', '<a href="http://robertdreszer.pl">ThisSite</a>');
        ?>
    </div><!-- .site-info -->

</footer><!-- #footerMain
 -->
</div><!-- #page -->

<?php wp_footer('');?>