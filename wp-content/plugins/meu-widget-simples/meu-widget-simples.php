<?php
/*
Plugin Name: Meu Widget Simples
Plugin URI: https://example.com/meu-widget-simples
Description: Um plugin simples que adiciona um widget com uma mensagem personalizada.
Version: 1.0
Author: Adeilson Silva
Author URI: https://example.com
License: GPL2
*/

class Meu_Widget_Simples extends WP_Widget {

    // Construtor do widget
    function __construct() {
        parent::__construct(
            'meu_widget_simples', // ID do widget
            __('Meu Widget Simples', 'meu_widget_simples_domain'), // Nome do widget
            array('description' => __('Um widget simples que exibe uma mensagem', 'meu_widget_simples_domain')) // Descrição
        );
    }

    // Função para exibir o widget no frontend
    public function widget($args, $instance) {
        $titulo = apply_filters('widget_title', $instance['titulo']);
        $mensagem = $instance['mensagem'];

        echo $args['before_widget'];
        if (!empty($titulo)) {
            echo $args['before_title'] . $titulo . $args['after_title'];
        }
        echo "<p>$mensagem</p>";
        echo $args['after_widget'];
    }

    // Função para salvar as opções do widget no backend
    public function form($instance) {
        $titulo = !empty($instance['titulo']) ? $instance['titulo'] : __('Título Padrão', 'meu_widget_simples_domain');
        $mensagem = !empty($instance['mensagem']) ? $instance['mensagem'] : __('Mensagem Padrão', 'meu_widget_simples_domain');
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('titulo'); ?>"><?php _e('Título:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('titulo'); ?>" name="<?php echo $this->get_field_name('titulo'); ?>" type="text" value="<?php echo esc_attr($titulo); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('mensagem'); ?>"><?php _e('Mensagem:'); ?></label>
            <textarea class="widefat" id="<?php echo $this->get_field_id('mensagem'); ?>" name="<?php echo $this->get_field_name('mensagem'); ?>"><?php echo esc_attr($mensagem); ?></textarea>
        </p>
        <?php
    }

    // Função para atualizar as opções do widget
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['titulo'] = (!empty($new_instance['titulo'])) ? strip_tags($new_instance['titulo']) : '';
        $instance['mensagem'] = (!empty($new_instance['mensagem'])) ? strip_tags($new_instance['mensagem']) : '';
        return $instance;
    }
}

// Registrar e carregar o widget
function meu_widget_simples_registrar() {
    register_widget('Meu_Widget_Simples');
}
add_action('widgets_init', 'meu_widget_simples_registrar');
