<?php
/**
 * @package TSE
 * TSE Custom Post Types
 *
 * REGISTERED POST TYPES:
 * @param Projects  (cpt_projects)    : class
 * @param KeyPeople (cpt_key_people)  : class
 */
interface iPostType {
  public function init_post();
}

class Projects implements iPostType {
  public function __construct() {
    /* ON INIT */
    add_action( 'init', array( $this, 'init_post' ) );

    /* ON SAVE POST */
    add_action( 'save_post', array( $this, 'set_default_terms' ), 100, 2 );
  }

  public function init_post() {
  	// dashboard permissions
  	register_post_type( 'cpt_projects', array(
      'description' => __( 'Project portfolio', 'tseinc' ),
      'menu_icon' => 'dashicons-book',
      'labels' => array(
        'name'                => _x( 'Projects', 'Post Type General Name', 'tseinc' ),
        'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'tseinc' ),
        'menu_name'           => __( 'Projects', 'tseinc' ),
        'parent_item_colon'   => __( 'Parent Project', 'tseinc' ),
        'all_items'           => __( 'All Projects', 'tseinc' ),
        'view_item'           => __( 'View Project', 'tseinc' ),
        'add_new_item'        => __( 'New Project', 'tseinc' ),
        'add_new'             => __( 'Add New', 'tseinc' ),
        'edit_item'           => __( 'Edit Project', 'tseinc' ),
        'update_item'         => __( 'Update Project', 'tseinc' ),
        'search_items'        => __( 'Search Projects', 'tseinc' ),
        'not_found'           => __( 'Not Found', 'tseinc' ),
        'not_found_in_trash'  => __( 'Not Found in Trash', 'tseinc' ),
    	),
      // Features this CPT supports in Post Editor
      'supports' => array(
  			'title',
        'excerpt',
  			'editor',
  			'author',
  			'thumbnail',
  			'comments',
  			'revisions',
    	),
      // You can associate this CPT with a taxonomy or custom taxonomy.
      'taxonomies' => array( 'cpt_clients', 'post_tag' ),
      /* A hierarchical CPT is like Pages and can have
      * Parent and child items. A non-hierarchical CPT
      * is like Posts.
      */
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'page',
    	'rewrite'							=> array(
    		'slug'				=> 'projects/%client%',
    		'with_front'	=> true
    	)
	  ) );
  }

  public function set_default_terms( $post_id, $post ) {
    /**
     * If no Client is provided when creating a new Project, the default term
     * "misc" will be used.
     */

     // on publish
     if( 'publish' === $post->post_status ) {
       // set default taxonomies
       $defaults = array(
         'cpt_clients'  => array( 'misc' ),
       );

       // retrieve project taxonomies and replace empty fields with defaults
       $taxonomies = get_object_taxonomies( $post->post_type );
       foreach( (array) $taxonomies as $taxonomy ) {
         $terms = wp_get_post_terms( $post_id, $taxonomy );
         if( empty( $terms ) && array_key_exists( $taxonomy, $taxonomies ) ) {
           wp_set_object_terms( $post_id, $defaults[$taxonomy], $taxonomy );
         }
       }
     }
   }
 }

class KeyPeople implements iPostType {
  public function __construct() {
    /* ON INIT */
    add_action( 'init', array( $this, 'init_post' ), 0 );

  }

  public function init_post() {
  	// dashboard permissions
  	register_post_type( 'cpt_key_people', array(
      'description' => __( 'Index of key people at TSE', 'tseinc' ),
      'menu_icon' => 'dashicons-businessman',
      'labels' => array(
        'name'               => _x( 'Key People', 'Post Type General Name', 'tseinc' ),
        'singular_name'      => _x( 'Key Person', 'Post Type Singular Name', 'tseinc' ),
        'menu_name'          => __( 'Key People', 'tseinc' ),
        'parent_item_colon'  => __( 'Parent Key Person', 'tseinc' ),
        'all_items'          => __( 'All Key People', 'tseinc' ),
        'view_item'          => __( 'View Key Person', 'tseinc' ),
        'add_new_item'       => __( 'New Key Person', 'tseinc' ),
        'add_new'            => __( 'Add New', 'tseinc' ),
        'edit_item'          => __( 'Edit Key Person', 'tseinc' ),
        'update_item'        => __( 'Update Key Person', 'tseinc' ),
        'search_items'       => __( 'Search Projects', 'tseinc' ),
        'not_found'          => __( 'Not Found', 'tseinc' ),
        'not_found_in_trash' => __( 'Not Found in Trash', 'tseinc' ),
    	),
      // Features this CPT supports in Post Editor
      'supports' => array(
    		'title',
        'excerpt',
    		'editor',
    		'author',
    		'thumbnail',
    		'comments',
    		'revisions',
    	),
      /* A hierarchical CPT is like Pages and can have
      * Parent and child items. A non-hierarchical CPT
      * is like Posts.
      */
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 6,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'page',
    	'rewrite' => array(
    		'slug'       => 'people',
    		'with_front' => true
    	)
	  ) );
  }
}

?>
