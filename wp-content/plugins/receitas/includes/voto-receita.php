<?php
function br_voto_receita(){
    // print_r($_POST);
    // die();

    //receita, voto, ip do usuario que votou
    global $wpdb;

    $array = array(
        'status'=>0
    );

    //Recebe os dados
    $post_id = absint($_POST['id']);
    $voto = floatval($_POST['voto']);
    $ip = $_SERVER['REMOTE_ADDR'];

    //Verifica se o mesmo usuario esta votando duas vezes pelo ip
    $qt = $wpdb->get_var("SELECT COUNT(*) FROM ".$wpdb->prefix."receita_votos WHERE receita_id=".$post_id." AND user_ip='".$ip."'");
    if($qt > 0){
        wp_send_json($array);
    }

    //Insere no banco de dados
    $wpdb->insert(
        //Tabela
        $wpdb->prefix.'receita_votos',
        //Campos que serão inseridos
        array(
            'receita_id'=>$post_id,
            'voto'=>$voto,
            'user_ip'=>$ip
        )
    );

    $receita_data = get_post_meta($post_id, 'receita_data', true);
    $receita_data['contagem']++;
    $receita_data['media'] = $wpdb->get_var("SELECT AVG(voto) FROM ".$wpdb->prefix."receita_votos");

    update_post_meta($post_id, 'receita_data', $receita_data);

    $array['status'] = 1;

    wp_send_json($array);
}