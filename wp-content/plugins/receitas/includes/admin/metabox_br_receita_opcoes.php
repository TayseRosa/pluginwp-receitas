<?php
function br_receita_opcoes($post){
    //Busca os dados gravados no formulario.
    $receita_data = get_post_meta($post->ID, 'receita_data', true);

    if(empty($receita_data)){
        $receita_data = array(
            'ingredientes'=>'',
            'tempo'=>'',
            'utensilios'=>'',
            'dificuldade'=>'0',
            'tipo'=>'',
        );
    }

    ?>
    <!-- <h1 class="meu-estilo">Olá mundo!</h1> -->
    <h2>Ingredientes</h2>
    <input type="text" name="br_ingredientes" value="<?php echo $receita_data['ingredientes']; ?>" / >

    <h2>Tempo da receita:</h2>
    <input type="text" name="br_tempo" value="<?php echo $receita_data['tempo']; ?>"/>

    <h2>Utensílios:</h2>
    <input type="text" name="br_utensilios" value="<?php echo $receita_data['utensilios']; ?>"/>

    <h2>Nível de dificuldade:</h2>
    <select name="br_dificuldade" id="">
        <option value="0" <?php echo ( $receita_data['dificuldade'] == '0' ) ? 'selected="selected"' : '' ?> > Iniciante </option>
        <option value="1" <?php echo ( $receita_data['dificuldade'] == '1' ) ? 'selected="selected"' : '' ?> > Intermediário </option>
        <option value="2" <?php echo ( $receita_data['dificuldade'] == '2' ) ? 'selected="selected"' : '' ?> > Avançado </option>
    </select>

    <br> <br>

    <h2>Tipo da receita:</h2>
    <input type="text" name="br_tipo" value="<?php echo $receita_data['tipo'] ?>">

    <?php
}