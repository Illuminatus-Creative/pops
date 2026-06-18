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


<div class="banner-btn">
                        <a href="<?php the_field('banner_first_btn_link'); ?>" class="button-74"><?php the_field('banner_first_btn'); ?></a>
                        <a href="<?php the_field('banner_second_btn_link'); ?>" class="button-74"><?php the_field('banner_second_btn'); ?></a>
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







<!--         <section class="homesec2" data-jarallax>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="headhomesec2">
                  <h3 class="sametitle"><//?php the_field('featured_title'); ?></h3>
                </div>
              </div>


 <div class="banner-slider owl-carousel" id="team-slid2">
	     <//?php
$args = array(
    'post_type'      => 'product',
    'posts_per_page' => 10,
    'tax_query'      => array(
        array(
            'taxonomy' => 'product_visibility',
            'field'    => 'name',
            'terms'    => 'featured',
        ),
    ),
);

$featured_products = new WP_Query($args);

if ($featured_products->have_posts()) :
    while ($featured_products->have_posts()) : $featured_products->the_post();
        global $product; 
	 $card_class = get_field('card_class');
?>
        <div class="product-box">
            <div class="inner-cardflavour <//?php echo esc_attr($card_class); ?>">
                <div class="feaforcolor">
					 <a href="<//?php the_permalink(); ?>">
                    <//?php 
                    
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('medium', array('alt' => get_the_title()));
                    } else {
                        echo '<img src="' . get_template_directory_uri() . '/images/pop3.webp" alt="' . get_the_title() . '">'; 
                    }
                    ?>
					</a>
                </div>

				<h5 class="titlefeaturedcad"><a href="<//?php the_permalink(); ?>"><//?php the_title(); ?></a></h5>

                <div class="banner-btn">
                    <a href="<//?php the_permalink(); ?>" class="button-74">Shop Now</a>
                </div>
            </div>
        </div>
<//?php
    endwhile;
    wp_reset_postdata();
else :
    echo '<p>No featured products found.</p>'; 
endif;
?>

                </div>

<div class="viewbox">
 <a href="<//?php the_field('featured_btn_link'); ?>"><h4 class="textviewallfea"><//?php the_field('featured_btn'); ?></h4></a>
    </div>    

    </div>
          
            </div>

        </section> -->









        <section class="homesec3">
         <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="inner-homesec3">
                <h3 class="sametitle"><?php the_field('about_title'); ?></h3>
                <?php the_field('the_story_content'); ?>
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













        
<!--         <section class="homesec2 homesec5" data-jarallax>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="headhomesec2">
                  <h3 class="sametitle"><//?php the_field('popular_title'); ?></h3>
                </div>
              </div>


 <div class="banner-slider owl-carousel" id="team-slid3">
<//?php

$args = array(
    'post_type'      => 'product', 
    'posts_per_page' => 12,       
    'orderby'        => 'date',   
    'order'          => 'ASC'     
);


$query = new WP_Query($args);

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        global $product;
	 $card_class = get_field('card_class');
        ?>
        <div class="product-box">
            <div class="inner-cardflavour <//?php echo esc_attr($card_class); ?>">
                <div class="feaforcolor">
					 <a href="<//?php the_permalink(); ?>" >
                    <//?php 
                   
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('medium');
                    } else {
                        echo '<img src="' . get_bloginfo('template_directory') . '/images/featuredimg1.webp" alt="Product Image">';
                    }
                    ?>
					</a>
                </div>

				<a href="<//?php the_permalink(); ?>"><h5 class="titlefeaturedcad"><//?php the_title(); ?></h5></a>
                
                <div class="banner-btn">
                    <a href="<//?php the_permalink(); ?>" class="button-74">Shop Now</a>
                </div>
            </div>
        </div>
        <//?php
    endwhile;
else :
    echo 'No products found';
endif;


wp_reset_postdata();
?>      


                

                </div>

<div class="viewbox">
 <a href="<//?php the_field('popular_btn_link'); ?>"><h4 class="textviewallfea"><//?php the_field('popular_btn'); ?></h4></a>
    </div>    



    </div>


              
            </div>
       
        </section> -->

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