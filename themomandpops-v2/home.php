<?php
/**
 * The template for displaying all pages
 * Template Name: home
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


<section class="homebanner">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-7">
                <div class="inner-homebanner">
                  <div class="hometitlewidth">
                  <h1 class="homebannertitle">
                    <?php the_field('banner_title'); ?>
                  </h1>
                  </div>
                  <p>
                 <?php the_field('banner_desc'); ?>
                  </p>


<?php
// P1.3 — ranked buyer paths (one primary action; secondary + tertiary beside it).
// ACF-driven with defaults so the hero renders before final copy (input A) lands.
$cta1_label = get_field('banner_first_btn') ?: 'Catering in Austin & Dallas';
$cta1_link  = get_field('banner_first_btn_link') ?: '/catering/';
$cta2_label = get_field('banner_second_btn') ?: 'Order Pops — Ships Nationwide';
$cta2_link  = get_field('banner_second_btn_link') ?: '/shop/';
$cta3_label = get_field('banner_third_btn') ?: 'Find Us in Austin';
$cta3_link  = get_field('banner_third_btn_link') ?: '/find-us/';
?>
<div class="hero-cta">
    <a href="<?php echo esc_url($cta1_link); ?>" class="mp-btn-primary"><?php echo esc_html($cta1_label); ?></a>
    <a href="<?php echo esc_url($cta2_link); ?>" class="mp-btn-secondary"><?php echo esc_html($cta2_label); ?></a>
    <a href="<?php echo esc_url($cta3_link); ?>" class="mp-btn-tertiary"><?php echo esc_html($cta3_label); ?></a>
</div>

                </div>
              </div>


<div class="col-md-5">
                <div class="inner-homebannerright">
                
                  <div class="circlebanner">
					  <?php
$banner_image_id = get_field('banner_ice_image', false, false);
$banner_image_alt = get_post_meta($banner_image_id, '_wp_attachment_image_alt', true);
?>
              <img src="<?php the_field('banner_ice_image'); ?>" width="398" height="526" alt="<?php echo esc_attr($banner_image_alt); ?>">
                 
             
                   


</div>


                </div>
              </div>

            </div>
          </div>
        </section>

        <?php get_template_part( 'template-parts/components/social-proof' ); ?>

        <section class="homesec3">
         <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="inner-homesec3">
                <h3 class="sametitle"><?php the_field('about_title'); ?></h3>
                <?php the_field('the_story_content'); ?>
<?php
// P1.5 / D5 — emphasized testimonial pull-quote inside About (not a new band). Renders only if filled.
$home_quote    = get_field('home_testimonial_quote');
$home_quote_by = get_field('home_testimonial_attribution');
if ( $home_quote ) : ?>
<blockquote class="mp-pullquote">
  <p class="mp-pullquote__text"><?php echo esc_html($home_quote); ?></p>
  <?php if ( $home_quote_by ) : ?><cite class="mp-pullquote__cite"><?php echo esc_html($home_quote_by); ?></cite><?php endif; ?>
</blockquote>
<?php endif; ?>
<div class="banner-btn">
                 
                        <a href="<?php the_field('about_btn_link'); ?>" class="button-74"><?php the_field('about_btn'); ?></a>
                    </div>
              </div>
            </div>
          </div>
         </div>

        </section>


        <section class="homesec4 shapenone">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="headhomesec4">
                    <h3 class="sametitle"><?php the_field('bring_title'); ?></h3>
                </div>
              </div>


       
              <div class="col-lg-4 col-md-6">
                <div class="innerhomesec4">
                  <?php the_field('our_content'); ?>
                  <div class="banner-btn">
                 
                        <a href="<?php the_field('bring_btn_link'); ?>" class="button-74"><?php the_field('bring_btn'); ?></a>
                    </div>
                </div>
              </div>


                  <div class="col-lg-4 col-md-6">
                <div class="innerhomesec4">
					<?php
$bring_image_id = get_field('bring_center_image', false, false);
$bring_image_alt = get_post_meta($bring_image_id, '_wp_attachment_image_alt', true);
?>
             <img src="<?php the_field('bring_center_image'); ?>" width="487" height="704" alt="<?php echo esc_attr($bring_image_alt); ?>">
                </div>
              </div>

                  <div class="col-lg-4 col-md-12">
                <div class="innerhomesec4 lastlist">
          


                  <h5 class="titlehomesec4list"><?php the_field('perfect_heading'); ?></h5>
                  <ul>
					  <?php
if( have_rows('perfect_list_rep') ):
    while( have_rows('perfect_list_rep') ) : the_row();
    $sub_value = get_sub_field('sub_field');
    ?>

                    <li><?php the_sub_field('perfect_list'); ?></li>
					  <?php
endwhile;
else :
endif;
?>

                  </ul>

                </div>
              </div>



              </div>
            </div>
       
        </section>


        <section class="homesec6" data-jarallax>
          <div class="container-fluid">
<div class="row align-items-center">
  <div class="col-md-3 p-0">
    <div class="innerhomesec6 onegreen">
		<?php
$bulk_image_id = get_field('bulk_left_side_image', false, false);
$bulk_image_alt = get_post_meta($bulk_image_id, '_wp_attachment_image_alt', true);
?>
      <img src="<?php the_field('bulk_left_side_image'); ?>" width="445" height="779" alt="<?php echo esc_attr($bulk_image_alt); ?>">
    </div>
  </div>

   <div class="col-md-5">
    <div class="innerhomesec6">
      <div class="inner-homesec3">
                <h3 class="sametitle"><?php the_field('bulk_title'); ?>
</h3>
<?php the_field('panning_content'); ?>
<div class="banner-btn">
                 
                        <a href="<?php the_field('order_btn_link'); ?>" class="button-74"><?php the_field('order_btn'); ?></a>  <a href="<?php the_field('contact_btn_link'); ?>" class="button-74"><?php the_field('contact_btn'); ?></a>
                    </div>
              </div>
    </div>
  </div>


   <div class="col-md-4">
    <div class="innerhomesec6 rightlast">
		<?php
$right_image_id = get_field('bulk_right_side_image', false, false);
$right_image_alt = get_post_meta($right_image_id, '_wp_attachment_image_alt', true);
?>
      <img src="<?php the_field('bulk_right_side_image'); ?>" width="652" height="887" alt="<?php echo esc_attr($right_image_alt); ?>">
    </div>
  </div>
</div>
          </div>
        </section>


<?php
//get_sidebar();
get_footer();