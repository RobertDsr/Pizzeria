<?php

namespace ThisSite\Theme\Widgets;

class contact extends \WP_Widget {
    public $contactDetails;

    public function __construct()
    {
        $this->$contactDetails = [
            'com' => 'Nazwa firmy',
            'cit' => 'Kod i miejscowość'
        ]
    }
}