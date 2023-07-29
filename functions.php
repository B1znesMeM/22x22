
<?php
    add_action( 'wp_enqueue_scripts', function() {
        wp_enqueue_style('22x22-reset' , get_template_directory_uri() . '/assets/styles/22x22-reset.css');
        wp_enqueue_style('22x22-style' , get_template_directory_uri() . '/assets/styles/22x22-style.css');

        wp_enqueue_script('22x22-script', get_template_directory_uri() . '/assets/js/22x22-script.js', array(), null, true );
    });

    add_theme_support('post_thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');