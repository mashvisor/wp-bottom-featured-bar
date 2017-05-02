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
$_post = wp_bottom_featured_bar_post();
if($_post != null):  ?>

<div class="bottom-featured-bar hidden-xs-mv" id="bottom-featured-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
              <div class="read-now-title"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> <?php _e('Read Now','bottom-featured-bar') ?></div>: <a class="suggested-post" href="<?php echo get_post_permalink($_post->ID); ?>"><?php echo $_post->post_title; ?> <i class="fa fa-chevron-right" aria-hidden="true"></i></a>  <a class="btn btn-primary close-bfb" id="close-bfb" onclick="close_bottom_featured_bar()"> <i class="fa fa-times" aria-hidden="true"></i> <a>
            </div>
        </div>
    </div>
</div>

<?php endif; ?>
