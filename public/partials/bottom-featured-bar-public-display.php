<?php
/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://www.mashvisor.com
 * @since      1.0.0
 *
 * @package    Bottom_Featured_Bar
 * @subpackage Bottom_Featured_Bar/public/partials
 */
?>
<?php 
global $post;
// show only if the post type is a blog post
if($post->post_type === "post"): 

$args = array( 'posts_per_page' => 5, 'orderby' => 'rand' );
$rand_posts = get_posts( $args );
foreach ( $rand_posts as $_post ) : 
var_export($_post);
  setup_postdata( $_post ); 
?> 

<div class="bottom-featured-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                Read: <a href="<?php echo get_post_permalink($_post->ID); ?>"><?php echo $_post->post_title; ?></a>  <a class="btn btn-primary"> Ok <a>
            </div>
        </div>
    </div>
</div> 

<?php 
break;
    endforeach; 
    wp_reset_postdata();  
    endif;  
?>
