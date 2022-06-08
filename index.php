<?php
/*
Plugin Name:  firsttheme Shortcodes
Plugin URI:
Description:  Adding Shortcode for firsttheme
Version:      1.0.0
Author:       Ahmad Raza
Author URI:   http://ahmadraza.ga/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  shortcodes-firsttheme
Domain Path:  /languages
 */

if (!defined('WPINC')) {
    die;
}

include_once 'includes/enqueue-assets.php';
include_once 'includes/shortcodes/button/button.php';
