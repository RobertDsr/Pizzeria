<?php

namespace thissite\theme\widgets;

class openingHours extends \WP_Widget {
    public $daysOfWeek;

    public function __construct() {
        $this->daysOfWeek = [
            'mon'
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