<?php
function br_receitas_init(){

    $labels = array(
        'name' => 'Receitas',
        'singular_name' => 'Receita',
        'menu_name' => 'Receitas',
        'name_admin_bar'=>'Receita',
        'add_new'=>'Adicionar nova',
        'add_new_item'=>'Adicionar nova receita',
        'new_item'=>'Nova receita',
        'edit_item'=>'Editar receita',
        'view_item'=>'Visualizar receita',
        'all_item'=>'Todas as receitas',
        'search_items'=>'Procurar receita',
        'parent_item_colon'=>'Receiras Filhas:',
        'not_found'=>'Nennhuma receita encontrada',
        'not_found_in_trash'=>'Nennhuma receita encontrada na lixeira',
    );

    $array = array(
        'labels' => $labels,
        'description'=>'Um tipo de consteúdo para receitas',
        'public'=>true,
        'publicly_queryable'=>true,
        'query_var'=>true,
        'show_ui'=>true,
        'show_in_menu'=>true,
        'rewrite'=>array('slug'=>'receita'),
        'capability_type'=>'post',
        'has_archieve'=>true,
        'hierarchical'=>false,
        'menu_position'=>5,
        'supports'=>array(
            'title',
            'editor',
            'author',
            'thumbnail'
        )
    );

    register_post_type('receita', $array);

}