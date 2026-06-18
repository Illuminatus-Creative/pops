<?php
/**
 * The template for displaying all pages
 * Template Name: our-story
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
    <img src="<?php echo bloginfo('template_directory'); ?>/images/abtbanner.webp" alt="About Banner">
<?php } ?>
    
<div class="innerbannertext">
  <h1 class="innerbannertitle"><?php the_title(); ?></h1>
</div>
</section>




<section class="cateringsec1 aboutsec1" data-jarallax>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="inner-caterngsec1">
          <h3 class="sametitle"><?php the_field('story_title'); ?></h3>
         <?php the_field('the_content'); ?>

         
        </div>
      </div>
    </div>
  </div>
</section>









<section class="homesec4 cateringsec2 aboutsec2">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="headhomesec4">
                    <h3 class="sametitle"><?php the_field('popsocology_title'); ?></h3>
                </div>
              </div>


       
              <div class="col-lg-5 col-md-12">
                <div class="innerhomesec4">
                 <?php the_field('popsocology_content'); ?>

                 

                   <div class="banner-btn">
                 
                        <a href="<?php the_field('order_btn_link'); ?>" class="button-74"><?php the_field('order_btn'); ?></a>
                    </div>
                  
                </div>
              </div>









              
                  <div class="col-lg-7 col-md-12">
                    <div class="row width2imgcaterimg">
                      <div class="col-md-6">
                        <div class="innerhomesec4">
							<?php
$popsocology_image_id = get_field('popsocology_first_image', false, false);
$popsocology_image_alt = get_post_meta($popsocology_image_id, '_wp_attachment_image_alt', true);
?>
             <img src="<?php the_field('popsocology_first_image'); ?>" alt="<?php echo esc_attr($popsocology_image_alt); ?>">
                </div>
                      </div>

                       <div class="col-md-6">
                        <div class="innerhomesec4">
							<?php
$secon_image_id = get_field('popsocology_second_image', false, false);
$secon_image_alt = get_post_meta($secon_image_id, '_wp_attachment_image_alt', true);
?>
             <img src="<?php the_field('popsocology_second_image'); ?>" alt="<?php echo esc_attr($secon_image_alt); ?>">
                </div>
                      </div>
                    </div>
             
              </div>



              </div>
            </div>
       
        </section>








<section class="cateringsec1 cateringsec3 aboutsec3" data-jarallax>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="inner-caterngsec1">
          <h3 class="sametitle"><?php the_field('responsible_title'); ?>
</h3>
        <?php the_field('we_love_contnet'); ?>

         

         
        </div>
      </div>
    </div>
  </div>
</section>




<section class="cateringsec4 aboutsec4" data-jarallax>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="headsec3cate">
           <h3 class="sametitle"><?php the_field('where_find_title'); ?></h3>
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
               <h5 class="titlelistcate4"><?php the_sub_field('location_title'); ?></h5>
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
//get_sidebar();
get_footer();