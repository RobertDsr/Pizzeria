<?php

namespace thissite\theme\widgets;

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

        foreach ($this->days)
    }

    public function update($new_instance, $old_instance)
    {
        
    }
}