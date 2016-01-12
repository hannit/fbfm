<?php
function fbfm_news_cpt() {
    $labels = array(
        'name'                  => _x( 'News', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'News Item', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'News', 'text_domain' ),
        'name_admin_bar'        => __( 'News', 'text_domain' ),
        'archives'              => __( 'Item Archives', 'text_domain' ),
        'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
        'all_items'             => __( 'All Items', 'text_domain' ),
        'add_new_item'          => __( 'Add New Item', 'text_domain' ),
        'add_new'               => __( 'Add New', 'text_domain' ),
        'new_item'              => __( 'New Item', 'text_domain' ),
        'edit_item'             => __( 'Edit Item', 'text_domain' ),
        'update_item'           => __( 'Update Item', 'text_domain' ),
        'view_item'             => __( 'View Item', 'text_domain' ),
        'search_items'          => __( 'Search Item', 'text_domain' ),
        'not_found'             => __( 'Not found', 'text_domain' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
        'featured_image'        => __( 'Featured Image', 'text_domain' ),
        'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
        'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
        'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
        'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
        'items_list'            => __( 'Items list', 'text_domain' ),
        'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
        'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'News Item', 'text_domain' ),
        'description'           => __( 'Post Type Description', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'revisions', ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'				=> 'dashicons-media-document',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,        
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'news', $args );


}
add_action( 'init', 'fbfm_news_cpt', 0 );

function news_slider() { ?>
	<div class="news-slider">
        <ul>
        <?php
        $news = new WP_Query(array('post_type' => 'news', 'posts_per_page' => 3));
        if ($news->have_posts()): while($news->have_posts()): $news->the_post();
        	echo "<li>";
            echo "<p>".get_the_title()."</p>";
            echo '<a class="small" href="#">('.get_the_time('d F, Y | h:a').")</a>";
            the_content();
        	echo "</li>";
        endwhile; endif; ?>
        </ul>
    </div>
    <?php
    wp_reset_postdata();
}