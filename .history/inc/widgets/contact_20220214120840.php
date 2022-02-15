<?php

namespace ThisSite\Theme\Widgets;

class contact extends \WP_Widget {
    public $contactDetails;

    public function __construct() {
        $this->contactDetails = [
            'com' => 'Nazwa firmy',
            'cit' => 'Kod i miejscowość',
            'str' => 'Ulica i numer',
            'tel' => 'Numer telefonu',
            // 'mai' => 'Adres email'
        ];

        this->emailDetails = [
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
        $titleContact = apply_filters( 'widget_title', $instance['title'] );

        echo $args['before_widget'];

        if(!empty($titleContact)) {
            echo $args['before_title'] . $titleContact . $args['after_title'];
        }

        echo '<ul>';
        foreach($emailDetails as $key) {
            ?>
                <li>
                    <?= $instance[$key] ?>
                </li>
            <?php
        }

        foreach($this->contactDetails as $key => $contactName) {
            ?>
                <li>
                    <?= $instance[$key] ?>
                </li>
            <?php
        }
        
        echo '</ul>';
    }

    public function form($instance) {
        if (isset($instance['title'])) $titleContact = $instance['title'];
        else $titleContact = 'Dane kontaktowe';

        foreach ($this->contactDetails as $key => $contactName) {
            if(isset($instance[$key])) $$key = $instance[$key];
            else $$key = 'wpisz dane';
        }

        ?>

        <div>
            <label for="<?= $this->get_field_name('title') ?>">Tytuł</label>
            <input class="widefat" id="<?= $this->get_field_name('title') ?>" name="<?= $this->get_field_name('title') ?>"  type="text" value="<?= esc_attr($titleContact) ?>">
        </div>

        <div class="email">
            <label for="email">Adres email</label>
            <input type="email" placeholder="Wpisz dane">
        </div>
        <?php

        foreach($this->contactDetails as $key => $contactName) {
            ?>
            <label for="<?= $this->get_field_name($key) ?>"><?= $contactName ?></label>
            <input class="widefat" id="<?= $this->get_field_name($key) ?>" name="<?= $this->get_field_name($key) ?>"  type="text" value="<?= esc_attr($$key) ?>">

            <?php
        }
    }

    public function update($new_instance, $old_instance)
    {
        $instance = [];

        $instance['title'] = !empty($new_instance['title']) ? strip_tags($new_instance['title']) : '';

        foreach($this->contactDetails as $key => $contactName) {
            $instance[$key] = !empty($new_instance[$key]) ? strip_tags($new_instance[$key], '<b><br><i>') : '';
        }

        return $instance;
    }
}