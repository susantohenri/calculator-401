<?php
/*
Plugin Name: 401k Calculator
Version: 1.0.0
License: GPL2
*/

function calculator_401k()
{
    ob_start();
    wp_enqueue_style('calculator-401k', plugins_url('calculator-401k.css', __FILE__), [], '1.0.0');

    include(plugin_dir_path(__FILE__) . 'calculator-401k.tpl.php');
    echo do_shortcode('[calx]');

    wp_register_script('chart', plugin_dir_url(__FILE__) . 'chart.umd.min.js');
    wp_enqueue_script('chart');

    wp_enqueue_script('calculator-401k', plugins_url('calculator-401k.js', __FILE__), array('jquery', 'chart'), '1.0.0', true);

    return ob_get_clean();
}
add_shortcode('calculator-401k', 'calculator_401k');
