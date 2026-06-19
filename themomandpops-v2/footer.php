<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package themomandpops
 */

?>
<section class="footer-section">

  <!-- Subscribe Section -->
  <div class="container-fluid text-center mb-5">
	  <a href="<?php echo site_url(); ?>">
		  <img src="<?php the_field('footer_logo','option'); ?>" alt="" width="335" height="168"></a>
    <h4 class="fw-bold mb-3">
      <?php the_field('subscribe_heading','option'); ?>
    </h4>

    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-12 d-flex">
        <?php echo do_shortcode('[contact-form-7 id="f9fd6f5" title="Newsletter"]'); ?>
      </div>
    </div>
  </div>

  <!-- Main Footer -->
  <div class="container-fluid paadingspace">
    <div class="row text-start">

      <!-- Quick Contact -->
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="footeradd">
        <h6 class="titlefooter"><?php the_field('contact_title','option'); ?></h6>
        <p class="mb-1"><?php the_field('phone_title','option'); ?> <a href="tel: <?php the_field('phone_no_link','option'); ?>"> <?php the_field('phone_no','option'); ?></a></p>
        <p><?php the_field('email_title','option'); ?> <a href="mailto: <?php the_field('email_id','option'); ?>"><?php the_field('email_id','option'); ?></a></p>
        </div>
      </div>


      <div class="col-lg-3 col-md-6 mb-4">
        <h6 class="titlefooter"><?php the_field('links_title','option'); ?></h6>
<?php
wp_nav_menu(
    array(
        'theme_location' => 'menu-2',
        'container'       => false, 
        'menu_class'      => 'list-unstyled',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 1,  
    )
);
?>
      </div>


      <div class="col-lg-3 col-md-6 mb-4">
          <h6 class="titlefooter"><?php the_field('popsicles_title','option'); ?></h6>
        <div class="row">
          <div class="col-12">
            <?php
wp_nav_menu(
    array(
        'theme_location' => 'menu-3', 
        'container'       => false,   
        'menu_class'      => 'list-unstyled for-col', 
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 1,   
    )
);
?>
          </div>


        </div>
      </div>

      <!-- Social -->
      <div class="col-lg-3 col-md-6 mb-4">
          <h6 class="titlefooter"><?php the_field('follow_title','option'); ?></h6>
       <div class="d-flex gap-2">
    <a href="<?php the_field('facebook_link','option'); ?>" target="_blank" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a>
    <a href="<?php the_field('instagram_link','option'); ?>" target="_blank" class="social-icon"><i class="fa-brands fa-instagram"></i></a> 
    <a href="<?php the_field('pinterest_link','option'); ?>" target="_blank" class="social-icon"><i class="fa-brands fa-pinterest"></i></a>
		   <a href="<?php the_field('twitter_link','option'); ?>" target="_blank" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a>
  </div>
      </div>

    </div>
      <div class="flex-copyright">
    <p class="mb-0"> © <?php echo date('Y'); ?> <?php the_field('footer_left_title','option'); ?></p>
    <p class="mb-0"><?php the_field('footer_right_title','option'); ?></p>
  </div>
  </div>

  <!-- Bottom Footer -->


</section>
<!-- Footer End -->











  <script src="<?php echo bloginfo('template_directory'); ?>/js/gsap3.4.js"></script>
  <script src="<?php echo bloginfo('template_directory'); ?>/js/gsap3.3.js"></script>
  <script src="<?php echo bloginfo('template_directory'); ?>/js/jquery3.4.js"></script>
  <script src="<?php echo bloginfo('template_directory'); ?>/js/fancybox3.5.js"></script>
<!--   <script src="<//?php echo bloginfo('template_directory'); ?>/js/jquery3.5.js"></script> -->
  <script src="<?php echo bloginfo('template_directory'); ?>/js/paralax1.js"></script>
  <script src="<?php echo bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo bloginfo('template_directory'); ?>/js/owl.carousel.js"></script>
  <script src="<?php echo bloginfo('template_directory'); ?>/js/flickity-docs.min.js"></script>
  <script src="<?php echo bloginfo('template_directory'); ?>/js/lightbox.js"></script>
  <script src="<?php echo bloginfo('template_directory'); ?>/js/custom.js"></script>
  <script src="<?php echo bloginfo('template_directory'); ?>/js/main.js"></script>
 
        
        <script>
    AOS.init();
  </script>

<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
	
</script>

<script>
   
const faqItems = document.querySelectorAll('.faq-item');

faqItems.forEach(item => {
const question = item.querySelector('.faq-question');

question.addEventListener('click', () => {

faqItems.forEach(faq => {
if (faq !== item) {
faq.classList.remove('active');
}
});

item.classList.toggle('active');
});
}); 

</script>





  <?php wp_footer(); ?>
    </body>
</html>
