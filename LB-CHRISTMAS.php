<?php

/**
 * @package LB-Christmas
 * @version 1.0.0
 */
/*
Plugin Name: LB-Christmas
Plugin URI: https://localhost
Description: Ajouter de belles animations de noël sur votre site internet
Author: Louis Boulanger
Version: 1.0.0
Author URI: https://louis-boulanger.fr
*/

if ( !is_admin() ){
    // Add style and script
    wp_enqueue_script('christmas-js', plugin_dir_url(__FILE__) . 'assets/christmas-script.js', array(), null, true);
    wp_enqueue_style('christmas-css', plugin_dir_url(__FILE__) . '/assets/christmas-style.css', array(), '0.1.0', 'all');


    function christmas_light() {
        echo '
        <ul class="christmas-lightrope">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        ';
    }

    add_action('wp_head', 'christmas_light');

}
