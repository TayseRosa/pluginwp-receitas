jQuery(function() {
    jQuery('#receita_voto').bind('rated', function() {
        jQuery(this).rateit('readonly', true);
        var id = jQuery(this).attr('data-id');
        var voto = jQuery(this).rateit('value');
        jQuery.ajax({
            type: 'POST',
            url: receita_obj.ajax_url,
            data: { action: 'br_voto_receita', id: id, voto: voto },
            sucess: function(data) {}
        });
    })
    jQuery('#receitas_criador').on('submit', function(e) {
        e.preventDefault();
        jQuery('#receitas_criador_submit').hide();
        jQuery('#receitas_criador_avisos').html('Carregando...');
        var form = {
            action: 'br_receitas_submit',
            title: jQuery('#receitas_title').val(),
            content: tinymce.activeEditor.getContent(),
            ingredientes: jQuery('#receitas_ingredientes').val(),
            tempo: jQuery('#receitas_tempo').val(),
            utensilios: jQuery('#receitas_utensilios').val(),
            dificuldade: jQuery('#receitas_dificuldade').val(),
            tipo: jQuery('#receitas_tipo').val()
        };
        jQuery.ajax({
            type: 'POST',
            url: receita_obj.ajax_url,
            data: form,
            dataType: 'json',
            success: function(json) {
                if (json.status == 2) {
                    jQuery('#receitas_criador_avisos').html('Receita enviada com sucesso!');
                } else {
                    jQuery('#receitas_criador_avisos').html('Não foi possivel! Tente novamente mais tarde!');
                    jQuery('#receitas_criador_submit').show();
                }
            }
        });
    });
});