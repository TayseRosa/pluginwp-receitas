<?php
/* 
Plugin Name: Teste para Hooks
Description: Um plugin de teste para hooks
Version:1.0
Author: Tayse Rosa
Author URI: https://www.wpdev.net.br
Text Domain: teste
 */

 function bt_title( $title ){
    return '[*** titulo alterado ***]'. $title;
 }

 function bt_head(){
    do_action('bt_personalizado');
 }

 function bt_personalizado(){
    echo 'HOOK ACIONADO';
 }

 add_filter('the_title', 'bt_title');

 add_action('bt_personalizado', 'bt_personalizado');
 add_action('wp_head', 'bt_head');