<?php
/**
* Plugin Name: CsDev - Adozioni Script
* Description: Script per la pagina adozioni
* Version: 1.0
* Company: Forbidden Design
* Company URI: https://www.forbidden.design
* Author: Christian Sadik melik
* License: MIT
*/

/**
 * This function includes scripts js and custom styles
 */
function enqueue_custom_scripts(){

    
    if (is_singular('adozioni') == true || is_post_type_archive( 'adozioni' ) == true) {
        wp_enqueue_script('boostrap-min-jq', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
            wp_enqueue_script('boostrap-min-js', WP_PLUGIN_URL . '/adozioni/assets/js/bootstrap.min.js');
            wp_enqueue_style('boostrap-css', WP_PLUGIN_URL . '/adozioni/assets/css/bootstrap.css');
            wp_enqueue_style('boostrap-theme-css', WP_PLUGIN_URL . '/adozioni/assets/css/bootstrap-theme.css');
    }

    
    if( is_front_page() )
    {
        wp_enqueue_script('adozioni-js', WP_PLUGIN_URL . '/adozioni/assets/js/adozioni.js');
    }

};
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

?>