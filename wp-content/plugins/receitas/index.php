<?php
/* 
Plugin Name: Receitas WP
Description: Um simples plugin para add receitas
Version:1.0
Author: Tayse Rosa
Author URI: https://www.wpdev.net.br
Text Domain: receitas
 */

if(!function_exists('add_action')){
    echo __('Hi there!  I\'m just a plugin, not much I can do when called directly.');
    exit;
}

 //Setup
define('RECEITA_PLUGIN_URL', __FILE__);

 //Includes
include('includes/br_activate_plugin.php');
include('includes/init.php');
include('includes/admin/admin_init.php');
include('includes/filter-content.php');

 //Hooks
register_activation_hook(RECEITA_PLUGIN_URL, 'br_activate_plugin');
add_action('init', 'br_receitas_init');
add_action('admin_init', 'br_receitas_admin_init');
add_action('save_post_receita', 'br_save_post_admin', 10, 3);

add_filter('the_content', 'br_filter_receita_content');

 //Shortcodes
 
