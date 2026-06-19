<?php
/**
 * Reusable social-proof / reviews component (spec §1A).
 *
 * Reviews are curated in an ACF Repeater on the Options page (so the same set
 * can render on the homepage and the city catering pages). Humans-only:
 * deliberately NO Review/AggregateRating JSON-LD — self-serving review markup
 * on your own pages is restricted by Google and can trigger warnings.
 *
 * ACF (Options): social_proof_heading (text), social_proof_google_url (url),
 * social_proof_reviews (repeater) -> reviewer_name, rating (1-5), review_text,
 * review_date (optional), source_url (optional). See docs/staging-todo.md.
 *
 * @package themomandpops
 */

if ( ! function_exists( 'have_rows' ) || ! have_rows( 'social_proof_reviews', 'option' ) ) {
	return;
}

$sp_heading    = get_field( 'social_proof_heading', 'option' ) ?: 'What our customers say';
$sp_google_url = get_field( 'social_proof_google_url', 'option' ) ?: 'https://www.google.com/maps/place/Mom+%26+Pops+All+Natural+Frozen+Pops/';
?>
<section class="mp-social-proof">
  <div class="container">
    <h3 class="sametitle mp-social-proof__heading"><?php echo esc_html( $sp_heading ); ?></h3>

    <div class="mp-social-proof__grid">
      <?php
		while ( have_rows( 'social_proof_reviews', 'option' ) ) :
			the_row();
			$sp_name   = get_sub_field( 'reviewer_name' );
			$sp_rating = max( 0, min( 5, (int) get_sub_field( 'rating' ) ) );
			$sp_text   = get_sub_field( 'review_text' );
			$sp_date   = get_sub_field( 'review_date' );
			$sp_src    = get_sub_field( 'source_url' );
		?>
      <article class="mp-review-card">
		<?php if ( $sp_rating ) : ?>
        <div class="mp-review-card__stars" role="img" aria-label="<?php echo esc_attr( $sp_rating ); ?> out of 5 stars">
			<?php echo esc_html( str_repeat( '★', $sp_rating ) . str_repeat( '☆', 5 - $sp_rating ) ); ?>
        </div>
		<?php endif; ?>

		<?php if ( $sp_text ) : ?>
        <p class="mp-review-card__text"><?php echo esc_html( $sp_text ); ?></p>
		<?php endif; ?>

        <p class="mp-review-card__meta">
			<?php if ( $sp_name ) : ?><span class="mp-review-card__name"><?php echo esc_html( $sp_name ); ?></span><?php endif; ?>
			<?php if ( $sp_date ) : ?><span class="mp-review-card__date"><?php echo esc_html( $sp_date ); ?></span><?php endif; ?>
        </p>

		<?php if ( $sp_src ) : ?>
        <a class="mp-review-card__source" href="<?php echo esc_url( $sp_src ); ?>" target="_blank" rel="noopener nofollow">Read on Google</a>
		<?php endif; ?>
      </article>
		<?php endwhile; ?>
    </div>

    <div class="mp-social-proof__cta">
      <a href="<?php echo esc_url( $sp_google_url ); ?>" class="mp-btn-secondary" target="_blank" rel="noopener nofollow">See all reviews on Google</a>
    </div>
  </div>
</section>
