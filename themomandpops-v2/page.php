<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package themomandpops
 */

get_header();
?>

	<section class="innerbanner cateringbanner defaultbanner">
    <?php
$post_id = get_the_ID();
$featured_img_url = get_the_post_thumbnail_url($post_id, 'full');

if (!empty($featured_img_url)) {
    $thumb_id = get_post_thumbnail_id($post_id);
    $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);

    if (empty($alt_text)) {
        $alt_text = get_the_title($post_id) ?: 'Image';
    }
?>
    <img src="<?php echo esc_url($featured_img_url); ?>" class="w-100 desktop" alt="<?php echo esc_attr($alt_text); ?>">
<?php } ?>
<div class="innerbannertext">
  <h1 class="innerbannertitle"><?php the_title(); ?></h1>
</div>
</section>




<section class="cateringsec1 aboutsec1 for-index" data-jarallax>
  <div class="container">
    <div class="row">
      <div class="col-md-12">

          
        <?php the_content(); ?>


      </div>
    </div>
  </div>
</section>

<?php
//get_sidebar();
get_footer();
