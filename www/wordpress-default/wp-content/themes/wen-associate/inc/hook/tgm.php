<?php

add_action( 'tgmpa_register', 'wen_associate_recommended_plugins' );

if( ! function_exists( 'wen_associate_recommended_plugins' ) ) :

  /**
   * Recommended plugins
   *
   * @since  WEN Associate 1.0
   */
  function wen_associate_recommended_plugins(){

    $plugins = array(
      array(
        'name'     => __( 'WP-PageNavi', 'wen-associate' ),
        'slug'     => 'wp-pagenavi',
        'required' => false,
      ),
      array(
        'name'     => __( 'Breadcrumb NavXT', 'wen-associate' ),
        'slug'     => 'breadcrumb-navxt',
        'required' => false,
      ),
    );
    $config = array(
      'dismissable' => true,
    );
    tgmpa( $plugins, $config );

  }

endif;
