<?php 


function onshop_loop_shop_per_page( $cols ) {
    $cols = 9;
    return $cols;
  }
  add_filter( 'loop_shop_per_page', 'onshop_loop_shop_per_page', 20 );
  function onshop_woo_shop_columns( $columns ) {
      return 3;
  }
  add_filter( 'loop_shop_columns', 'onshop_woo_shop_columns' );


  remove_filter('woocommerce_archive_description', 'woocommerce_product_archive_description', 10);

  add_action('woocommerce_after_main_content', function(){
    $shop_page_id=1453;//get_option('woocommerce_shop_page_id');
    $shop = get_post($shop_page_id);
    $content = $shop->post_content;

    ?><div class="container onshop-page-description"><?php echo apply_filters('the_content', $shop->post_content); ?></div><?php
  }, 11);