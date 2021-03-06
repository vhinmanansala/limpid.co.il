<?php

namespace App;

use WP_Query;
use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function latestArticles()
    {
        return get_field('latest_p','options');
    }

    public function services()
    {
        $args = array('post_type' => 'cncpt', 'posts_per_page' => -1);
        return new WP_Query($args);
    }

    public function customers()
    {
        $args = array('cat' => 14, 'posts_per_page' => -1);
        return new WP_Query($args);
    }

    public function testimonials()
    {
        $args = array('post_type' => 'testimonial', 'posts_per_page' => -1);
        return new WP_Query($args);
    }

    public function projects()
    {
        return get_field('works', 'options');
    }

    public function map()
    {
        return get_field('map', 'options');
    }
}
