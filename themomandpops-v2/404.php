<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package themomandpops
 */

get_header();
?>

	    <div class="page-not-found">
        <h3><span>404</span></h3>
        
        <h5>Page Not Found</h5>
        <p>Sorry, we couldn’t find the page you are looking for</p>
      <div class="banner-btn">
                 
                        <a href="<?php echo site_url(); ?>" class="button-74">Go Back Home</a>
                    </div>
                    
    </div>

<?php
get_footer();
