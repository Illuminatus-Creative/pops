<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package themomandpops
 */

get_header();
?>


<section class="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="row justify-content-center">

		<?php if ( have_posts() ) : ?>

						<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
	//			get_template_part( 'template-parts/content', 'search' );
	//			
?>
		
		 <div class="col-lg-6 mb-5 col-md-6">
                            <div class="blog-inner">

                                <div class="card-feel-sung">
                                    <article class="article">
                                        <div class="card-headereven">
                                            <div class="hgroup">
                                                <div class="category">
													<h3 class="blogtitle"><a href="<?php the_permalink(); ?>">Lorem, ipsum dolor sit amet consectetur.</a></h3>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="visual">
											<a href="<?php the_permalink(); ?>">
												<?php
    if (!empty($featured_image123)) {
     
        $thumb_id = get_post_thumbnail_id(get_the_ID());
        $alt_text = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
        ?>
        <img src="<?php echo $featured_image123; ?>" class="w-100" alt="<?php echo esc_attr($alt_text); ?>">
    <?php } else { ?>
        <img src="<?php echo bloginfo('template_directory'); ?>/images/blogimg1.jpg" alt="" width="" height="" class="img">
    <?php } ?>	
                                            
											</a>
                                        </div>

                                        <div class="title">
                                            <p><?php echo wp_trim_words( get_the_content(), 12); ?> </p>

<div class="banner-btn">
                 
                        <a href="<?php the_permalink(); ?>" class="button-74">Read More</a>
                    </div>

                                        </div>

                                    </article>
                                </div>


                            </div>
                        </div>
<?php

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
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
