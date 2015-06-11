<?php

add_filter( 'wen_associate_filter_default_theme_options', 'wen_associate_setting_default_options' );

/**
 * Settings defaults.
 *
 * @since  WEN Associate 1.0
 */
if( ! function_exists( 'wen_associate_setting_default_options' ) ):

  function wen_associate_setting_default_options( $input ){

    // Header
    $input['site_logo']          = '';
    $input['show_tagline']       = true;
    $input['social_in_header']   = false;
    $input['search_in_header']   = false;
    $input['header_layout']      = 'layout-1';

    // Icons
    $input['site_favicon']       = '';
    $input['site_web_clip_icon'] = '';

    // Layout
    $input['site_layout']            = 'fluid';
    $input['global_layout']          = 'right-sidebar';
    $input['archive_layout']         = 'excerpt';
    $input['single_image']           = 'large';
    $input['single_image_alignment'] = 'center';

    // Pagination
    $input['pagination_type'] = 'default';

    // Footer
    $input['copyright_text']                = __( 'Copyright. All rights reserved.', 'wen-associate' );
    $input['go_to_top']                     = true;

    // Blog
    $input['excerpt_length']       = 40;
    $input['read_more_text']       = __( 'Read More ...', 'wen-associate' );
    $input['exclude_categories']   = '';
    $input['author_bio_in_single'] = false;

    // Breadcrumb
    $input['breadcrumb_type']      = 'disabled';
    $input['breadcrumb_separator'] = '&gt;';

    return $input;
  }

endif;


add_filter( 'wen_associate_theme_options_args', 'wen_associate_setting_theme_options_args' );


/**
 * Add settings options.
 *
 * @since  WEN Associate 1.0
 */
if( ! function_exists( 'wen_associate_setting_theme_options_args' ) ):

  function wen_associate_setting_theme_options_args( $args ){

    // Header Section
    $args['panels']['theme_option_panel']['sections']['section_header'] = array(
      'title'    => __( 'Header', 'wen-associate' ),
      'priority' => 40,
      'fields'   => array(
        'header_layout' => array(
          'title'             => __( 'Layout', 'wen-associate' ),
          'type'              => 'radio-image',
          'choices'           => wen_associate_get_header_layout_options(),
          'sanitize_callback' => 'sanitize_key',
        ),
        'site_logo' => array(
          'title'             => __( 'Logo', 'wen-associate' ),
          'type'              => 'image',
          'sanitize_callback' => 'esc_url_raw',
        ),
        'show_tagline' => array(
          'title'   => __( 'Show Tagline', 'wen-associate' ),
          'type'    => 'checkbox',
        ),
        'social_in_header' => array(
          'title'   => __( 'Show Social Icons', 'wen-associate' ),
          'type'    => 'checkbox',
        ),
        'search_in_header' => array(
          'title'   => __( 'Show Search Icons', 'wen-associate' ),
          'type'    => 'checkbox',
        ),
      )
    );

    // Icons Section
    $args['panels']['theme_option_panel']['sections']['section_icons'] = array(
      'title'    => __( 'Icons', 'wen-associate' ),
      'priority' => 60,
      'fields'   => array(
        'site_favicon' => array(
          'title'             => __( 'Favicon', 'wen-associate' ),
          'type'              => 'image',
          'sanitize_callback' => 'esc_url_raw',
        ),
        'site_web_clip_icon' => array(
          'title'             => __( 'Web Clip Icon', 'wen-associate' ),
          'type'              => 'image',
          'sanitize_callback' => 'esc_url_raw',
        ),
      )
    );

    // Layout Section
    $args['panels']['theme_option_panel']['sections']['section_layout'] = array(
      'title'    => __( 'Layout', 'wen-associate' ),
      'priority' => 70,
      'fields'   => array(
        'site_layout' => array(
          'title'             => __( 'Site Layout', 'wen-associate' ),
          'type'              => 'select',
          'choices'           => wen_associate_get_site_layout_options(),
          'sanitize_callback' => 'sanitize_key',
        ),
        'global_layout' => array(
          'title'             => __( 'Global Layout', 'wen-associate' ),
          'type'              => 'select',
          'choices'           => wen_associate_get_global_layout_options(),
          'sanitize_callback' => 'sanitize_key',
        ),
        'archive_layout' => array(
          'title'             => __( 'Archive Layout', 'wen-associate' ),
          'type'              => 'select',
          'choices'           => wen_associate_get_archive_layout_options(),
          'sanitize_callback' => 'sanitize_key',
        ),
        'single_image' => array(
          'title'             => __( 'Image in Single Post/Page', 'wen-associate' ),
          'type'              => 'select',
          'choices'           => wen_associate_get_image_sizes_options(),
          'sanitize_callback' => 'sanitize_key',
        ),
        'single_image_alignment' => array(
          'title'             => __( 'Alignment of Image in Single Post/Page', 'wen-associate' ),
          'type'              => 'select',
          'choices'           => wen_associate_get_single_image_alignment_options(),
          'sanitize_callback' => 'sanitize_key',
        ),
      )
    );

    // Pagination Section
    $args['panels']['theme_option_panel']['sections']['section_pagination'] = array(
      'title'    => __( 'Pagination', 'wen-associate' ),
      'priority' => 70,
      'fields'   => array(
        'pagination_type' => array(
          'title'             => __( 'Pagination Type', 'wen-associate' ),
          'description'       => sprintf( __( 'Numeric: Requires %sWP-PageNavi%s plugin', 'wen-associate' ), '<a href="https://wordpress.org/plugins/wp-pagenavi/" target="_blank">','</a>' ),
          'type'              => 'select',
          'sanitize_callback' => 'sanitize_key',
          'choices'           => wen_associate_get_pagination_type_options(),
        ),
      )
    );

    // Footer Section
    $args['panels']['theme_option_panel']['sections']['section_footer'] = array(
      'title'    => __( 'Footer', 'wen-associate' ),
      'priority' => 80,
      'fields'   => array(
        'copyright_text' => array(
          'title' => __( 'Copyright Text', 'wen-associate' ),
          'type'  => 'text',
        ),
        'go_to_top' => array(
          'title' => __( 'Show Go To Top', 'wen-associate' ),
          'type'  => 'checkbox',
        ),
      )
    );

    // Blog Section
    $args['panels']['theme_option_panel']['sections']['section_blog'] = array(
      'title'    => __( 'Blog', 'wen-associate' ),
      'priority' => 80,
      'fields'   => array(
        'excerpt_length' => array(
          'title'             => __( 'Excerpt Length (words)', 'wen-associate' ),
          'description'       => __( 'Default is 40 words', 'wen-associate' ),
          'type'              => 'number',
          'sanitize_callback' => 'wen_associate_sanitize_excerpt_length',
          'input_attrs'       => array(
                                  'min'   => 1,
                                  'max'   => 200,
                                  'style' => 'width: 55px;'
                                ),
        ),
        'read_more_text' => array(
          'title'             => __( 'Read More Text', 'wen-associate' ),
          'type'              => 'text',
          'sanitize_callback' => 'sanitize_text_field',
        ),
        'exclude_categories' => array(
          'title'             => __( 'Exclude Categories in Blog', 'wen-associate' ),
          'description'       => __( 'Enter category ID to exclude in Blog Page. Separate with comma if more than one', 'wen-associate' ),
          'type'              => 'text',
          'sanitize_callback' => 'sanitize_text_field',
        ),
        'author_bio_in_single' => array(
          'title'             => __( 'Show Author Bio', 'wen-associate' ),
          'type'              => 'checkbox',
        ),
      )
    );

    // Breadcrumb Section
    $args['panels']['theme_option_panel']['sections']['section_breadcrumb'] = array(
      'title'    => __( 'Breadcrumb', 'wen-associate' ),
      'priority' => 80,
      'fields'   => array(
        'breadcrumb_type' => array(
          'title'             => __( 'Breadcrumb Type', 'wen-associate' ),
          'description'       => sprintf( __( 'Advanced: Requires %sBreadcrumb NavXT%s plugin', 'wen-associate' ), '<a href="https://wordpress.org/plugins/breadcrumb-navxt/" target="_blank">','</a>' ),
          'type'              => 'select',
          'choices'           => wen_associate_get_breadcrumb_type_options(),
          'sanitize_callback' => 'sanitize_key',
        ),
        'breadcrumb_separator' => array(
          'title'           => __( 'Separator', 'wen-associate' ),
          'type'            => 'text',
          'input_attrs'     => array('style' => 'width: 55px;'),
          'active_callback' => 'wen_associate_is_simple_breadcrumb_active',
        ),
      )
    );


    return $args;
  }

endif;
