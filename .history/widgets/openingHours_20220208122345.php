<?php

namespace incthissite\widgets\;

class openingHours extends \WP_Widget {
    public $daysOfWeek;

    public function __construct() {
        $this->daysOfWeek = [
            'mon' => 'Poniedziałek',
            'tue' => 'Wtorek',
            'wed' => 'Środa',
            'thu' => 'Czwartek',
            'fri' => 'Piątek',
            'sat' => 'Sobota',
            'sun' => 'Niedziela'
        ];

        parent::__construct(
            'opening_hours',
            'Godziny otwarcia',
            [
                'classname' => 'thissite-opening-hours-widget',
                'description' => 'Widget pokazuje godziny otwarcia'
            ]
            );
    }

    public function widget($args, $instance) {
        $title = apply_filters( 'widget_title', $instance['title'] );

        echo $args['before_widget'];

        if(! empty($title)) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        echo '<ul>';
        foreach($this->daysOfWeek as $key => $dayName) {
            ?>
                <li>
                    <?= $dayName ?>: <?= $instance[$key] ?>
                </li>
            <?php
        }
        echo '</ul>';
    }

    public function form($instance) {
        if (isset($instance['title'])) $title = $instance['title'];
        else $title = 'Godziny otwarcia';

        foreach ($this->daysOfWeek as $key => $dayName) {
            if(isset($instance[$key])) $$key = $instance[$key];
            else $$key = '08:00 - 22:30';
        }

        ?>

        <div>
            <label for="<?= $this->get_field_name('title') ?>">Tytuł</label>
            <input class="widefat" id="<?= $this->get_field_name('title') ?>" name="<?= $this->get_field_name('title') ?>"  type="text" value="<?= esc_attr($value) ?>">
        </div>
        <?php
    }

    public function update($new_instance, $old_instance)
    {
        
    }
}