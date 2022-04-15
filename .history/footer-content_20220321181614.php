<!-- Footer template without widgets   -->

<footer id="colophon" class="site-footer">

    <div class="logo logoFooter">
        <?php
    the_custom_logo();
    ?>
    </div>
    <div class="address">
        <p>Pizzeria Vesuviana</p>
        <p>64-500 Krotoszyn</p>
        <p>Ul. Kretyńska 24</p>
        <p>Tel. 555 555 555</p>
        <p>Adres email:</p>
        <p>pizzeria@jakiśtam.pl</p>
    </div>

    <div class="openTime">
        <p>Zapraszamy</p>
        <p>Pn-Czw: 12-24</p>
        <p>Pi-Niedz: 12-2</p>
    </div>

    <div class="offer">
        <p>Oferujemy</p>
        <p>Pizze, makarony, kebbap, sałatki </p>
    </div>



    <div class="site-info">
        <a href="<?php echo esc_url(__('https://robertdreszer.pl/', 'thissite')); ?>">
            <?php
            /* translators: %s: CMS name, i.e. WordPress. */
            printf(esc_html__('Pod opieką %s', 'thissite'), 'Robert Dreszer');
            ?>
        </a>
        <span class="sep"> | </span>
        <?php
        /* translators: 1: Theme name, 2: Theme author. */
        printf(esc_html__('Motyw: %1$s by %2$s.', 'thissite'), 'Vesuvio', '<a href="http://robertdreszer.pl">T</a>');
        ?>
    </div><!-- .site-info -->

    <div class="pp">
        <a href="#">Regulamin</a>
        <a href="#">Polityka prywatności</a>
    </div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(''); ?>