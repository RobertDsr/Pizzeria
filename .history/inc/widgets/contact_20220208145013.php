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
        foreach($this->contactDetails as $key => $contactName) {
            ?>
                <li>
                    <?= $contactName ?>: <?= $instance[$key] ?>
                </li>
            <?php
        }
        echo '</ul>';
    }

    public function form($instance) {
        if (isset($instance['title'])) $title = $instance['title'];
        else $title = 'Dane kontaktowe';

        foreach ($this->contactDetails as $key => $contactName) {
            if(isset($instance[$key])) $$key = $instance[$key];
            else $$key = '08:00 - 22:30';
        }

        ?>

        <div>
            <label for="<?= $this->get_field_name('title') ?>">Tytuł</label>
            <input class="widefat" id="<?= $this->get_field_name('title') ?>" name="<?= $this->get_field_name('title') ?>"  type="text" value="<?= esc_attr($title) ?>">
        </div>
        <?php

        foreach($this->daysOfWeek as $key => $dayName) {
            ?>
            <label for="<?= $this->get_field_name($key) ?>"><?= $dayName ?></label>
            <input class="widefat" id="<?= $this->get_field_name($key) ?>" name="<?= $this->get_field_name($key) ?>"  type="text" value="<?= esc_attr($$key) ?>">

            <?php
        }
    }
}