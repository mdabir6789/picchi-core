<?php

/**
 * Plugin Name: Picchi Core
 * Description: Picchi Core Addons for Picchi Theme.
 * Version:     1.0.0
 * Author:      Abir
 * Author URI:  https://github.com/mdabir6789
 * Text Domain: picchi-core
 *
 * Requires Plugins: elementor
 * Elementor tested up to: 3.25.0
 * Elementor Pro tested up to: 3.25.0
 */

function register_picchi_core_widget($widgets_manager)
{

    require_once(__DIR__ . '/widgets/hello-world-widget-1.php');
    require_once(__DIR__ . '/widgets/hello-world-widget-2.php');

    // $widgets_manager->register(new \Elementor_Hello_World_Widget_1());
}
add_action('elementor/widgets/register', 'register_picchi_core_widget');
