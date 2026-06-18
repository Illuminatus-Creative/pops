<?php
defined('ABSPATH') || exit;

global $product;

do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form();
    return;
}

?>

<!-- Product Details Section -->
<section class="flavour-details" data-jarallax>
  <div class="container">
    <div class="row">

      <!-- Image -->
      <div class="col-md-6">
        <div class="innerflavour-details">
          <?php echo woocommerce_get_product_thumbnail('large'); ?>
        </div>
      </div>

      <!-- Content -->
      <div class="col-md-6">
        <div class="innerflavour-details rightside">

          <!-- Title -->
          <h1 class="titledetails"><?php the_title(); ?></h1>

          <!-- Price -->
          <span class="pricedetails"><?php echo $product->get_price_html(); ?></span>

          <!-- Description -->
          <p><?php echo get_the_excerpt(); ?></p>

          <!-- Quantity + Add to Cart -->
          <div class="quantity-and-cart">
            <!-- Quantity Selector -->
            <div class="selectdetailsfla">
              <span class="selecttitle">Select Quantity</span>
            </div>

            <!-- Add to Cart Button -->
            <div class="banner-btn">
              <?php 
              // Ensure product is purchasable and in stock
              if ( $product->is_in_stock() && $product->is_purchasable() ) {
                  woocommerce_template_single_add_to_cart();
              } else {
                  echo '<button disabled class="button disabled">Out of Stock</button>';
              }
              ?>
            </div>
          </div>

          <!-- Extra Dropdown (Static / ACF optional) -->
<!--           <div class="selectdetailsfla2">
            <select>
              <option>Product Information</option>
              <option>Additional Info</option>
              <option>Ingredients</option>
            </select>
          </div> -->

        </div>
      </div>

    </div>
  </div>
</section>

<!-- Related Products -->
<section class="related-products" data-jarallax>
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-12">
        <div class="head-relatedpro">
          <h3 class="titlereltaedpro">Related Products</h3>
        </div>
      </div>

      <?php
      // Get related products
      $related_products = wc_get_related_products( $product->get_id(), 4 );

      if ( ! empty( $related_products ) ) {

        foreach ( $related_products as $related_id ) {

          $related_product = wc_get_product( $related_id );
			$card_class = get_field('card_class');
          ?>

          <div class="col-lg-3 col-md-6">
            <div class="product-box">
              <?php 
$related_card_class = get_field('card_class', $related_id); 
?>

<div class="inner-cardflavour <?php echo esc_attr($related_card_class); ?>">

                <div class="feaforcolor">
                  <a href="<?php echo get_permalink( $related_id ); ?>">
                    <?php echo $related_product->get_image(); ?>
                  </a>
                </div>

                <h5 class="titlefeaturedcad">
                  <a href="<?php echo get_permalink( $related_id ); ?>">
                    <?php echo $related_product->get_name(); ?>
                  </a>
                </h5>

                <div class="banner-btn">
                  <a href="<?php echo get_permalink( $related_id ); ?>" class="button-74">
                    Shop Now
                  </a>
                </div>

              </div>
            </div>
          </div>

          <?php
        }
      } else {
        echo '<p>No related products found.</p>';
      }
      ?>

    </div>
  </div>
</section>