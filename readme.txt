=== thisSite ===

Contributors: ThisSite
Tags: custom-background, custom-logo, custom-menu, featured-images, threaded-comments, translation-ready

Requires at least: 4.5
Tested up to: 5.9
Requires PHP: 5.6
Stable tag: 1.1.0
License: GNU General Public License v2 or later
License URI: LICENSE

A theme called thisSite.

== Description ==

A theme designed for small gastronomy. It includes, among others online ordering system.
It is a fully complete theme for small gastronomy. Of course, if necessary, we can change everything according to the customer's needs.

== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload Theme and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= Does this theme support any plugins? =

The theme supports the eCommerce Product Catalog plugin for WordPress and Contact Form 7, among others. It also supports widgets.

== Changelog ==


== Credits ==

* Based on Underscores https://underscores.me/, (C) 2012-2020 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css https://necolas.github.io/normalize.css/, (C) 2012-2018 Nicolas Gallagher and Jonathan Neal, [MIT](https://opensource.org/licenses/MIT)


Do zrobienia:
button na tel w nagłówku, czcionka na mobile


Hierarchia plików WP:

Home.php - zastępuje index.php

Strona główna - front-page.php -> content-frontPage.php
Podstrony - page.php -> content-page.php
Pojedyńczy post - single.php -> content.php
Strona główna bloga - home.php -> content-blog.php
Strona kategorii, autora i archiwum itp - archive.php

Dla autora można stworzyć osobną stronę dla wszystkich autorów author.php content-author.php lub dla każdego z osobna author-nazwa.php

Dla kategorii można stworzyć osobną stronę dla wszystkich kategorii category.php -> content-category.php lub dla każdej kategorii osobno category-nazwa.php

Dla tagów można stworzyć osobną stronę dla wszystkich tagów tags.php -> content-tags.php lub dla każdego tagu osobno tags-nazwa.php

Hierarchia plików katalogu produktów:
Katalog główny - product-adder.php 
Pojedynczy produkt - product-page.php