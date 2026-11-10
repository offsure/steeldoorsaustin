<?php
/**
 * SDA Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SDA
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_SDA_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'sda-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_SDA_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );


register_nav_menus( array(
  'primary' => __( 'Primary Menu', 'yourtheme' ),
) );



function astra_child_enqueue_scripts() {
    // Load your custom script.js in footer
    wp_enqueue_script(
        'astra-child-script', // handle
        get_stylesheet_directory_uri() . '/script.js', // path to script.js in child theme
        array('jquery'), // dependencies (optional)
        '1.0', // version
        true // load in footer
    );
}
add_action('wp_enqueue_scripts', 'astra_child_enqueue_scripts');



// Add Bootstrap classes to nav menu <li>
function add_bootstrap_nav_li_class($classes, $item, $args) {
    if (isset($args->theme_location) && $args->theme_location === 'primary') {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_bootstrap_nav_li_class', 10, 3);

// Add Bootstrap classes to nav menu <a>
function add_bootstrap_nav_a_class($atts, $item, $args) {
    if (isset($args->theme_location) && $args->theme_location === 'primary') {
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_bootstrap_nav_a_class', 10, 3);


add_action( 'template_redirect', function() {
    if ( is_404() ) {
        wp_redirect( home_url(), 301 );
        exit;
    }
});

/**
 * Register Product CPT + product_category taxonomy
 */
function sda_register_product_cpt() {
    register_post_type( 'product', array(
        'labels' => array(
            'name'               => 'Products',
            'singular_name'      => 'Product',
            'add_new'            => 'Add New Product',
            'add_new_item'       => 'Add New Product',
            'edit_item'          => 'Edit Product',
            'new_item'           => 'New Product',
            'view_item'          => 'View Product',
            'search_items'       => 'Search Products',
            'not_found'          => 'No products found',
            'not_found_in_trash' => 'No products found in Trash',
            'menu_name'          => 'Products',
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'products', 'with_front' => false ),
        'has_archive'        => 'products',
        'hierarchical'       => false,
        'menu_position'      => 20,
        'menu_icon'          => 'dashicons-products',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
    ) );

    register_taxonomy( 'product_category', 'product', array(
        'labels' => array(
            'name'              => 'Product Categories',
            'singular_name'     => 'Product Category',
            'search_items'      => 'Search Categories',
            'all_items'         => 'All Categories',
            'parent_item'       => 'Parent Category',
            'parent_item_colon' => 'Parent Category:',
            'edit_item'         => 'Edit Category',
            'update_item'       => 'Update Category',
            'add_new_item'      => 'Add New Category',
            'new_item_name'     => 'New Category Name',
            'menu_name'         => 'Categories',
        ),
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'show_in_nav_menus' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'products/category', 'with_front' => false ),
    ) );
}
add_action( 'init', 'sda_register_product_cpt' );

/**
 * Register Service Area CPT
 */
function sda_register_service_area_cpt() {
    register_post_type( 'service_area', array(
        'labels' => array(
            'name'               => 'Service Areas',
            'singular_name'      => 'Service Area',
            'add_new'            => 'Add New Area',
            'add_new_item'       => 'Add New Service Area',
            'edit_item'          => 'Edit Service Area',
            'new_item'           => 'New Service Area',
            'view_item'          => 'View Service Area',
            'search_items'       => 'Search Service Areas',
            'not_found'          => 'No service areas found',
            'not_found_in_trash' => 'No service areas in Trash',
            'menu_name'          => 'Service Areas',
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'service-areas', 'with_front' => false ),
        'has_archive'        => 'service-areas',
        'hierarchical'       => false,
        'menu_position'      => 21,
        'menu_icon'          => 'dashicons-location-alt',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
    ) );

    register_post_type( 'neighborhood', array(
        'labels' => array(
            'name'               => 'Neighborhoods',
            'singular_name'      => 'Neighborhood',
            'add_new'            => 'Add New Neighborhood',
            'add_new_item'       => 'Add New Neighborhood',
            'edit_item'          => 'Edit Neighborhood',
            'new_item'           => 'New Neighborhood',
            'view_item'          => 'View Neighborhood',
            'search_items'       => 'Search Neighborhoods',
            'not_found'          => 'No neighborhoods found',
            'not_found_in_trash' => 'No neighborhoods in Trash',
            'menu_name'          => 'Neighborhoods',
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'neighborhoods', 'with_front' => false ),
        'has_archive'        => 'neighborhoods',
        'hierarchical'       => false,
        'menu_position'      => 22,
        'menu_icon'          => 'dashicons-admin-site-alt3',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'page-attributes' ),
    ) );
}
add_action( 'init', 'sda_register_service_area_cpt' );

/**
 * Flush rewrite rules once after CPT registration
 */
function sda_maybe_flush_rewrites() {
    if ( get_option( 'sda_cpt_flush_v4' ) !== '1' ) {
        flush_rewrite_rules( false );
        update_option( 'sda_cpt_flush_v4', '1' );
    }
}

/**
 * Custom rewrite: /service-areas/{city-slug}/{neighborhood-slug}/
 */
function sda_neighborhood_rewrite_rules() {
    add_rewrite_rule(
        '^service-areas/([^/]+)/([^/]+)/?$',
        'index.php?post_type=neighborhood&name=$matches[2]',
        'top'
    );
}
add_action( 'init', 'sda_neighborhood_rewrite_rules', 11 );

/**
 * Rewrite neighborhood permalinks to /service-areas/{city}/{neighborhood}/
 */
function sda_neighborhood_permalink( $link, $post ) {
    if ( ! $post || $post->post_type !== 'neighborhood' ) {
        return $link;
    }
    if ( ! function_exists( 'get_field' ) ) {
        return $link;
    }

    $parent_id = get_field( 'parent_area', $post->ID );
    if ( is_array( $parent_id ) ) {
        $parent_id = reset( $parent_id );
    }
    if ( is_object( $parent_id ) ) {
        $parent_id = $parent_id->ID;
    }
    $parent_id = (int) $parent_id;
    if ( ! $parent_id ) {
        return $link;
    }

    $parent = get_post( $parent_id );
    if ( ! $parent || $parent->post_type !== 'service_area' ) {
        return $link;
    }

    return home_url( user_trailingslashit( 'service-areas/' . $parent->post_name . '/' . $post->post_name ) );
}
add_filter( 'post_type_link', 'sda_neighborhood_permalink', 10, 2 );

/**
 * Canonicalize neighborhood URLs:
 *  - /neighborhoods/{slug}/                 → 301 nested
 *  - /service-areas/{wrong-city}/{slug}/    → 301 nested to correct city
 */
function sda_canonicalize_neighborhood_url() {
    if ( is_admin() || ! is_singular( 'neighborhood' ) ) {
        return;
    }

    $canonical = get_permalink();
    if ( ! $canonical ) {
        return;
    }

    $request_uri   = strtok( $_SERVER['REQUEST_URI'] ?? '', '?' );
    $request_path  = '/' . ltrim( trailingslashit( $request_uri ), '/' );
    $canonical_pth = wp_parse_url( $canonical, PHP_URL_PATH );

    if ( $canonical_pth && $request_path !== $canonical_pth ) {
        wp_safe_redirect( $canonical, 301 );
        exit;
    }
}
add_action( 'template_redirect', 'sda_canonicalize_neighborhood_url', 5 );
add_action( 'init', 'sda_maybe_flush_rewrites', 20 );

/**
 * Seed product_category terms once
 */
function sda_seed_product_terms() {
    if ( get_option( 'sda_product_terms_seeded' ) === '1' ) {
        return;
    }

    $tree = array(
        'Steel Doors' => array(
            'Wrought Iron Entry Doors',
            'Steel Pivot Doors',
            'Steel Double Doors',
            'Steel Single Doors',
            'Steel Doors with Side Windows',
            'Steel Doors with Top Windows',
            'Steel Interior Doors',
            'Steel Wine Cellar / Wine Room',
            'Steel Bifold Doors',
            'Steel French Doors',
            'Steel Sliding Doors',
            'Steel Pocket Doors',
            'Steel Accordion Doors',
            'Steel Panoramic Doors',
        ),
        'Steel Windows' => array(
            'Steel Fixed Windows',
            'Steel Operable Windows',
            'Steel Curtain Windows',
            'Steel Casement Windows',
            'Steel Awning Windows',
        ),
        'Product Options' => array(
            'Energy Efficiency',
            'Glass Options',
            'Door Locksets',
        ),
    );

    foreach ( $tree as $parent_name => $children ) {
        $parent = term_exists( $parent_name, 'product_category' );
        if ( ! $parent ) {
            $parent = wp_insert_term( $parent_name, 'product_category' );
        }
        if ( is_wp_error( $parent ) ) {
            continue;
        }
        $parent_id = is_array( $parent ) ? (int) $parent['term_id'] : (int) $parent;

        foreach ( $children as $child_name ) {
            if ( ! term_exists( $child_name, 'product_category' ) ) {
                wp_insert_term( $child_name, 'product_category', array( 'parent' => $parent_id ) );
            }
        }
    }

    update_option( 'sda_product_terms_seeded', '1' );
}
add_action( 'admin_init', 'sda_seed_product_terms' );

/**
 * Seed one placeholder product per sub-category (runs once)
 */
function sda_seed_placeholder_products() {
    if ( get_option( 'sda_products_seeded' ) === '1' ) {
        return;
    }

    $tree = array(
        'Steel Doors' => array(
            'Wrought Iron Entry Doors',
            'Steel Pivot Doors',
            'Steel Double Doors',
            'Steel Single Doors',
            'Steel Doors with Side Windows',
            'Steel Doors with Top Windows',
            'Steel Interior Doors',
            'Steel Wine Cellar / Wine Room',
            'Steel Bifold Doors',
            'Steel French Doors',
            'Steel Sliding Doors',
            'Steel Pocket Doors',
            'Steel Accordion Doors',
            'Steel Panoramic Doors',
        ),
        'Steel Windows' => array(
            'Steel Fixed Windows',
            'Steel Operable Windows',
            'Steel Curtain Windows',
            'Steel Casement Windows',
            'Steel Awning Windows',
        ),
        'Product Options' => array(
            'Energy Efficiency',
            'Glass Options',
            'Door Locksets',
        ),
    );

    foreach ( $tree as $parent_name => $children ) {
        $parent_term = get_term_by( 'name', $parent_name, 'product_category' );

        foreach ( $children as $child_name ) {
            $existing = new WP_Query( array(
                'post_type'      => 'product',
                'post_status'    => 'any',
                'posts_per_page' => 1,
                'title'          => $child_name,
                'fields'         => 'ids',
                'no_found_rows'  => true,
            ) );
            if ( $existing->have_posts() ) {
                continue;
            }

            $post_id = wp_insert_post( array(
                'post_title'   => $child_name,
                'post_type'    => 'product',
                'post_status'  => 'publish',
                'post_content' => '<p>Placeholder content for ' . esc_html( $child_name ) . '. Replace with a full description, key features, and sizing details.</p>',
            ) );

            if ( ! $post_id || is_wp_error( $post_id ) ) {
                continue;
            }

            $term_ids = array();
            if ( $parent_term && ! is_wp_error( $parent_term ) ) {
                $term_ids[] = (int) $parent_term->term_id;
            }
            $child_term = get_term_by( 'name', $child_name, 'product_category' );
            if ( $child_term && ! is_wp_error( $child_term ) ) {
                $term_ids[] = (int) $child_term->term_id;
            }
            if ( ! empty( $term_ids ) ) {
                wp_set_post_terms( $post_id, $term_ids, 'product_category' );
            }

            if ( function_exists( 'update_field' ) ) {
                update_field( 'product_short_desc', 'Placeholder — update this product with a real description and image.', $post_id );
                update_field( 'product_cta_text', 'Get a Free Quote', $post_id );
                update_field( 'product_cta_link', '/#contact', $post_id );
            }
        }
    }

    update_option( 'sda_products_seeded', '1' );
}
add_action( 'admin_init', 'sda_seed_placeholder_products', 20 );

/**
 * Seed featured images for placeholder products.
 * Pulls real product photos from omgsteeldoors.com gallery (site owner's own photos).
 * Processes up to 5 per admin page load.
 */
function sda_seed_product_images() {
    if ( get_option( 'sda_products_images_seeded' ) === '1' ) {
        return;
    }

    $url_map = array(
        'Wrought Iron Entry Doors'      => 'https://omgsteeldoors.com/assets/images/gallery1.webp',
        'Steel Pivot Doors'             => 'https://omgsteeldoors.com/assets/images/gallery2.webp',
        'Steel Double Doors'            => 'https://omgsteeldoors.com/assets/images/gallery3.webp',
        'Steel Single Doors'            => 'https://omgsteeldoors.com/assets/images/gallery5.webp',
        'Steel Doors with Side Windows' => 'https://omgsteeldoors.com/assets/images/gallery6.webp',
        'Steel Doors with Top Windows'  => 'https://omgsteeldoors.com/assets/images/gallery7.webp',
        'Steel Interior Doors'          => 'https://omgsteeldoors.com/assets/images/gallery8.webp',
        'Steel Wine Cellar / Wine Room' => 'https://omgsteeldoors.com/assets/images/gallery9.webp',
        'Steel Bifold Doors'            => 'https://omgsteeldoors.com/assets/images/gallery10.webp',
        'Steel French Doors'            => 'https://omgsteeldoors.com/assets/images/gallery11.webp',
        'Steel Sliding Doors'           => 'https://omgsteeldoors.com/assets/images/gallery12.webp',
        'Steel Pocket Doors'            => 'https://omgsteeldoors.com/assets/images/gallery13.webp',
        'Steel Accordion Doors'         => 'https://omgsteeldoors.com/assets/images/gallery14.webp',
        'Steel Panoramic Doors'         => 'https://omgsteeldoors.com/assets/images/gallery88.webp',
        'Steel Fixed Windows'           => 'https://omgsteeldoors.com/assets/images/kitchen-dining-steel-fixed-window-gallery.webp',
        'Steel Operable Windows'        => 'https://omgsteeldoors.com/assets/images/interior-modern-farmhouse-window-wall-gallery.webp',
        'Steel Curtain Windows'         => 'https://omgsteeldoors.com/assets/images/projects/p06/p06-1.webp',
        'Steel Casement Windows'        => 'https://omgsteeldoors.com/assets/images/projects/p05/p05-1.webp',
        'Steel Awning Windows'          => 'https://omgsteeldoors.com/assets/images/projects/p04/p04-1.webp',
        'Energy Efficiency'             => 'https://omgsteeldoors.com/assets/images/promise1.webp',
        'Glass Options'                 => 'https://omgsteeldoors.com/assets/images/promise2.webp',
        'Door Locksets'                 => 'https://omgsteeldoors.com/assets/images/hero-install.webp',
    );

    $products = get_posts( array(
        'post_type'      => 'product',
        'posts_per_page' => 5,
        'fields'         => 'all',
        'meta_query'     => array(
            array(
                'key'     => '_thumbnail_id',
                'compare' => 'NOT EXISTS',
            ),
        ),
    ) );

    if ( empty( $products ) ) {
        update_option( 'sda_products_images_seeded', '1' );
        return;
    }

    require_once ABSPATH . 'wp-admin/includes/media.php';
    require_once ABSPATH . 'wp-admin/includes/file.php';
    require_once ABSPATH . 'wp-admin/includes/image.php';

    @set_time_limit( 120 );

    foreach ( $products as $product ) {
        $title = $product->post_title;
        if ( ! isset( $url_map[ $title ] ) ) {
            continue;
        }

        $media_id = media_sideload_image( $url_map[ $title ], $product->ID, $title, 'id' );

        if ( ! is_wp_error( $media_id ) && $media_id ) {
            set_post_thumbnail( $product->ID, $media_id );
        }
    }
}
add_action( 'admin_init', 'sda_seed_product_images', 30 );

/**
 * Include descendant category products on taxonomy archive
 */
function sda_include_child_terms_in_tax_query( $query ) {
    if ( is_admin() || ! $query->is_main_query() ) {
        return;
    }
    if ( $query->is_tax( 'product_category' ) ) {
        $term = $query->get_queried_object();
        if ( $term && ! is_wp_error( $term ) ) {
            $query->set( 'tax_query', array(
                array(
                    'taxonomy'         => 'product_category',
                    'field'            => 'term_id',
                    'terms'            => $term->term_id,
                    'include_children' => true,
                ),
            ) );
            $query->set( 'posts_per_page', 12 );
        }
    }
    if ( $query->is_post_type_archive( 'product' ) ) {
        $query->set( 'posts_per_page', 12 );
    }
}
add_action( 'pre_get_posts', 'sda_include_child_terms_in_tax_query' );

/**
 * ACF field group for products
 */
if ( function_exists( 'acf_add_local_field_group' ) ) {
    add_action( 'acf/init', 'sda_register_product_acf_fields' );
}
function sda_register_product_acf_fields() {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }

    acf_add_local_field_group( array(
        'key'      => 'group_sda_product',
        'title'    => 'Product Details',
        'location' => array(
            array(
                array(
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'product',
                ),
            ),
        ),
        'position'  => 'normal',
        'style'     => 'default',
        'label_placement' => 'top',
        'fields' => array(
            array(
                'key'          => 'field_sda_product_short_desc',
                'label'        => 'Short Description',
                'name'         => 'product_short_desc',
                'type'         => 'textarea',
                'instructions' => 'Shown on listing cards. Keep it to one or two sentences.',
                'rows'         => 3,
                'new_lines'    => 'br',
            ),
            array(
                'key'           => 'field_sda_product_gallery',
                'label'         => 'Gallery',
                'name'          => 'product_gallery',
                'type'          => 'gallery',
                'instructions'  => 'Additional images beyond the featured image.',
                'return_format' => 'array',
                'preview_size'  => 'medium',
            ),
            array(
                'key'          => 'field_sda_product_specs',
                'label'        => 'Specifications',
                'name'         => 'product_specs',
                'type'         => 'repeater',
                'instructions' => 'Spec rows shown as a table on the product page.',
                'button_label' => 'Add Spec',
                'layout'       => 'table',
                'sub_fields'   => array(
                    array(
                        'key'   => 'field_sda_product_spec_label',
                        'label' => 'Label',
                        'name'  => 'label',
                        'type'  => 'text',
                    ),
                    array(
                        'key'   => 'field_sda_product_spec_value',
                        'label' => 'Value',
                        'name'  => 'value',
                        'type'  => 'text',
                    ),
                ),
            ),
            array(
                'key'   => 'field_sda_product_cta_text',
                'label' => 'CTA Button Text',
                'name'  => 'product_cta_text',
                'type'  => 'text',
                'default_value' => 'Get a Free Quote',
            ),
            array(
                'key'           => 'field_sda_product_cta_link',
                'label'         => 'CTA Button Link',
                'name'          => 'product_cta_link',
                'type'          => 'text',
                'default_value' => '/#contact',
                'instructions'  => 'Relative URL (e.g. /#contact) or full URL.',
            ),
        ),
    ) );
}

/**
 * ACF field group for service areas
 */
if ( function_exists( 'acf_add_local_field_group' ) ) {
    add_action( 'acf/init', 'sda_register_service_area_acf_fields' );
}
function sda_register_service_area_acf_fields() {
    if ( ! function_exists( 'acf_add_local_field_group' ) ) {
        return;
    }

    acf_add_local_field_group( array(
        'key'      => 'group_sda_service_area',
        'title'    => 'Service Area Details',
        'location' => array(
            array(
                array(
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'service_area',
                ),
            ),
        ),
        'position'        => 'normal',
        'style'           => 'default',
        'label_placement' => 'top',
        'fields' => array(
            array(
                'key'          => 'field_sda_area_tagline',
                'label'        => 'Tagline',
                'name'         => 'area_tagline',
                'type'         => 'textarea',
                'instructions' => 'Shown on cards and under the hero. 1–2 sentences.',
                'rows'         => 2,
                'new_lines'    => 'br',
            ),
            array(
                'key'          => 'field_sda_area_zip_codes',
                'label'        => 'ZIP Codes',
                'name'         => 'area_zip_codes',
                'type'         => 'text',
                'instructions' => 'Comma-separated list. Helps SEO. Optional.',
            ),
        ),
    ) );

    acf_add_local_field_group( array(
        'key'      => 'group_sda_neighborhood',
        'title'    => 'Neighborhood Details',
        'location' => array(
            array(
                array(
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'neighborhood',
                ),
            ),
        ),
        'position'        => 'normal',
        'style'           => 'default',
        'label_placement' => 'top',
        'fields' => array(
            array(
                'key'           => 'field_sda_nbh_parent_area',
                'label'         => 'Parent Service Area',
                'name'          => 'parent_area',
                'type'          => 'post_object',
                'instructions'  => 'The city this neighborhood belongs to.',
                'post_type'     => array( 'service_area' ),
                'return_format' => 'id',
                'ui'            => 1,
                'required'      => 1,
            ),
            array(
                'key'           => 'field_sda_nbh_tagline',
                'label'         => 'Tagline',
                'name'          => 'nbh_tagline',
                'type'          => 'textarea',
                'instructions'  => 'Shown on cards and under the hero. 1 sentence.',
                'rows'          => 2,
                'new_lines'     => 'br',
            ),
        ),
    ) );
}

/**
 * Seed 15 service areas with real SEO content.
 * Runs once via admin_init when 'sda_service_areas_seeded' is unset.
 */
function sda_seed_service_areas() {
    if ( get_option( 'sda_service_areas_seeded' ) === '1' ) {
        return;
    }

    $areas = sda_get_service_area_content();

    foreach ( $areas as $name => $data ) {
        $existing = new WP_Query( array(
            'post_type'      => 'service_area',
            'post_status'    => 'any',
            'posts_per_page' => 1,
            'title'          => $name,
            'fields'         => 'ids',
            'no_found_rows'  => true,
        ) );
        if ( $existing->have_posts() ) {
            continue;
        }

        $post_id = wp_insert_post( array(
            'post_title'   => $name,
            'post_type'    => 'service_area',
            'post_status'  => 'publish',
            'post_content' => $data['body'],
        ) );

        if ( ! $post_id || is_wp_error( $post_id ) ) {
            continue;
        }

        if ( function_exists( 'update_field' ) ) {
            update_field( 'area_tagline',   $data['tagline'],   $post_id );
            update_field( 'area_zip_codes', $data['zip_codes'], $post_id );
        }
    }

    update_option( 'sda_service_areas_seeded', '1' );
}
add_action( 'admin_init', 'sda_seed_service_areas', 25 );

/**
 * Seed neighborhoods with SEO content. Runs once.
 */
function sda_seed_neighborhoods() {
    if ( get_option( 'sda_neighborhoods_seeded' ) === '1' ) {
        return;
    }

    $file = get_stylesheet_directory() . '/inc/seed-neighborhood-content.php';
    if ( ! file_exists( $file ) ) {
        return;
    }
    require_once $file;
    if ( ! function_exists( 'sda_get_neighborhood_content' ) ) {
        return;
    }

    $map = sda_get_neighborhood_content();

    foreach ( $map as $city_name => $neighborhoods ) {
        $city_posts = get_posts( array(
            'post_type'      => 'service_area',
            'title'          => $city_name,
            'posts_per_page' => 1,
            'fields'         => 'ids',
        ) );
        if ( empty( $city_posts ) ) {
            continue;
        }
        $parent_id = (int) $city_posts[0];

        foreach ( $neighborhoods as $nbh_name => $data ) {
            $existing = new WP_Query( array(
                'post_type'      => 'neighborhood',
                'post_status'    => 'any',
                'posts_per_page' => 1,
                'title'          => $nbh_name,
                'fields'         => 'ids',
                'no_found_rows'  => true,
            ) );
            if ( $existing->have_posts() ) {
                continue;
            }

            $post_id = wp_insert_post( array(
                'post_title'   => $nbh_name,
                'post_type'    => 'neighborhood',
                'post_status'  => 'publish',
                'post_content' => $data['body'],
            ) );
            if ( ! $post_id || is_wp_error( $post_id ) ) {
                continue;
            }

            if ( function_exists( 'update_field' ) ) {
                update_field( 'parent_area', $parent_id,        $post_id );
                update_field( 'nbh_tagline', $data['tagline'],  $post_id );
            }
        }
    }

    update_option( 'sda_neighborhoods_seeded', '1' );
}
add_action( 'admin_init', 'sda_seed_neighborhoods', 26 );

/**
 * Service area content map.
 */
function sda_get_service_area_content() {
    return array(

        'Austin' => array(
            'tagline'   => 'Our home market — steel doors and windows across every Austin neighborhood, from Tarrytown to East Side.',
            'zip_codes' => '78701, 78702, 78703, 78704, 78705, 78723, 78731, 78741, 78745, 78751, 78756',
            'body'      => '<p>Austin is the center of what we do. We\'ve installed steel doors in Clarksville cottages, Hyde Park craftsmen, East Side lofts, Mueller new-builds, and South Congress condos — every style and era of Austin home we can think of.</p>
<h2>Where we work most</h2>
<p>Our highest-volume Austin ZIPs are 78704, 78751, 78703, 78702, and 78731 — Bouldin, Hyde Park, Tarrytown, East Austin, and Allandale/Rosedale. We also do regular work in Mueller, Barton Hills, Zilker, and the Domain area.</p>
<h2>Austin-specific considerations</h2>
<ul>
  <li><strong>Historic districts</strong>: we handle HPO approval and match existing profile dimensions on front-door replacements in Hyde Park, Clarksville, and Old West Austin</li>
  <li><strong>HOA letters</strong>: required in some East Side subdivisions — we prepare the submittal on your behalf</li>
  <li><strong>Heat load</strong>: west- and south-facing front doors benefit from solar low-E glass to reduce entry-way heat gain</li>
  <li><strong>Security</strong>: multi-point locking on exterior doors is our default in Austin neighborhoods with higher package-theft rates</li>
</ul>
<h2>Install process</h2>
<p>Measure, shop drawings for approval, 8–12 week fabrication, single-day install. We pull City of Austin permits when required and coordinate with your GC if there\'s active construction on site.</p>',
        ),

        'Bee Cave' => array(
            'tagline'   => 'Hill Country-scale homes in Bee Cave deserve oversized steel entries. We\'ve installed throughout Spanish Oaks, Falconhead, and Lake Pointe.',
            'zip_codes' => '78738',
            'body'      => '<p>Bee Cave homes tend to be larger, newer, and Hill Country-inspired — limestone exteriors, stacked stone, iron accents. That\'s the natural home for wrought iron entry doors, oversized pivot entries, and French patio doors.</p>
<h2>Neighborhoods we know well</h2>
<p>Spanish Oaks and Falconhead alone have generated dozens of our projects. We also work regularly in Lake Pointe, Uplands, and the Homestead. If your builder used aluminum entry doors, replacing them with steel immediately lifts the elevation of the whole home.</p>
<h2>Common Bee Cave builds</h2>
<ul>
  <li>Wrought iron double doors, 72" – 96" wide, aged-bronze finish</li>
  <li>Steel pivot entries, 8\' – 10\' tall with partial glass</li>
  <li>Steel French doors onto the patio with multi-point locking</li>
  <li>Accordion or panoramic doors from the kitchen to covered outdoor living</li>
</ul>
<h2>Why steel works here</h2>
<p>Hill Country weather moves fast — 100°F afternoons, driving thunderstorms, north wind in winter. Steel doors handle the swing without warping or rotting. Limestone and steel also pair well visually: the stone texture reads best next to a clean, matte-finished door.</p>',
        ),

        'Buda' => array(
            'tagline'   => 'Replacing builder-grade entry doors in Buda\'s fast-growing neighborhoods — one of the highest-ROI curb-appeal upgrades you can make.',
            'zip_codes' => '78610',
            'body'      => '<p>Buda has been growing fast, and a lot of what we see in Buda neighborhoods (Garlic Creek, Whispering Hollow, Sunfield, Elm Grove) is new-construction homes with standard builder-grade entry doors.</p>
<h2>The steel replacement opportunity</h2>
<p>A steel door replacement is one of the highest-impact upgrades you can make on a Buda home — same rough opening, huge visual difference, and the door will outlive the rest of the house. Most of our Buda jobs are same-size swap-outs: 36" × 80" stamped-steel or fiberglass builder door replaced with a 36" × 80" real steel door.</p>
<h2>What people order</h2>
<ul>
  <li>Steel single doors with half-lite glass (most popular)</li>
  <li>Doors with sidelites for wider entry openings</li>
  <li>Steel French doors to replace sliding glass patio doors</li>
</ul>
<h2>Timing</h2>
<p>Buda install days are usually 4–6 hours. We take the old door out, prep the opening, hang the new frame, shim, weather-strip, and trim out. You have a functioning door by the end of the same day.</p>',
        ),

        'Cedar Park' => array(
            'tagline'   => 'Family homes in Cedar Park want doors that balance security with curb appeal. Multi-point locks and keypad smart integration are our go-to combo here.',
            'zip_codes' => '78613',
            'body'      => '<p>Cedar Park\'s mix of established neighborhoods (Anderson Mill, Buttercup Creek, Brushy Creek) and newer developments (Bella Vista, Parkside, Twin Creeks) keeps us busy on both retrofits and new-build upgrades.</p>
<h2>Why Cedar Park homeowners call us</h2>
<ul>
  <li><strong>Security</strong>: steel doors with multi-point locks resist kick-ins far better than wood or fiberglass</li>
  <li><strong>Weather</strong>: Cedar Park hail storms can damage fiberglass doors; steel holds up</li>
  <li><strong>Design</strong>: families want a door that looks good daily without monthly maintenance</li>
</ul>
<h2>Popular configurations</h2>
<p>Our Cedar Park bestseller is a 36" × 80" single steel door with a half-lite of frosted or reeded glass, matte black finish, and a smart lock (Schlage Encode or Yale Assure) integrated with Ring or Nest. Multi-point locking optional but increasingly popular.</p>
<h2>Scheduling</h2>
<p>Most Cedar Park installs are single-day jobs. We schedule measure appointments on weekdays and can do installs on Saturdays for a small upcharge if weekday logistics are tough.</p>',
        ),

        'Dripping Springs' => array(
            'tagline'   => 'Acreage in Dripping Springs opens up door options we don\'t see elsewhere — oversized pivots, wine-room doors, accordion doors onto pool decks.',
            'zip_codes' => '78620',
            'body'      => '<p>Dripping Springs properties are often on acreage, which opens up door options we don\'t see elsewhere in the region. Oversized pivots, wine-cellar doors off walk-in pantries, accordion doors onto pool decks — these are regular installs here.</p>
<h2>Subdivisions we know</h2>
<p>If you\'re in Caliterra, Headwaters, Howard Ranch, Belterra, or the Founders Ridge area, we\'ve likely installed for one of your neighbors. Dripping Springs homes tend to run larger than Austin proper, and the door hardware scales with the house.</p>
<h2>What makes sense in Dripping Springs</h2>
<ul>
  <li>Oversized steel pivot entries (8\' – 10\' tall common)</li>
  <li>Wrought iron double doors on Hill Country elevations</li>
  <li>Wine-room doors with thermal break and temperature-rated gaskets</li>
  <li>Panoramic or accordion door systems onto outdoor living spaces</li>
</ul>
<h2>Measure and install</h2>
<p>We drive out for measures Tuesday–Thursday. If you\'re on a private ranch road, let us know at booking so we can coordinate gate codes and arrival windows. Install crews come out of Austin; lead time to site is about 30–45 minutes depending on your location.</p>',
        ),

        'Georgetown' => array(
            'tagline'   => 'Traditional architecture and Sun City retirees — Georgetown doors need to balance historic character with long-term low maintenance.',
            'zip_codes' => '78626, 78628, 78633',
            'body'      => '<p>Georgetown\'s historic downtown square sets the aesthetic — traditional, refined, not flashy. Our steel French doors, single entries with sidelites, and classic 6-lite configurations fit the neighborhood character without pretending to be something they\'re not.</p>
<h2>Historic and traditional neighborhoods</h2>
<p>Old Town Georgetown, Park Meadows, and the Downtown Historic District all need doors that read as period-appropriate. We can do true-divided-lite grids for a period-correct look, or applied-lite for better thermal performance with the same visual.</p>
<h2>Sun City work</h2>
<p>A big portion of our Georgetown work is in Sun City, where the priority is low maintenance above all. Many homes came with wood doors that now need refinishing every few years — our steel replacements need none. Wipe-down only.</p>
<h2>Builds we do most</h2>
<ul>
  <li>Steel French doors replacing sliders onto covered patios</li>
  <li>Steel single entries with traditional 6-lite grids</li>
  <li>Wide steel double doors for grand Highland Village and Berry Creek homes</li>
</ul>',
        ),

        'Hutto' => array(
            'tagline'   => 'Fast-growing Hutto has a mix of new-construction demand and 2000s-era homes ready for door upgrades.',
            'zip_codes' => '78634',
            'body'      => '<p>Hutto is growing quickly. New-construction subdivisions like Star Ranch, Hutto Highlands, Emory Crossing, and Riverwalk are generating strong demand. Replacement work is also common: many Hutto homes from the 2000s came with builder-grade fiberglass doors that are now showing their age.</p>
<h2>What we install in Hutto</h2>
<ul>
  <li>Steel single entry doors, half-lite or full-glass</li>
  <li>Doors with sidelites for wider openings (popular in new-construction)</li>
  <li>Steel French doors for patio and pool access</li>
  <li>Interior steel doors for home offices and pantries (growing trend in Hutto remodels)</li>
</ul>
<h2>Working with Hutto builders</h2>
<p>If you\'re pre-closing on a new Hutto home and want to upgrade the builder-spec door, contact us before the builder installs theirs. We can work from the builder\'s rough opening dimensions and swap the door in at turnover rather than forcing a second install later.</p>
<h2>Install time</h2>
<p>Most Hutto installs are single-day jobs. Replacement projects are typically 4–6 hours on site.</p>',
        ),

        'Kyle' => array(
            'tagline'   => 'Kyle is dense with newer homes ready for upgrade. Steel door and window replacement pair well — we coordinate permits and install both.',
            'zip_codes' => '78640',
            'body'      => '<p>Kyle neighborhoods like Plum Creek, 6 Creeks, and Crosswinds are dense with newer homes ready for upgrade. Steel door replacement in Kyle often comes bundled with window replacement — we do both and coordinate permits if needed.</p>
<h2>Plum Creek and surrounding</h2>
<p>Plum Creek is our most-worked Kyle neighborhood. The homes there were built with a wide range of quality in entry hardware; upgrading the front door is almost always the first improvement homeowners make. We\'ve installed in probably half the Plum Creek front elevations at this point.</p>
<h2>What people order in Kyle</h2>
<ul>
  <li>36" × 80" single steel doors with half-lite glass</li>
  <li>Doors with matching sidelites for 52"+ openings</li>
  <li>Steel French doors onto back patios</li>
  <li>Matched steel casement or fixed windows when the whole front elevation is being refreshed</li>
</ul>
<h2>Scheduling</h2>
<p>Install days run Mon–Sat. If you\'re coordinating with window work, we can sequence both in the same week to minimize disruption.</p>',
        ),

        'Lakeway' => array(
            'tagline'   => 'Homes with Lake Travis views call for doors that frame them — panoramic doors, curtain wall systems, oversized steel pivots.',
            'zip_codes' => '78734, 78738',
            'body'      => '<p>Lakeway homes frequently sit on hills overlooking Lake Travis. That means two things: great views worth framing with large glass, and weather exposure (wind, sun, blowing rain) that punishes lesser doors.</p>
<h2>Neighborhoods we work in</h2>
<p>The Hollows, Rough Hollow, Lakeway proper, Flintrock Falls, and Lakeway Highlands — all have been part of our portfolio. We\'ve also done multiple projects in Serene Hills and Vineyard Bay.</p>
<h2>Lakeway-scale builds</h2>
<ul>
  <li>Panoramic (pocket-slider) systems, 15\' – 25\' wide, onto lake-view decks</li>
  <li>Steel curtain walls on two-story great rooms facing the water</li>
  <li>Oversized steel pivot entries, 9\' – 10\' tall</li>
  <li>Accordion doors between indoor living and covered outdoor kitchens</li>
</ul>
<h2>Wind and weather considerations</h2>
<p>Lakeway\'s elevation and lake exposure mean higher sustained winds than most of Austin. Our operable doors and windows are tested to 50 mph wind-driven rain and use multi-point hardware that compresses against continuous gaskets. Fixed glass is argon-filled dual-pane low-E standard; we spec tempered laminated on anything over 8 feet per code.</p>',
        ),

        'Leander' => array(
            'tagline'   => 'Leander has exploded — Crystal Falls, Travisso, Cornerstone. Most move-in-ready homes here benefit from a steel door upgrade.',
            'zip_codes' => '78641, 78645',
            'body'      => '<p>Leander\'s growth has been remarkable. Crystal Falls, Travisso, Cornerstone, Oaks at San Gabriel, Bryson, and the newer sections are full of move-in-ready homes that benefit from a steel door upgrade.</p>
<h2>Crystal Falls and Travisso</h2>
<p>Two of our highest-volume Leander neighborhoods. Homes here are large, well-built, and often have multiple exterior door openings — front entry, garage-to-house, patio slider, and side-yard access. We can do all four as a single coordinated project.</p>
<h2>Popular Leander configurations</h2>
<ul>
  <li>Double steel entry doors, 72" – 96" wide, with matched sidelites</li>
  <li>Steel pivot entries on larger homes</li>
  <li>Steel French doors onto covered patios</li>
  <li>Interior steel doors for home offices (a lot of Leander buyers work from home)</li>
</ul>
<h2>References</h2>
<p>We\'ve done enough work in Leander that most neighborhoods have at least one reference home we can point you to. Ask during your measure appointment — we\'re usually happy to drive past a similar install so you can see the scale and finish in real life.</p>',
        ),

        'Manor' => array(
            'tagline'   => 'East-side growth story — Manor\'s master-planned communities are mostly new construction, and steel door upgrades come right at closing.',
            'zip_codes' => '78653',
            'body'      => '<p>Manor is the east-side growth story. Whisper Valley, ShadowGlen, EastVillage, and Presidential Meadows are largely new construction, and steel doors come in either as original builder upgrades or quick post-closing upgrades.</p>
<h2>Pre-closing upgrades</h2>
<p>If you\'re under contract on a Manor new-build and want to upgrade the builder-spec front door, we can coordinate with your builder to install our steel door before closing. The builder bills through to you, we handle the door fabrication, and you take possession of a finished home without a retrofit window.</p>
<h2>Post-closing upgrades</h2>
<p>More common in Manor: homeowners close on the house, move in, and then call us a few weeks later to replace the standard front door. We measure, build, and install — usually 6–8 weeks total from deposit to install.</p>
<h2>What we install</h2>
<ul>
  <li>Steel single entry with half-lite glass (most common)</li>
  <li>Steel doors with sidelites for wider front elevations</li>
  <li>Steel French doors for homes with full-depth covered patios</li>
</ul>',
        ),

        'Pflugerville' => array(
            'tagline'   => 'Deep residential stock in Pflugerville — from 1990s neighborhoods to brand-new builds. Replacement work is as common as new.',
            'zip_codes' => '78660, 78664',
            'body'      => '<p>Pflugerville has deep residential stock — neighborhoods from the 1990s (Windermere, Heatherwilde, Highland Park) alongside newer ones (Avalon, Sorento, Villages of Hidden Lake). We do as much replacement work here as new-build because so many homes are ready for it.</p>
<h2>What happens at the 25-year mark</h2>
<p>Homes built in the late 1990s and early 2000s are now at the age where original front doors have taken 20+ Texas summers of sun and 20+ winters of cold-front swings. The doors still work, but the stiles are swollen, the weather-stripping is gone, and the finish is chalked. Steel replacement solves all three at once.</p>
<h2>Pflugerville upgrade patterns</h2>
<ul>
  <li>Original fiberglass 36" × 80" → 36" × 80" steel single with glass — the #1 job we do in Pflugerville</li>
  <li>Aluminum sliders → Steel French doors for the patio upgrade</li>
  <li>Interior wood doors → Steel interior doors for office and pantry</li>
</ul>
<h2>Install speed</h2>
<p>We handle Pflugerville with same-day installs. Old door out, new door in, trimmed and weather-stripped by end of day.</p>',
        ),

        'Rollingwood' => array(
            'tagline'   => 'A small, tight-knit enclave where word-of-mouth matters. We\'ve been Rollingwood\'s door shop for multiple generations of referrals.',
            'zip_codes' => '78746',
            'body'      => '<p>Rollingwood is a small, tight-knit enclave, and word-of-mouth matters here. We\'ve been the go-to door shop for a handful of long-time Rollingwood homeowners, which has led to several generations of referrals across the neighborhood.</p>
<h2>What Rollingwood homes want</h2>
<p>Rollingwood homes tend to be architect-designed, often mid-century or modern with a focus on indoor-outdoor connection. Our panoramic doors, steel pivot entries, and full curtain-wall installations have become common sights on Edgegrove, Rockbridge, Hatley, and Riley.</p>
<h2>Discreet, high-end work</h2>
<ul>
  <li>Custom oversized pivot entries, often with partial glass and concealed hardware</li>
  <li>Steel sliding or panoramic doors from great room to covered patio</li>
  <li>Curtain-wall-style window systems on architectural renovations</li>
  <li>Interior steel doors for home offices, pantries, and wine rooms</li>
</ul>
<h2>Privacy and scheduling</h2>
<p>We understand Rollingwood privacy norms. Measures and installs happen on your schedule without a truck on the street for days. Install crews come and go in the same day on most jobs; larger systems may span two days.</p>',
        ),

        'Round Rock' => array(
            'tagline'   => 'Round Rock is large and varied. Bread-and-butter work here is 2000s-era homes replacing original stamped-steel entries with real steel doors.',
            'zip_codes' => '78664, 78665, 78681',
            'body'      => '<p>Round Rock is large and diverse — from Forest Creek and Behrens Ranch on the west to new construction near Kalahari and the Old Settlers Park corridor. Our bread-and-butter work here is the 2000s-era home replacing its original stamped-steel entry with a real steel door. The difference in curb appeal is immediate.</p>
<h2>Neighborhoods we\'ve worked</h2>
<p>Forest Creek, Behrens Ranch, Teravista, Paloma Lake, Chisholm Valley, and Stone Canyon have all been part of our Round Rock portfolio. We also do regular work in the older Round Rock West and Round Rock Preserve neighborhoods.</p>
<h2>Common Round Rock configurations</h2>
<ul>
  <li>Single steel entry 36" × 80", half-lite frosted glass, matte black</li>
  <li>Same with smart-lock integration (Schlage Encode / Yale Assure)</li>
  <li>Double steel doors on wider rough openings</li>
  <li>Steel French doors to replace patio sliders</li>
</ul>
<h2>Timing</h2>
<p>Round Rock measure appointments run Mon–Sat. Installation is typically a single day. Lead time from deposit to install is 6–10 weeks depending on door size and finish.</p>',
        ),

        'West Lake Hills' => array(
            'tagline'   => 'One of our most design-driven markets. Architect-driven homes here regularly feature floor-to-ceiling steel doors and curtain walls.',
            'zip_codes' => '78746',
            'body'      => '<p>West Lake Hills is one of our most design-driven markets. Homes here are architect-driven, often with long sightlines from the street to the living space, and the door selection is part of the overall architectural statement rather than an afterthought.</p>
<h2>Neighborhoods and sub-markets</h2>
<p>Tarrytown, Davenport, and Westlake proper are all well-covered by our portfolio. We\'ve also done projects in Rob Roy and the private drives off Redbud Trail.</p>
<h2>Custom-scale builds</h2>
<ul>
  <li>Floor-to-ceiling steel pivot doors, often 10\'+ tall with matching sidelite</li>
  <li>Steel curtain walls on modern architectural facades</li>
  <li>Panoramic (pocket-slider) systems on view-facing elevations</li>
  <li>Interior steel door packages across the whole home — pantry, office, powder room, wine room</li>
</ul>
<h2>Working with architects</h2>
<p>Most West Lake Hills jobs come to us through the architect or builder. We shop-draw to the architect\'s specifications, coordinate with the structural engineer on load-bearing curtain-wall installations, and attend site meetings when details need to be resolved in person.</p>
<h2>Lead time</h2>
<p>Custom work in West Lake Hills runs 12–20 weeks from deposit depending on scope and complexity. We build everything in-house, so we can answer design questions and make changes mid-fabrication without supply-chain delays.</p>',
        ),

    );
}
?>