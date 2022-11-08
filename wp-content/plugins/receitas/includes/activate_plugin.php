<?php
function br_activate_plugin(){

    //Verifica a versao do WP
    if(version_compare(get_bloginfo('version'), '4.5', '<')){
        wp_die(__('Você precisa atualizar o Wordpress para no minimo a versão 4.5'));
    }

    //Criar banco de dados
    global $wpdb;
    $table = $wpdb->prefix . 'receita_votos';
    $wpdb_collate = $wpdb->collate;

    $sql = "CREATE TABLE {$table}(
        ID BIGINT(20) NOT NULL AUTO_INCREMENT,
        receita_id BIGINT(20) NOT NULL,
        voto TINYINT(1) NOT NULL,
        user_ip VARCHAR(32) NOT NULL,
        PRIMARY KEY (ID))COLLATE {$wpdb_collate}";

        require_once ABSPATH.'wp-admin/includes/upgrade.php';
        dbDelta( $sql );

    //Cronjobs do wordpress
    wp_schedule_event( time(), 'daily', 'br_receita_diaria_hook' );
}