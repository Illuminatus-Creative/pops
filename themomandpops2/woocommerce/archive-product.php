<?php
defined( 'ABSPATH' ) || exit;
  get_header( 'shop' );
/**
 * Hook: woocommerce_before_main_content
 */
do_action( 'woocommerce_before_main_content' );

/**
 * Hook: woocommerce_shop_loop_header
 */
do_action( 'woocommerce_shop_loop_header' );
?>
<!-- Banner Section -->
<section class="innerbanner flavorbanner">
<img src="<?php echo bloginfo('template_directory'); ?>/images/flavourbanner.webp">
<div class="innerbannertext">
  <h1 class="innerbannertitle"> <?php woocommerce_page_title(); ?></h1>
</div>
</section>


  <!-- CUSTOM GRID -->
  <section class="flavoursec1">
    <div class="container-fluid">
		<div class="fix-width">
			
		
      <div class="row">
		  
		  <div class="filter-sort">
	

<?php if ( woocommerce_product_loop() ) : ?>

  <?php
  /**
   * Hook: woocommerce_before_shop_loop
   */
  do_action( 'woocommerce_before_shop_loop' );
  ?>
</div>

        <?php if ( wc_get_loop_prop( 'total' ) ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>

            <?php
            /**
             * Hook: woocommerce_shop_loop
             */
            do_action( 'woocommerce_shop_loop' );

            wc_get_template_part( 'content', 'product' );
            ?>

          <?php endwhile; ?>
        <?php endif; ?>

      </div>
			</div>
    </div>
  </section>

  <?php
  /**
   * Hook: woocommerce_after_shop_loop
   */
  do_action( 'woocommerce_after_shop_loop' );
  ?>

<?php else : ?>

  <?php
  /**
   * Hook: woocommerce_no_products_found
   */
  do_action( 'woocommerce_no_products_found' );
  ?>

<?php endif; ?>

<?php
/**
 * Hook: woocommerce_after_main_content
 */
do_action( 'woocommerce_after_main_content' );

/**
 * Hook: woocommerce_sidebar
 */
/**
 *do_action( 'woocommerce_sidebar' );
*/
get_footer( 'shop' );