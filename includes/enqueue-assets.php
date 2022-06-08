<?php

function firsttheme_admin_shortcodes_scripts()
{

    wp_enqueue_script('firsttheme-wp-shortcodes-scripts', plugins_url('newtheme-metaboxes/dist/assets/js/bundle.js'), array('jquery'), '1.0.0', true);

    wp_enqueue_style('firsttheme-wp-shortcodes-stylesheet', plugins_url('newtheme-metaboxes/dist/assets/css/bundle.css'), array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'firsttheme_admin_shortcodes_scripts');
