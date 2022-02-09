<?php

namespace ThisSite\Theme\Widgets;

class contact extends \WP_Widget {
    public $contactDetails;

    public function __construct()
    {
        $this->$contactDetails = [
            'com' => 'Nazwa firmy',
            'cit' => 'Kod i miejscowość',
            'str' => 'Ulica i numer',
            'tel' => 'Numer telefonu',
            'mai' => 'Adres email'
        ];

        parent::__construct(
            'contact_details',
            'Dane kontaktowe',
            [
                'classname' => 'thissite-contact-details-widget',
                'description' => 'Widget wyświetlający dane kontaktowe'
            ]
            );
    }

    public function widget($args, $instance) {
        echo '<ul>';
        foreach($this->contactDetails as $key => $) {
            ?>
                <li>
                    <?= $dayName ?>: <?= $instance[$key] ?>
                </li>
            <?php
        }
        echo '</ul>';
    }
}