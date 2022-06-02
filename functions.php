<?php

function projektasej_register_styles()
{
    wp_enqueue_style('projektasej-fancy', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), false, 'all');
    wp_enqueue_style('projektasej-owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), false, 'all');
    wp_enqueue_style('projektasej-owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), false, 'all');
    wp_enqueue_style('projektasej-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css", array(), null, 'all');
    wp_enqueue_style('projektasej-fontawesome', "https://use.fontawesome.com/releases/v5.1.0/css/all.css", array(), null, 'all');
    wp_enqueue_style('projektasej-styles', get_template_directory_uri() . '/assets/css/style.css?v=' . time(), array(), false, 'all');

}

add_action('wp_enqueue_scripts', 'projektasej_register_styles');


function projektasej_register_scripts()
{
    wp_enqueue_script('projektasej-owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js' , null, false, true);
    wp_enqueue_script('projektasej-fancy', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js' , null, false, true);
    wp_enqueue_script('projektasej-scroll', get_template_directory_uri() . '/assets/js/scrollIt.min.js' , null, false, true);
    wp_enqueue_script('projektasej-isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js' , null, false, true);
    wp_enqueue_script('projektasej-jquery', "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js", null, null, false, true);
    wp_enqueue_script('projektasej-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js", null, null, false, true);
}

add_action('wp_enqueue_scripts', 'projektasej_register_scripts');