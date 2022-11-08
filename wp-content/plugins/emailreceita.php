<?php
/*
Plugin Name: Receita email voto
Description: Esse plugin complementa o plugin receitas
*/
function brev_receita_voto($array){
    $post = get_post( $array['post_id'] );
    $email = get_the_author_meta('user_email', $post->post_author);

    $assunto = 'Você recebeu um novo voto na sua receita';
    $mensagem = 'Sua receita '.$post->post_title.' recebeu um novo voto de '.$array['voto'].' estrelas.';

    //Envio de email
    wp_mail($email, $assunto, $mensagem);

    echo 'Email Receita funcionou!';
}

add_action('receita_voto', 'brev_receita_voto');