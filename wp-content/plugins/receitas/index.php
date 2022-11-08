<?php
/* 
Plugin Name: Receitas WP
Description: Plugin para adicionar novas receitas e votar nelas.
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
include('includes/activate_plugin.php');
include('includes/init.php');
include('includes/admin/admin_init.php');
include('includes/filter-content.php');
include('includes/enqueue.php');
include('includes/voto-receita.php');
include(dirname(RECEITA_PLUGIN_URL).'/includes/widgets.php');
include('includes/widgets/receita_diaria.php');
include('includes/cron.php');
include('includes/deactivate.php');
include('includes/shortcodes/receitas-criador.php');
include('includes/receita-auth.php');
include('includes/receita-submit.php');

 //Hooks
register_activation_hook(RECEITA_PLUGIN_URL, 'br_activate_plugin');
register_deactivation_hook(RECEITA_PLUGIN_URL, 'br_deactivate_plugin');

add_action('init', 'br_receitas_init');
add_action('admin_init', 'br_receitas_admin_init');
add_action('save_post_receita', 'br_save_post_admin', 10,3);
add_action('wp_enqueue_scripts', 'br_enqueue_scripts',100);
add_action('widgets_init', 'br_widgets_init');
add_action('br_receita_diaria_hook', 'br_gerar_receita_diaria');

add_filter('the_content', 'br_filter_receita_content');

//Ajax
add_action('wp_ajax_br_voto_receita', 'br_voto_receita');
add_action('wp_ajax_nopriv_br_voto_receita', 'br_voto_receita');
add_action('wp_ajax_br_receitas_submit', 'br_receitas_submit');
add_action('wp_ajax_nopriv_br_receitas_submit', 'br_receitas_submit');

 //Shortcodes
 add_shortcode('receitas_criador', 'br_receitas_criador_shortcode');
 add_shortcode('receitas_auth_form', 'br_receitas_auth_form_shortcode');