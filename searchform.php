<!-- <form role="search" method="get" class="search-form form-inline my-2 my-lg-0" action="<?php echo home_url( '/' ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input type="search" class="search-field form-control mr-sm-2"
            placeholder="<?php echo esc_attr_x( 'Buscar', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
    <input type="submit" class="search-submit btn btn-outline-success my-2 my-sm-0" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form> -->

<form class="form-inline my-2 my-lg-0" role="search" method="get" id="searchform" action="<?php bloginfo('siteurl'); ?>">
  <div>
    <label class="screen-reader-text" for="s"></label>
    <input class="form-control mr-sm-2"	type="text" name="s" id="s" value="<?php echo get_search_query(); ?>" />
    <?php wp_dropdown_categories( 'show_option_all=All Categories' ); ?>
    <button type="submit" id="searchsubmit" class="btn btn-outline-success my-2 my-sm-0">Buscar</button>
  </div>
</form>