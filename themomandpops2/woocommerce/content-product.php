<?php
defined('ABSPATH') || exit;

global $product;

if (!$product || !$product->is_visible()) {
    return;
}

// ACF color class (one, two, pops1, etc.)
$card_class = get_field('card_class');
?>

<div class="col-lg-3 col-md-6 mb-5">
  <div class="product-box">

    <div class="inner-cardflavour <?php echo esc_attr($card_class); ?>">

      <!-- Image -->
      <div class="feaforcolor">
        <a href="<?php the_permalink(); ?>">
          <?php do_action('woocommerce_before_shop_loop_item_title'); ?>
        </a>
      </div>

      <!-- Title -->
      <h5 class="titlefeaturedcad">
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h5>

      <!-- Description -->
      <p>
        <?php echo wp_trim_words(get_the_excerpt(), 10); ?>
      </p>

      <!-- Price + Rating -->
<!--       <div class="price-rating">
        <//?php do_action('woocommerce_after_shop_loop_item_title'); ?>
      </div> -->

      <!-- Button ONLY clickable -->
      <div class="banner-btn">
        <a href="<?php the_permalink(); ?>" class="button-74">
          Shop Now
        </a>
      </div>

    </div>

  </div>
</div>