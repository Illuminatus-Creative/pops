<?php
/**
 * The template for displaying all pages
 * Template Name: blog
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

<section class="blog-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="row justify-content-center">

						
							<?php 
	 $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
 $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 12,'order' => 'desc','paged'=>$paged) ); 
 while ( $loop->have_posts() ) : $loop->the_post();
$featured_image123=get_the_post_thumbnail_url($post->ID,'full');
		   ?>
                        <div class="col-lg-6 mb-5 col-md-6">
                            <div class="blog-inner">

                                <div class="card-feel-sung">
                                    <article class="article">
                                        <div class="card-headereven">
                                            <div class="hgroup">
                                                <div class="category">
													<h3 class="blogtitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
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
						<?php endwhile; ?> 
							<ul class="pagination">
            <?php
    $total_pages = $loop->max_num_pages;
    if ($total_pages > 1){
      $current_page = max(1, get_query_var('paged'));
      echo paginate_links(array(
        'base' => get_pagenum_link(1) . '%_%',
        'format' => '/page/%#%',
        'current' => $current_page,
        'total' => $total_pages,
        'type' => 'list', 
        'prev_text'    => __('«'),
        'next_text'    => __('»'),
        'add_args'  => array()
      ));
    }
      ?>
          </ul>           
    

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