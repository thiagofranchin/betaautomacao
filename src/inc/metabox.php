<?php 
    
    add_filter( 'rwmb_meta_boxes', 'your_prefix_meta_boxes' );
    function your_prefix_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'Informações adicionais', 'textdomain' ),
        'post_types' => 'post',
        'fields'     => array(
            array(
                'id'   => 'subtitulo',
                'name' => __( 'Subtítulo', 'textdomain' ),
                'type' => 'text',
            ),
            array(
                'id'   => 'resumo',
                'name' => __( 'Resumo', 'textdomain' ),
                'type' => 'textarea',
            ),
            // OEMBED Vídeos
            array(
                'name' => esc_html__( 'Vídeo do Youtube', 'your-prefix' ),
                'id'   => "{$prefix}oembed",
                'desc' => esc_html__( 'URL do Vídeo', 'your-prefix' ),
                'type' => 'oembed',
            ),
            // Detalhes do produto
            array(
                'id'   => 'detalhes',
                'name' => __( 'Detalhes', 'textdomain' ),
                'type' => 'textarea',
            ),
             array(
                'id'   => 'info-tecnicas',
                'name' => __( 'Informações técnicas', 'textdomain' ),
                'type' => 'textarea',
            ),
            array(
                'id'   => 'link-folder-comercial',
                'name' => __( 'Link folder comercial', 'textdomain' ),
                'type' => 'textarea',
            ),
             // Galeria de fotos da página single.php abaixo da imagem destacada
            array(
                'id'   => 'foto1',
                'name' => __( 'Foto 1 link', 'textdomain' ),
                'type' => 'textarea',
            ),
             array(
                'id'   => 'foto2',
                'name' => __( 'Foto 2 link', 'textdomain' ),
                'type' => 'textarea',
            ),
            array(
                'id'   => 'foto3',
                'name' => __( 'Foto 3 link', 'textdomain' ),
                'type' => 'textarea',
            ),
        ),
    );
    return $meta_boxes;
    }

?>