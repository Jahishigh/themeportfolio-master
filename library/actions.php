<?php
  // Custom Post Type (Project)
	function create_post_type() {
		register_post_type(
		  'project',
		  array(
		    'label' => 'Projects',
		    'labels' => array(
		      'name' => 'Projects',
		      'singular_name' => 'Project',
		      'all_items' => 'All projects',
		      'add_new_item' => 'Add a project',
		      'edit_item' => 'Edit project',
		      'new_item' => 'New project',
		      'view_item' => 'See project',
		      'search_items' => 'Search project',
		      'not_found' => 'No project found',
		      'not_found_in_trash'=> 'No project in the trash'
		      ),
		    'public' => true,
		    // 'capability_type' => 'post',
		    'supports' => array(
		      'title',
		      'editor',
		      'thumbnail'
		    ),
		    'has_archive' => true,
			'menu_icon' => 'dashicons-welcome-add-page'
		  )
		);
	}
	add_action( 'init', 'create_post_type' );
///////////////////////////////////////////////////////////////////////////////

// Gallerie de projet HOMEPAGE ////////////////////////////////////////////////////////////////
function MyPosts() {


	// Ici je définis mes arguments
	$args   =   array(
				//	'category__in'  =>  array(1,2), // Publiés
					'post_type' 		=>  'project',		// Type de post
					'post_status'   =>  'publish',  // Publiés
					'orderby'       =>  'date',     // Ordonnée par date
					'order'         =>  'ASC'      // + grand au + petit
				);
	// J'effectue la requête
	$the_query = new WP_query ($args);

	// Je récupère mon template
	$i = 0;
	while ( $the_query->have_posts() ) : $the_query->the_post();
		require(TEMPLATEPATH.'/template-parts/loop-home.php');
		$i++;
	endwhile;

	// Je reste mes requêtes de post
	wp_reset_postdata();
}
add_action('MyPostAction','MyPosts',1,0);
// 	NOM DE L'ACTION / FUNCTION / PRIORITE / NOMBRE DE PARAMETRE
///////////////////////////////////////////////////////////////////////////////////
