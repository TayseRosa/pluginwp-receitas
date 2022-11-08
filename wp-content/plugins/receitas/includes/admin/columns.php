<?php

function br_receita_columns($columns){
    $new_columns = array(
        'cb' => '<input type="checkbox>',
        'title'=>'Titulo',
        'count'=>'Qt. de Votos',
        'average'=>'Média',
        'author'=>'Autor',
        'date'=>'Data',
    );

    return $new_columns;
}

function br_manage_receita_columns($column, $post_id){
    $receita_data = get_post_meta($post_id, 'receita_data', true);

    if($column == 'count'){
        echo $receita_data['contagem'];
        return;
    }

    if($column == 'average'){
        echo number_format($receita_data['media'], 1);
        return;
    }

}