<?php 


//Images destacadas (dos posts)
add_theme_support( 'post-thumbnails' );

// pegar o arquivo marca header
require get_template_directory() . '/src/inc/marca.php';

// pegar o arquivo metabox.php
require get_template_directory() . '/src/inc/metabox.php';

// Registrar Navigation Walker
require_once('src/inc/wp_bootstrap_navwalker.php');
register_nav_menus( array(
    'primary' => __( 'menuPrincipal', 'Menu principal' ),
) );

// Menu Categorias
register_nav_menus( array(
    'secondary' => __( 'Footer', 'Categorias principais' ),
) );
register_nav_menus( array(
    'sidebarProdutos' => __( 'sidebarProdutos', 'Todas categorias' ),
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
    register_sidebar(array(
        'name' =>  __( 'Footer Copyright' ),
        'id' => 'sidebar-footer-copyright',
        'description' => __( 'Copyright footer.' ),
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


// Post relacionados por tags | http://wpmidia.com.br/laboratorio/listando-posts-relacionados-por-tags-sem-usar-plugins/
function show_related_posts_by_tag(){
        global $post;
 
    $tags = wp_get_post_tags($post->ID); 
    if ($tags) { 
        $tag_ids = array(); 
        foreach($tags as $individual_tag) 
            $tag_ids[] = $individual_tag->term_id; 
 
        $args=array( 
            'tag__in' => $tag_ids, 
            'post__not_in' => array($post->ID), 
            'posts_per_page' => 6 // Number of related posts that will be shown.
        ); 
        $my_query = new wp_query($args); 
        if( $my_query->have_posts() ) { 
 
            echo '<div class="col-12 produtosRelacionadosTitle"><h3>Produtos relacionados</h3></div>'; 
            echo '<div class="col-12"><div class="row"><div class="card-deck d-flex justify-content-between">';
 
            while ($my_query->have_posts()) { 
                $my_query->the_post(); ?>                                 
                    <div class="col-lg-2">
                        <a href="<?php the_permalink(); ?>">
                            <div class="card">
                                <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">                        
                                <div class="card-block">
                                    <h4 class="card-title"><?php the_title(); ?></h4>
                                    <p class="card-text"><?php echo rwmb_meta('subtitulo'); ?></p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted"><?php echo rwmb_meta('resumo'); ?></small>
                                </div>
                            </div>
                        </a>
                    </div>
            <?php } 
            echo '</div></div></div>'; 
            wp_reset_query(); //reseting custom query...
        } 
    } 
}

?>
