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

 //Hello Abir
function register_picchi_widgets($widgets_manager)
{

    require_once(__DIR__ . '/widgets/picchi-hero-widget.php');

    $widgets_manager->register(new \Picchi_Hero_Widget());
}
add_action('elementor/widgets/register', 'register_picchi_widgets');


function add_elementor_widget_categories($elements_manager)
{
    $elements_manager->add_category(
        'picchi-category',
        [
            'title' => esc_html__('Picchi', 'picchi-core'),
            'icon' => 'fa fa-plug',
        ]
    );
}
add_action('elementor/elements/categories_registered', 'add_elementor_widget_categories');



// Registering Widget Styles
function picchi_core_register_widget_styles()
{
    wp_register_style('picchi-core-style', plugins_url('assets/css/style.css', __FILE__));
    wp_enqueue_style('picchi-core-style');
}
add_action('wp_enqueue_scripts', 'picchi_core_register_widget_styles');
