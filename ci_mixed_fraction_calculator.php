<?php
/*
Plugin Name: CI Mixed fraction calculator
Plugin URI: https://www.calculator.io/mixed-fraction-calculator/
Description: Mixed number to improper fraction calculator to convert mixed numbers, consisting of a whole number and a proper fraction, to improper fractions.
Version: 1.0.0
Author: Mixed Fraction Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_mixed_fraction_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Mixed Fraction Calculator by www.calculator.io";

function display_calcio_ci_mixed_fraction_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Mixed Fraction Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_mixed_fraction_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_mixed_fraction_calculator', 'display_calcio_ci_mixed_fraction_calculator' );