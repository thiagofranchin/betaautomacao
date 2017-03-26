<?php 

//Images destacadas (dos posts)
add_theme_support( 'post-thumbnails' );

// pegar o arquivo marca header
require get_template_directory() . '/inc/marca.php';

// pegar o arquivo metabox.php
require get_template_directory() . '/inc/metabox.php';

// Registrar Navigation Walker
require_once('inc/wp_bootstrap_navwalker.php');
register_nav_menus( array(
    'primary' => __( 'Menu Principal', 'fktheme' ),
) );



if ( function_exists('register_sidebar') )
{
	register_sidebar(array(
        'name' =>  __( 'Minha Conta' ),
        'id' => 'sidebar-login',
        'description' => __( 'Formulário de login para o painel admin' ),
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
    register_sidebar(array(
        'name' =>  __( 'Header Right' ),
        'id' => 'sidebar-header-right',
        'description' => __( 'Informações no header right.' ),
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );         
    register_sidebar(array(
        'name' =>  __( 'Header Left' ),
        'id' => 'sidebar-header-left',
        'description' => __( 'Informações no header left.' ),
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );
    register_sidebar(array(
        'name' =>  __( 'Footer Left' ),
        'id' => 'sidebar-footer-left',
        'description' => __( 'Informações no footer left.' ),
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );
    register_sidebar(array(
        'name' =>  __( 'Footer right' ),
        'id' => 'sidebar-footer-right',
        'description' => __( 'Informações no footer right.' ),
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );
    register_sidebar(array(
        'name' =>  __( 'Footer Middle' ),
        'id' => 'sidebar-footer-middle',
        'description' => __( 'Informações no footer middle.' ),
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );
}

// Paginação Wordpress
function wordpress_pagination() {
            global $wp_query;
 
            $big = 999999999;
 
            echo paginate_links( array(
                  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                  'format' => '?paged=%#%',
                  'current' => max( 1, get_query_var('paged') ),
                  'total' => $wp_query->max_num_pages
            ) );
      }

?>