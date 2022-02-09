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
        $title = apply_filters( 'widget_title', $instance['title'] );

        echo $args['before_widget'];

        if(!empty($title)) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        echo '<ul>';
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
        if (isset($instance['title'])) $title = $instance['title'];
        else $title = 'Dane kontaktowe';

        foreach ($this->contactDetails as $key => $contactName) {
            if(isset($instance[$key])) $$key = $instance[$key];
            else $$key = 'wpisz dane';
        }

        ?>

        <div>
            <label for="<?= $this->get_field_name('title') ?>">Tytuł</label>
            <input class="widefat" id="<?= $this->get_field_name('title') ?>" name="<?= $this->get_field_name('title') ?>"  type="text" value="<?= esc_attr($title) ?>">
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

        foreach($this->con as $key => $dayName) {
            $instance[$key] = !empty($new_instance[$key]) ? strip_tags($new_instance[$key], '<b><br><i>') : '';
        }

        return $instance;
    }
}