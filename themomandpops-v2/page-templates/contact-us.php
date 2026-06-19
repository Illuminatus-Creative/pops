<?php
/**
 * The template for displaying all pages
 * Template Name: contact us
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
    <img src="<?php echo bloginfo('template_directory'); ?>/images/contactbanner.webp" alt="About Banner">
<?php } ?>
<div class="innerbannertext">
  <h1 class="innerbannertitle">Contact Us</h1>
</div>
</section>




<section class="cateringsec1 contactsec1" data-jarallax>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="inner-caterngsec1 formcontact">
          <h3 class="sametitle"><?php the_field('send_title'); ?></h3>
       


          <?php echo do_shortcode('[contact-form-7 id="55cd1de" title="Contact"]'); ?>





        </div>
      </div>
    </div>
  </div>
</section>









<section class="homesec4 cateringsec2 contactsec2">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="headhomesec4">
                    <h3 class="sametitle"><?php the_field('have_title'); ?></h3>
                    <h5 class="bluetextcontactsec2"><?php the_field('feel_title'); ?></h5>
                </div>
              </div>

<div class="add-text-sec">
				
       <div class="row widthcaontactadd">
              <div class="col-md-6">
                <div class="contactsec2addbox">
               <h4 class="addresstitle addresstitle2">
		<?php the_field('austin_title'); ?>
	</h4>

<p><b><?php the_field('phone_title'); ?></b> <a href="tel: <?php the_field('phone_no_link'); ?>"><?php the_field('phone_no'); ?></a></p>
					
<p>
	
	<b><?php the_field('email_title'); ?></b> <a href="mailto: <?php the_field('email_id'); ?>"><?php the_field('email_id'); ?></a></p>
                  
                </div>
              </div>


                <div class="col-md-6">
                <div class="contactsec2addbox">
               <h4 class="addresstitle addresstitle2">
		<?php the_field('dallas_title'); ?>
	</h4>
					<p><b><?php the_field('phone_title'); ?></b> <a href="tel: <?php the_field('dallas_phn_no_link'); ?>"><?php the_field('dallas_phn_no'); ?></a></p>
				
<p>

	<b><?php the_field('email_title'); ?></b> <a href="mailto: <?php the_field('dallas_email_id'); ?>"><?php the_field('dallas_email_id'); ?></a></p>
                  
                </div>
              </div>
</div>

</div>
				
				
				
				
			






              
                 


              </div>
            </div>
       
        </section>



<section class="cateringsec4 contactsec3" data-jarallax>
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