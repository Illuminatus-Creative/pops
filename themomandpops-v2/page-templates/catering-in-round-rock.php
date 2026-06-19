<?php
/**
 * The template for displaying all pages
 * Template Name: catering-in-round-rock
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
    <img src="<?php echo bloginfo('template_directory'); ?>/images/cateringbanner.webp" alt="Catering Banner">
<?php } ?>


   
<div class="innerbannertext">
  <h1 class="innerbannertitle"><?php the_title(); ?></h1>
</div>
</section>



<!-- 
<section class="cateringsec1" data-jarallax>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="inner-caterngsec1">
          <h3 class="sametitle"><//?php the_field('catering_title'); ?></h3>
          <//?php the_field('make_desc'); ?>

          <div class="banner-btn">
                 
                        <a href="<//?php the_field('catering_first_btn_link'); ?>" class="button-74"><//?php the_field('catering_first_btn'); ?></a>  <a href="<//?php the_field('catering_second_btn_link'); ?>" class="button-74"><//?php the_field('catering_second_btn'); ?></a>
                    </div>
        </div>
      </div>
    </div>
  </div>
</section> -->









<section class="homesec4 cateringsec2">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="headhomesec4">
                    <h2 class="sametitle">Corporate Catering Round Rock Services</h2>
                </div>
              </div>


       
              <div class="col-lg-5 col-md-6">
                <div class="innerhomesec4">
                <p>At Love Mom and Pops, we bring a refreshing twist to corporate events with handcrafted frozen treats that delight guests of all ages. If you're arranging a staff appreciation party, office celebration, networking function, product launch or a client function, our exclusive dessert catering solutions make sure you create unique experiences!</p>
					
					<p>We use fresh fruit, natural ingredients, and authentic flavors to create our colorful paletas. All frozen desserts are prepared by hand to offer a tasty and soothing refreshment that's superior to the normal dessert. Love Mom and Pops is a corporate catering Round Rock provider that businesses can rely on for top-notch quality, professionalism, and excellent customer service.</p>


                  <div class="banner-btn">
					  <a href="/contact/" class="button-74">Get a Quote</a>
					  <a href="/flavors/" class="button-74">View Flavors</a>
                    </div>
                </div>
				 
              </div>









              
                  <div class="col-lg-7 col-md-6">
                    <div class="row width2imgcaterimg">
                      <div class="col-lg-6 col-md-12">
                        <div class="innerhomesec4 oneimgn">
							<?php
$details_image_id = get_field('details_first_image', false, false);
$details_image_alt = get_post_meta($details_image_id, '_wp_attachment_image_alt', true);
?>
             <img src="https://lovemomandpops.com/wp-content/uploads/2026/06/corporate-ice5.webp" alt="<?php echo esc_attr($details_image_alt); ?>">
                </div>
                      </div>

                       <div class="col-lg-6 col-md-12">
                        <div class="innerhomesec4">
							<?php
$second_image_id = get_field('details_second_image', false, false);
$second_image_alt = get_post_meta($second_image_id, '_wp_attachment_image_alt', true);
?>
             <img src="https://lovemomandpops.com/wp-content/uploads/2026/06/corporate-ice6.webp" alt="<?php echo esc_attr($second_image_alt); ?>">
                </div>
                      </div>
                    </div>
             
              </div>



              </div>
            </div>       
        </section>

<section class="custom-section1">
<img class="pink-wave" src="https://lovemomandpops.com/wp-content/themes/themomandpops/images/shapepink.webp" alt="pink-wave">	
	
<div class="container">
<div class="row align-items-center">
  
<div class="col-md-12">
   <div class="headhomesec4 innerhomesec4 white-text">
      <h2 class="sametitle mt-5">Why Choose Frozen Dessert Catering Round Rock for Corporate Events?</h2>
	   
	   <p>Frozen desserts are a great option at corporate events where people are usually served traditional desserts. Our Frozen Dessert Catering Round Rock services offer a distinctive dessert experience that will be remembered long after the event.</p>
   </div>
</div>
	
	<div class="col-lg-7 col-md-7">
		
		<div class="innerhomesec4 lastlist white-text">
                  <h3 class="titlehomesec4list white-text">Frozen desserts are ideal for:</h3>
                  <ul class="duallist">
					  
                    <li>Employee appreciation events</li>					  
                    <li>Corporate parties</li>					  
                    <li>Trade shows</li>					  
                    <li>Business networking events</li>					  
                    <li>Team-building activities</li>
					  <li>Grand openings</li>
					  <li>Holiday celebrations</li>
					  <li>Client appreciation gatherings</li>
                  </ul>
			
			<p>We collaborate with the event planners to make sure that all aspects are managed professionally. Whether setting up or serving, we make it simple to plan an event and offer some of the best frozen desserts for all. With our frozen dessert catering solutions, businesses can offer a fun and refreshing experience that encourages engagement and creates positive memories.</p>
			
			<div class="banner-btn">
	<a href="/contact/" class="button-74">Get a Quote</a>
	<a href="/flavors/" class="button-74">View Flavors</a>
</div>

                </div>		
              </div>   
	
	 <div class="col-lg-5 col-md-5">
                    
                        <div class="innerhomesec4 oneimgn">
							             <img src="https://lovemomandpops.com/wp-content/uploads/2026/06/corporate-ice7.webp" alt="Dessert Catering in Round Rock">
                </div>   
		 
		 
             
              </div>
	
	

</div>
</div>
	<img class="white-wave mt-5" src="https://lovemomandpops.com/wp-content/themes/themomandpops/images/foooterwave.webp">
</section>

<section class="custom-section2">
<div class="container">
<div class="row align-items-center">
<div class="col-md-12">
                <div class="headhomesec4 innerhomesec4">
                    <h2 class="sametitle">Premium Catering Desserts for Every Business Occasion</h2>
					
					<p>Choices are important when it comes to picking out the right dessert. We take great pride in our fresh ingredients, bright colors, and beautiful presentation at Love Mom and Pops, where we specialize in premium catering desserts.</p>
					<p>Paletas are available in a wide range of flavors and options for different preferences and diets. All guests are sure to find something to enjoy, whether it's fruit-based, creamy, or vegan-friendly!</p>
					
                </div>
              </div>
	
	<div class="col-lg-5 col-md-5">
                    
                        <div class="innerhomesec4 oneimgn">
						 <img src="https://lovemomandpops.com/wp-content/uploads/2026/06/corporate-ice8.webp" alt="corporate catering in Round Rock">
                </div>                    
             
              </div>
	
	
	<div class="col-lg-7 col-md-7">
                <div class="innerhomesec4">
					<h3 class="mb-3">The advantages of our catering desserts are:</h3>
                 
					<ul class="duallist">
						<li>Fresh fruit ingredients</li>
						<li>Handcrafted quality</li>
						<li>Unique flavor combinations</li>
						<li>Vegan options available</li>
						<li>Attractive presentation</li>
						<li>Summer employee events</li>
						<li>Convenient event service</li>
						<li>Crowd-pleasing selections</li>
					</ul>
					
					
					<p>Whether you're hosting a formal corporate gathering or a casual office celebration, our catering desserts provide the perfect finishing touch to any event.</p>
					
					
					
<div class="banner-btn">
	<a href="/contact/" class="button-74">Get a Quote</a>
	<a href="/flavors/" class="button-74">View Flavors</a>
</div>
                </div>
				 
              </div>

	</div>
	</div>
</section>


<section class="custom-section0">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="headhomesec4 innerhomesec4">
                    <h2 class="sametitle">Customized Dessert Catering Solutions</h2>
					<p>Each corporate event is unique and has specific objectives, numbers of attendees, and a theme. For this reason, we provide catering packages that can be customized to suit your requirements.</p>
                </div>
              </div>
       
              <div class="col-lg-7 col-md-7">
                <div class="innerhomesec4">
					<h3>Our team can help coordinate dessert service for:</h3>
					
					<ul class="duallist">
						<li>Corporate luncheons</li>
						<li>Employee recognition events</li>
						<li>Customer appreciation programs</li>
						<li>Company anniversaries</li>
						<li>Conferences and seminars</li>
						<li>Sales meetings</li>
						<li>Community events</li>
						<li>Business celebrations</li>
					</ul>
					
					<p>We are aware of the professional impression we need to make and that we are providing an enjoyable experience. Our frozen treats are ideal for events and add fun and engagement without compromising on quality or professionalism. With Love Mom and Pops, you'll get customized attention and service to ensure that your event is a success.</p>
               
<div class="banner-btn">
	<a href="/contact/" class="button-74">Get a Quote</a>
	<a href="/flavors/" class="button-74">View Flavors</a>
</div>
                </div>
				 
              </div>

             
                  <div class="col-lg-5 col-md-5">
                    
                        <div class="innerhomesec4 oneimgn">
							             <img src="https://lovemomandpops.com/wp-content/uploads/2026/06/corporate-ice9.webp" alt="Corporate Catering in Round Rock">
                </div>                    
             
              </div>
              </div>
            </div>       
        </section>


<section class="custom-section1">
<img class="pink-wave" src="https://lovemomandpops.com/wp-content/themes/themomandpops/images/shapepink.webp" alt="pink-wave">	
	
<div class="container">
<div class="row align-items-center">
  
<div class="col-md-12">
   <div class="headhomesec4 innerhomesec4 white-text">
      <h2 class="sametitle mt-5">Handcrafted Frozen Treats That Guests Love</h2>
	   
	   <p>Our signature paletas are our mainstay catering. They are fruit-based and made from the best ingredients, a great alternative to traditional desserts.</p>
	   
	   <p>Every frozen treat is made with great care to provide the ultimate flavor and quality. The colors and real flavors make a stimulating display that will draw people to the table and stimulate them to interact.</p>
   </div>
</div>
	
	<div class="col-lg-7 col-md-7">
		
		<div class="innerhomesec4 lastlist white-text">
                  <h3 class="titlehomesec4list white-text">Some popular flavors include:</h3>
                  <ul class="duallist">
					  
                    <li>Strawberry</li>					  
                    <li>Mango</li>					  
                    <li>Pineapple</li>					  
                    <li>Watermelon</li>					  
                    <li>Coconut</li>
					<li>Chocolate</li>
					<li>Cookies and cream</li>
					<li>Seasonal specialties</li>
                  </ul>
			
			<p>We strive to maintain freshness and quality to ensure that each guest receives a great dessert.</p>
			
			<div class="banner-btn">
	<a href="/contact/" class="button-74">Get a Quote</a>
	<a href="/flavors/" class="button-74">View Flavors</a>
</div>

                </div>		
              </div>   
	
	 <div class="col-lg-5 col-md-5">
                    
                        <div class="innerhomesec4 oneimgn">
							             <img src="https://lovemomandpops.com/wp-content/uploads/2026/06/corporate-ice10.webp" alt="Handcrafted Frozen Treats That Guests Love ">
                </div>  
              </div>
	</div>
</div>
	<img class="white-wave mt-5" src="https://lovemomandpops.com/wp-content/themes/themomandpops/images/foooterwave.webp">
</section>

<section class="custom-section2">
<div class="container">
<div class="row align-items-center">
<div class="col-md-12">
                <div class="headhomesec4 innerhomesec4">
                  <h2 class="sametitle">Corporate Catering Round Rock for Employee and Client Appreciation</h2>				
                </div>
              </div>
	
	<div class="col-lg-5 col-md-5">
                    
                        <div class="innerhomesec4 oneimgn">
						 <img src="https://lovemomandpops.com/wp-content/uploads/2026/06/corporate-ice11.webp" alt="Catering Desserts in Round Rock TX ">
                </div>                    
             
              </div>
	
	
	<div class="col-lg-7 col-md-7">
                <div class="innerhomesec4">				
					
					<p>Recognizing employees and thanking clients are important parts of building strong business relationships. Our corporate catering services are designed to support different teams to celebrate their success, reward their efforts, and foster a healthy corporate culture and environment.</p>
					
					<p>A unique dessert experience can help improve morale, promote socialization, and leave a positive impact. Be it a big occasion or just a thank you, our ice creams make for a thoughtful and delicious treat. We manage the arrangements, so your staff can concentrate on making connections with guests and have a great time.</p>
					
<div class="banner-btn">
	<a href="/contact/" class="button-74">Get a Quote</a>
	<a href="/flavors/" class="button-74">View Flavors</a>
</div>
                </div>
				 
              </div>

	</div>
	</div>
</section>


<section class="custom-section0">
          <div class="container">
            <div class="row align-items-center">
                     
              <div class="col-lg-7 col-md-7">
				  
                <div class="innerhomesec4">
					 <h2 class="sametitle mb-3">Delicious Catering Desserts for Events of Every Size</h2>
                 <p>No event is too large or too small for Love Mom and Pops. Catering for desserts is available, and we can provide it to you when you need it, whatever the size of your event or the number of guests.</p>					
					
					<p>Our skilled staff has a good grasp of the logistics required for corporate events and is able to complete the job with ease from start to finish.</p>
					
					<p>Whether you're hosting a small meeting with the executive team or a big event for staff, our Dessert Catering services set the tone for a welcoming event where everyone can unwind and have fun.</p>
					
<div class="banner-btn">
	<a href="/contact/" class="button-74">Get a Quote</a>
	<a href="/flavors/" class="button-74">View Flavors</a>
</div>
                </div>
				 
              </div>

             
                  <div class="col-lg-5 col-md-5">
                    
                        <div class="innerhomesec4 oneimgn">
							             <img src="https://lovemomandpops.com/wp-content/uploads/2026/06/corporate-ice12.webp" alt="Delicious Catering Desserts">
                </div>                    
             
              </div>
              </div>
            </div>
       
        </section>

<section class="custom-section1 pb-padd">
<img class="pink-wave" src="https://lovemomandpops.com/wp-content/themes/themomandpops/images/shapepink.webp" alt="pink-wave">	
	
<div class="container">
<div class="row align-items-center">
  
<div class="col-md-12">
   <div class="headhomesec4 innerhomesec4 white-text">
      <h2 class="sametitle mt-5">Why Businesses Choose Love Mom and Pops!</h2>
	   
	   <p>We want to make your moms and pops' experience something special and fun, which is why Love Mom and Pops is a great option for dessert catering.</p>
   </div>
</div>
	
	<div class="col-lg-7 col-md-7">
		
		<div class="innerhomesec4 lastlist white-text">
                  <h3 class="titlehomesec4list white-text">What makes us a favorite with clients:</h3>
                  <ul class="duallist">
					  
                    <li>Fresh, natural ingredients</li>					  
                    <li>Handcrafted paletas</li>					  
                    <li>Professional service</li>					  
                    <li>Flexible catering packages</li>					  
                    <li>Unique dessert options</li>
					  <li>Vegan-friendly selections</li>
					  <li>Beautiful presentation</li>
					  <li>Reliable event support</li>
                  </ul>
			
			<p>Our staff can help you make your event unforgettable by serving top-quality frozen desserts, whether it's a company party, employee appreciation night, conference, or networking event.
</p>
			
			<div class="banner-btn">
	<a href="/contact/" class="button-74">Get a Quote</a>
	<a href="/flavors/" class="button-74">View Flavors</a>
</div>

                </div>		
              </div>   
	
	 <div class="col-lg-5 col-md-5">
                    
                        <div class="innerhomesec4 oneimgn">
							             <img src="https://lovemomandpops.com/wp-content/uploads/2026/06/corporate-ice3-1.webp" alt="">
                </div> 		 
             
              </div>
	

</div>
</div>
</section>

<section class="faq-section">
<div class="container">
	<div class="row align-items-center">
		
		<div class="col-md-12">
                <div class="headhomesec4 innerhomesec4">
                    <h2 class="sametitle">Frequently Asked Questions</h2>				
                </div>
              </div>
		
		<div class="col-lg-5 col-md-12">
              <div class="innerhomesec4 oneimgn">
				<img src="https://lovemomandpops.com/wp-content/uploads/2026/04/2icehomesec6.webp" alt="">
                </div>
        </div>
		
		<div class="col-lg-7 col-md-12">
			<div class="faq-accordion">

    <div class="faq-item active">
        <button class="faq-question">
           <h3>Why choose corporate catering Round Rock for business events?</h3>
            <span class="icon">+</span>
        </button>
        <div class="faq-answer">
            <p>Professional dessert service creates memorable experiences, improves engagement, and delights employees and clients.</p>
        </div>
    </div>

    <div class="faq-item">
        <button class="faq-question">
			<h3>What makes frozen dessert catering Round Rock unique?</h3>
            <span class="icon">+</span>
        </button>
        <div class="faq-answer">
            <p>Handcrafted frozen treats offer refreshing flavors, beautiful presentation, and enjoyable event experiences.</p>
        </div>
    </div>

    <div class="faq-item">
        <button class="faq-question">
			<h3>What types of catering desserts do you offer?</h3>
            <span class="icon">+</span>
        </button>
        <div class="faq-answer">
            <p>We provide fruit-based, creamy, vegan-friendly, and seasonal catering desserts for every occasion.</p>
        </div>
    </div>
				
		<div class="faq-item">
        <button class="faq-question">
			<h3>Can catering desserts accommodate large corporate gatherings?</h3>
            <span class="icon">+</span>
        </button>
        <div class="faq-answer">
            <p>Yes, our catering desserts are available for both small meetings and large events.</p>
        </div>
    </div>
				
		<div class="faq-item">
        <button class="faq-question">
			<h3>Is frozen dessert catering Round Rock suitable year-round?</h3>
            <span class="icon">+</span>
        </button>
        <div class="faq-answer">
            <p>Absolutely, frozen treats remain popular year-round and complement indoor and outdoor corporate events.</p>
        </div>
    </div>

</div>

		</div>
	</div>
	</div>
</section>



<?php
//get_sidebar();
get_footer();

