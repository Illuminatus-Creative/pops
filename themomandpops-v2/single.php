<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package themomandpops
 */

get_header();
?>

	<section class="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="row">
                        <div class="blog-details">
                           <?php 
                    $thumbnail_id = get_post_thumbnail_id(get_the_ID());
                    $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);

                    if (empty($alt_text)) {
                        $alt_text = 'Blog Image';
                    }

                    if (!empty($thumbnail_id)) { 
                        echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'desktop', 'alt' => esc_attr($alt_text)));
                    } else { ?>
						<?php } ?>

                            <div class="content-blog-details">

                                <h3 class="blog3"><?php the_title(); ?></h3>

                                <?php the_content(); ?>
                            </div>




                        </div>



                    

                    </div>
                </div>





                <div class="col-lg-4 col-md-4">
                    <div class="search-blog-main">


                        <div class="search-box-blog">


                            <div class="wp-block-search__inside-wrapper ">
                                 <?php get_sidebar(); ?>
                            </div>

                        </div>


                        <div class="categories-sec-blog">
                            <h3>Latest Post</h3>
                            <ul>
 <?php
		   $arg = array("post_type"=>"post");
		   $query = new WP_Query($arg);
		   while ($query-> have_posts()) : $query->the_post();
		   ?>	
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
  <?php endwhile; ?>   


                            </ul>

                        </div>




                    </div>
                </div>



            </div>
        </div>
    </section>


<?php
//get_sidebar();
get_footer();
