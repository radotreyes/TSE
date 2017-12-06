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
    add_filter( 'generate_rewrite_rules', array( $this, 'fix_pagination' ), 10, 2 );
    // register permalinks for regular and custom post types
    // add_filter( 'post_link', 'set_permalinks', 10, 3 ); // regular
    // add_filter( 'post_type_link', 'set_permalinks', 10, 3 ); // custom
  }

  function init_tax() {
    // only init if the taxonomy doesn't already exist
    if( !taxonomy_exists( 'cpt_clients' ) ) {
      register_taxonomy( 'cpt_clients', 'cpt_projects', array(
        'hierarchical'  => false,
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
    if ( $post->post_type == 'cpt_projects' ) {
      if ( $cats = get_the_terms( $post->ID, 'cpt_clients' ) ) {
        $link = str_replace( '%client%', current( $cats )->slug, $link );
      }
    }
    return $link;
  }

  public function rewrite_permalink_rules( $rules ) {
    // tell wordpress how to interpret project URL structure
    $new = array();
    $new['projects/([^/]+)/(.+)/?$'] = 'index.php?cpt_clients=$matches[2]';
    $new['projects/(.+)/?$'] = 'index.php?cpt_clients=$matches[1]';

    return array_merge( $new, $rules ); // Ensure our rules come first
  }

  public function fix_pagination( $wp_rewrite ) {
    /**
     * pagination and URL mapping fix
     * basically, WordPress rewrites the URL rules to something funny
     * when we register our custom permalink format. using this, we are able to
     * display the appropriate data on our new custom permalink views
     * by appending the right queries to the URL being rewritten.
     */

     // NOTE as of this revision, still using index.php as template.
     // so post type is being used to load objects: WILL SHOW PROJECTS,
     // NOT clients
      unset($wp_rewrite->rules['projects/([^/]+)/page/?([0-9]{1,})/?$']);
      $wp_rewrite->rules = array(
          'projects/?$' => $wp_rewrite->index . '?post_type=cpt_projects' . '?cpt_clients=' . $wp_rewrite->preg_index( 1 ),
          'projects/page/?([0-9]{1,})/?$' => $wp_rewrite->index . '?post_type=cpt_projects&paged=' . $wp_rewrite->preg_index( 1 ),
          'projects/([^/]+)/page/?([0-9]{1,})/?$' => $wp_rewrite->index . '?cpt_clients=' . $wp_rewrite->preg_index( 1 ) . '&paged=' . $wp_rewrite->preg_index( 2 ),
      ) + $wp_rewrite->rules;
  }
}

  // function set_permalinks( $permalink, $post_id, $leavename ) {
  //   // if the permalink doesn't contain the actor tag, don't translate anything
  //   if( strpos( $permalink, '%client%' ) ) return $permalink;
  //
  //   // get post
  //   $post = get_post( $post_id );
  //   if( !$post ) return $permalink;
  //
  //   // get all terms related to the current post object
  //   $terms = $wp_get_object_terms( $post->ID, 'client' );
  //
  //   // retrieve slug value of first client custom tax object linked to the post
  //   if( !is_wp_error( $terms ) && !empty( $terms ) && is_object( $terms[0] ) {
  //     $tasonomy_slug = $terms[0]->slug;
  //   }
  //   else {
  //     $taxonomy_slug = 'client';
  //   }
  //
  //   // replace the
  // }

?>
