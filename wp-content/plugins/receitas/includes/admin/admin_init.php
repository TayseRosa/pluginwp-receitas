<?php
include 'metabox_br_receita_opcoes.php';
include 'enqueue.php';

function br_receitas_admin_init(){
    add_action('add_meta_boxes_receita', 'br_receitas_metaboxes');
    add_action('admin_enqueue_scripts','br_admin_enqueue');
}

function br_receitas_metaboxes(){
    add_meta_box(
        'br_receita_opcoes',
        __('Opções da Receita', 'receitas'),
        'br_receita_opcoes',
        'receita',
        'normal',
        // 'high'
    );
}

function br_save_post_admin( $post_id, $post, $update ){
    if(!$update){
        return;
    }

    $receita_data = array(
        'ingredientes'=>$_POST['br_ingredientes'],
        'tempo'=>$_POST['br_tempo'],
        'utensilios'=>$_POST['br_utensilios'],
        'dificuldade'=>$_POST['br_dificuldade'],
        'tipo'=>$_POST['br_tipo'],
    );

    update_post_meta($post_id, 'receita_data', $receita_data);

}