<?php
/**
 * @package TSE
 * TSE Custom Taxonomies
 *
 * REGISTERED TAXONOMIES:
 * @param Clients (cpt_clients)   : class
 */

interface iTaxonomy {
  public function init_tax();
}

class Clients implements iTaxonomy {
  function __construct() {
    /* ON INIT */
    add_action( 'init', array( $this, 'init_tax' ) );

    /* ON PERMALINK WRITE */
    add_filter( 'post_type_link', array( $this, 'filter_post_type_link' ), 10, 2 );
    add_filter( 'rewrite_rules_array', array( $this,'rewrite_permalink_rules' ) );
  }

  function init_tax() {
    // only init if the taxonomy doesn't already exist
    if( !taxonomy_exists( 'cpt_clients' ) ) {
      register_taxonomy( 'cpt_clients', 'cpt_projects', array(
        'hierarchical'  => true,
        'labels'        => array(
      	      'name'                => _x( 'Clients', 'Post Type General Name', 'tseinc' ),
      	      'singular_name'       => _x( 'Client', 'Post Type Singular Name', 'tseinc' ),
      	      'menu_name'           => __( 'Clients', 'tseinc' ),
      	      'all_items'           => __( 'All Clients', 'tseinc' ),
      	      'view_item'           => __( 'View Client', 'tseinc' ),
      	      'add_new_item'        => __( 'Add New Client', 'tseinc' ),
      	      'add_new'             => __( 'Add New', 'tseinc' ),
      	      'edit_item'           => __( 'Edit Client', 'tseinc' ),
      	      'update_item'         => __( 'Update Client', 'tseinc' ),
      	      'search_items'        => __( 'Search Clients', 'tseinc' ),
      	      'not_found'           => __( 'Not Found', 'tseinc' ),
      	  ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'rewrite'		 => array( 'slug' => 'projects', 'with_front' => true ),
      ) );
    }
  }

  function filter_post_type_link( $link, $post ) {
    // if Projects is being requested, also load Clients if they exist
    // and replace the wildcard "%client%" with the actual client in the URL
    if ( $post->post_type == 'cpt_projects' ) {
      if ( $terms = get_the_terms( $post->ID, 'cpt_clients' ) ) {
        $link = str_replace( '%client%', current( $terms )->slug, $link );
      }
    }
    return $link;
  }

  public function rewrite_permalink_rules( $rules ) {
    // tell wordpress how to interpret project URL structure
    // STRUCTURE: projects/%client%/%single_post%
    // put lowest level queries on top level of array
    return array_merge( array(
        'projects/(.+)/(.+)/?$' => 'index.php?cpt_clients=$matches[1]&cpt_projects=$matches[2]',
        'projects/(.+)/?$'  => 'index.php?cpt_clients=$matches[1]'
      ), $rules
    ); // Ensure our rules come first
  }
}
?>
