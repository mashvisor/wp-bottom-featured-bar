<?php 


/**
* Define the core functionality of the plugin.
*
* Set the plugin name and the plugin version that can be used throughout the plugin.
* Load the dependencies, define the locale, and set the hooks for the admin area and
* the public-facing side of the site.
*
* @since    1.0.0
*/
function wp_bottom_featured_bar_post() {
    global $post;
    // show only if the post type is a blog post
    if($post && $post->post_type != "post")
        return null;

    // load categories 
    $categories = wp_get_post_categories($post->ID);
    $args = array( 'posts_per_page' => 5, 'orderby' => 'rand', 'exclude' => $post->ID ); 

    if ( $count = count($categories) > 0 ) {
       if ( $count == 1 && $categories[0] == 1) {
            // ignore the filter.
        } else {
            $args['category'] = implode($categories, ",");
        }
    }

    $rand_posts = get_posts( $args );

    return $rand_posts[0];
}