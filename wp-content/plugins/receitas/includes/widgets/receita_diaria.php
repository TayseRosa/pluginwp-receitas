<?php

class Br_Receita_Do_Dia_Widget extends WP_Widget{
    //1º - Método construtor
    public function __construct()
    {
        $options = array(
            'description' => 'Mostra uma receita nova por dia'
        );

        parent::__construct('br_receita_do_dia', 'Receita do dia', $options);
    }

    //2º - Método formulario
    public function form($instance)
    {
        $default = array(
            'title'=>'Receita do dia'
        );
        $instance = wp_parse_args($instance, $default);

        $title_id = $this->get_field_id('title');
        $title_name = $this->get_field_name('title');
        $title_value = esc_attr($instance['title']);
        
        ?>
        <p>
            <label for="<?php echo $title_id; ?>">Título</label>
            <input type="text" class="widefat" id="<?php echo $title_id; ?>" name="<?php echo $title_name; ?>" value="<?php echo $title_value; ?>" />
        </p>
        <?php
    }
    //3º - Método atualizar
    public function update($new_instance, $old_instance)
    {
        $array = array(
            'title'=> strip_tags($new_instance['title'])
        );

        return $array;
    }
    //4º - Método 
    public function widget($args, $instance)
    {
        extract($args);
        extract($instance);

        $title = apply_filters('widget_title', $title);

        echo $before_widget;
        echo $before_title;
        echo $title;
        echo $after_title;

        $receita_id = get_transient('br_receita_diaria');
        
        ?>
            <a href="<?php echo the_permalink($receita_id); ?>">
            
                <?php echo get_the_post_thumbnail($receita_id); ?>
                
                <?php echo get_the_title($receita_id); ?>

            </a>
        <?php
        echo $after_widget;
    }
}