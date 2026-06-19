<?php
/**
 * Template for the Dallas catering page (/dallas-paleta-catering/).
 *
 * Template Name: dallas-paleta-catering
 *
 * Cloned from catering.php (Austin) for the minimal-change / one-clone approach.
 * City-specific differences: Dallas contact NAP in the steps section (469 /
 * mike@) and the per-page Service + areaServed JSON-LD emitted from
 * inc/schema.php. Dallas is framed as a STAFFED SERVICE AREA with NO storefront
 * address (decision D4) — the location/contact blocks below are ACF-driven, so
 * fill them with service-area info, not a street address.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package themomandpops
 */

get_header();
?>

<section class="innerbanner cateringbanner">
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
<?php } else { ?>
    <img src="<?php echo bloginfo('template_directory'); ?>/images/cateringbanner.webp" alt="Catering Banner">
<?php } ?>



<div class="innerbannertext">
  <h1 class="innerbannertitle"><?php the_title(); ?></h1>
</div>
</section>




<section class="homesec4 cateringsec2">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="headhomesec4">
                    <h3 class="sametitle"><?php the_field('details_title'); ?></h3>
                </div>
              </div>



              <div class="col-lg-5 col-md-6">
                <div class="innerhomesec4">
                 <?php the_field('our_content'); ?>


                   <div class="innerhomesec4 lastlist">



                  <h5 class="titlehomesec4list"><?php the_field('perfect_title'); ?></h5>
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
                   <div class="banner-btn">

                        <a href="<?php the_field('catering_first_btn_link'); ?>" class="button-74"><?php the_field('catering_first_btn'); ?></a>  <a href="<?php the_field('catering_second_btn_link'); ?>" class="button-74"><?php the_field('catering_second_btn'); ?></a>
                    </div>
                </div>

              </div>










                  <div class="col-lg-7 col-md-6">
                    <div class="row width2imgcaterimg">
                      <div class="col-lg-6 col-md-12">
                        <div class="innerhomesec4 oneimgn">
							<?php
$details_image_id = get_field('details_first_image', false, false);
$details_image_alt = get_post_meta($details_image_id, '_wp_attachment_image_alt', true);
?>
             <img src="<?php the_field('details_first_image'); ?>" alt="<?php echo esc_attr($details_image_alt); ?>">
                </div>
                      </div>

                       <div class="col-lg-6 col-md-12">
                        <div class="innerhomesec4">
							<?php
$second_image_id = get_field('details_second_image', false, false);
$second_image_alt = get_post_meta($second_image_id, '_wp_attachment_image_alt', true);
?>
             <img src="<?php the_field('details_second_image'); ?>" alt="<?php echo esc_attr($second_image_alt); ?>">
                </div>
                      </div>
                    </div>

              </div>



              </div>
            </div>

        </section>








<section class="cateringsec1 cateringsec3 stepscountsec" data-jarallax>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
		  <div class="head-steps">


		     <h3 class="sametitle">Customize a Package
</h3>
			<p>
				We would love to cater your next event!
			</p>
		    </div>

		  <div class="row">


		  <div class="col-md-4 mb-4">
			  <div class="inner-stepscard">
<h4 class="titlestepscards">Choose Your Quantity of Pops</h4>
<ul>
	<li>1 – 1000 = $2.20</li>
	<li>1000 + = Call for pricing</li>
					  </ul>


			  </div>
		  </div>


		   <div class="col-md-4 mb-4">
			  <div class="inner-stepscard">
<h4 class="titlestepscards">Choose Your Cart</h4>
<ul>
	<li>Small Paleta Cart = $75 (holds up to 150 pops)</li>
	<li>Medium Pop Cart = $85 (holds up to 700 pops)</li>
	<li>Large Pop Cart = $100 (holds up to 2000 pops)</li>
					  </ul>


			  </div>
		  </div>


		   <div class="col-md-4 mb-4">
			  <div class="inner-stepscard">
<h4 class="titlestepscards">Choose Other Options</h4>
<ul>
	<li>Custom labels for pops</li>
	<li>Custom graphics for pop carts</li>
	<li>Pop Star attendant to hand out pops</li>
					  </ul>


			  </div>
		  </div>

       </div>





          <div class="banner-btn">

                       <a href="tel: +14698661417" class="button-74">(469) 866-1417</a>  <a href="mailto: mike@lovemomandpops.com" class="button-74">mike@lovemomandpops.com</a>
                    </div>

      </div>
    </div>
  </div>
</section>




<?php
// P2A — quote form embedded from an ACF field holding the Gravity Forms shortcode
// (not hardcoded), so the form can be set/swapped per page in wp-admin.
$quote_shortcode = get_field('quote_form_shortcode');
if ( $quote_shortcode ) : ?>
<section class="mp-quote-form" id="quote">
  <div class="container">
    <?php if ( get_field('quote_form_heading') ) : ?>
      <h3 class="sametitle"><?php the_field('quote_form_heading'); ?></h3>
    <?php endif; ?>
    <?php if ( get_field('quote_form_intro') ) : ?>
      <div class="mp-quote-form__intro"><?php the_field('quote_form_intro'); ?></div>
    <?php endif; ?>
    <div class="mp-quote-form__form">
      <?php echo do_shortcode( $quote_shortcode ); ?>
    </div>
  </div>
</section>
<?php endif; ?>


<section class="cateringsec4" data-jarallax>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="headsec3cate">
           <h3 class="sametitle"><?php the_field('where_title'); ?></h3>
        </div>
      </div>





		<div class="col-md-6 mb-4">
			<div class="innerloactionbox1 listingcatering4">
				    <ul>


			<?php
if( have_rows('location_rep') ):
    while( have_rows('location_rep') ) : the_row();
    $sub_value = get_sub_field('sub_field');
    ?>

          <li>

            <div class="flex-boxlistcate4">
              <div class="box1list">
                <img src="<?php echo bloginfo('template_directory'); ?>/images/locationicon.webp">
              </div>

                <div class="box1list2">
               <h5 class="titlelistcate4"><?php the_sub_field('loction_title'); ?></h5>
               <p><a href="<?php the_sub_field('address_link'); ?>" target="_blank"><?php the_sub_field('address'); ?></a></p>
              </div>
            </div>

          </li>
       <?php
endwhile;
else :
endif;
?>


        </ul>
			</div>
		</div>

	<div class="col-md-6 mb-4">

			<div class="innerloactionbox2 listingcatering4">
				<h3 class="titleloactionright">
					<?php the_field('now_title'); ?>
				</h3>
				<?php the_field('we_are_content'); ?>

				<span class="titlerightloaction"><?php the_field('contact_heading'); ?></span>
				<div class="banner-btn">

                        <a href="tel: <?php the_field('now_no_link'); ?>" class="button-74"><?php the_field('now_no'); ?></a>  <a href="mailto: <?php the_field('now_email_id'); ?>" class="button-74"><?php the_field('now_email_id'); ?></a>
                    </div>

			</div>
		</div>






      </div>




  </div>
</section>

<?php
// Cross-link to the Austin page (P3.3 / P3.7). ACF-driven with a Dallas->Austin default.
$xlink_url  = get_field('cross_link_url') ?: '/catering/';
$xlink_text = get_field('cross_link_text') ?: 'Planning an event in the Austin area? See our Austin paleta catering.';
$xlink_cta  = get_field('cross_link_cta') ?: 'Austin Paleta Catering';
if ( $xlink_url ) : ?>
<section class="mp-crosslink">
  <div class="container">
    <p class="mp-crosslink__text"><?php echo esc_html($xlink_text); ?></p>
    <a href="<?php echo esc_url($xlink_url); ?>" class="mp-btn-secondary"><?php echo esc_html($xlink_cta); ?></a>
  </div>
</section>
<?php endif; ?>

<?php
//get_sidebar();
get_footer();
