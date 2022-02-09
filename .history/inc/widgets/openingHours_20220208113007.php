<?php

namespace thissite\theme\widgets;

class openingHours extends \WP_Widget {
    public $daysOfWeek;

    public function __construct() {
        $this->daysOfWeek = [
            'mon' => 'Poniedziałek',
            'tue' => 'Wtorek',
            'wed' => 'Środa'
        ]
    }

    public function widget($args, $instance) {

    }

    public function form($instance) {

    }

    public function update($new_instance, $old_instance)
    {
        
    }
}