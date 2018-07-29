<?php
        add_action( 'init', 'families_register' );
        add_action( 'init', 'testimonials_register' );
        add_action( 'init', 'families_project_register' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function families_register() {
	$labels = array(
		'name'               => _x( 'Families', 'post type general name', 'understrap' ),
        'singular_name'      => _x( 'Families number', 'post type singular name', 'understrap' ),
        'menu_name'          => _x( 'Families', 'admin menu', 'understrap' ),
        'name_admin_bar'     => _x( 'Families', 'add new on admin bar', 'understrap' ),
        'add_new'            => _x( 'Add New Families member', 'Team member', 'understrap' ),
        'add_new_item'       => __( 'Add New Families member', 'understrap' ),
        'new_item'           => __( 'New Families member', 'understrap' ),
        'edit_item'          => __( 'Edit Families member', 'understrap' ),
        'view_item'          => __( 'View Families member', 'understrap' ),
        'all_items'          => __( 'All Families members', 'understrap' ),
        'search_items'       => __( 'Search Families members', 'understrap' ),
        'parent_item_colon'  => __( 'Parent Families member:', 'understrap' ),
        'not_found'          => __( 'No Families members found.', 'understrap' ),
        'not_found_in_trash' => __( 'No Families members found in Trash.', 'understrap' )
        );

        $args = array(
        'labels'             => $labels,
        'description'        => __( 'This is a team list of the members', 'understrap' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'families' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'thumbnail', 'search','excerpt')
        );

        register_post_type('families', $args );
        }

function testimonials_register() {
	$labels = array(
		'name'               => _x( 'Testimonials', 'post type general name', 'understrap' ),
        'singular_name'      => _x( 'Testimonials number', 'post type singular name', 'understrap' ),
        'menu_name'          => _x( 'Testimonials', 'admin menu', 'understrap' ),
        'name_admin_bar'     => _x( 'Testimonials', 'add new on admin bar', 'understrap' ),
        'add_new'            => _x( 'Add New Testimonials member', 'Team member', 'understrap' ),
        'add_new_item'       => __( 'Add New Testimonials member', 'understrap' ),
        'new_item'           => __( 'New Testimonials member', 'understrap' ),
        'edit_item'          => __( 'Edit Testimonials member', 'understrap' ),
        'view_item'          => __( 'View Testimonials member', 'understrap' ),
        'all_items'          => __( 'All Testimonials members', 'understrap' ),
        'search_items'       => __( 'Search Testimonials members', 'understrap' ),
        'parent_item_colon'  => __( 'Parent Testimonials member:', 'understrap' ),
        'not_found'          => __( 'No Testimonials members found.', 'understrap' ),
        'not_found_in_trash' => __( 'No Testimonials members found in Trash.', 'understrap' )
        );

        $args = array(
        'labels'             => $labels,
        'description'        => __( 'This is a team list of the members', 'understrap' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonials' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => true,
        'supports'           => array( 'title', 'thumbnail', 'editor', 'position','excerpt', 'author')
        );

        register_post_type('testimonials', $args );
        }

    function families_project_register() {
        $labels = array(
            'name'               => _x( 'Families-project', 'post type general name', 'understrap' ),
            'singular_name'      => _x( 'Families-project number', 'post type singular name', 'understrap' ),
            'menu_name'          => _x( 'Families-project', 'admin menu', 'understrap' ),
            'name_admin_bar'     => _x( 'Families-project', 'add new on admin bar', 'understrap' ),
            'add_new'            => _x( 'Add New Families-project member', 'Team member', 'understrap' ),
            'add_new_item'       => __( 'Add New Families-project member', 'understrap' ),
            'new_item'           => __( 'New Families-project member', 'understrap' ),
            'edit_item'          => __( 'Edit Families-project member', 'understrap' ),
            'view_item'          => __( 'View Families-project member', 'understrap' ),
            'all_items'          => __( 'All Families-project members', 'understrap' ),
            'search_items'       => __( 'Search Families-project members', 'understrap' ),
            'parent_item_colon'  => __( 'Parent Families-project member:', 'understrap' ),
            'not_found'          => __( 'No Families-project members found.', 'understrap' ),
            'not_found_in_trash' => __( 'No Families-project members found in Trash.', 'understrap' )
            );

            $args = array(
            'labels'             => $labels,
            'description'        => __( 'This is a team list of the members', 'understrap' ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'families-project' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => true,
            'supports'           => array( 'title', 'thumbnail', 'editor', 'position','excerpt', 'author')
            );

            register_post_type('families-project', $args );
            }


function create_post_type() {
  register_post_type( 'acme_product',
    array(
      'labels' => array(
        'name' => __( 'Products' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
add_action( 'init', 'create_post_type' );