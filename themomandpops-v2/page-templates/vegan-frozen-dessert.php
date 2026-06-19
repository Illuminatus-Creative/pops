<?php
/**
 * The template for displaying all pages
 * Template Name: vegan-frozen-dessert
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










<section class="custom-section0">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-12">
                <div class="headhomesec4">
                    <h2 class="sametitle">Bring Joy to Every Event with a Delicious Frozen Dessert</h2>
                </div>
              </div>


       
              <div class="col-lg-7 col-md-7">
                <div class="innerhomesec4">
                 <p>At Love Mom and Pops, we believe that all occasions require a little sweetness and coolness. Our colorful frozen dessert are a refreshing treat that will be enjoyed by guests of all ages. Each pop is a natural creation from fresh fruit and natural ingredients, offering authentic and bold flavors. These are perfect for adding some fun and color to any event and make for a great alternative to dessert.</p>
					
					
					<p>Our catering service allows you to present a sweet, refreshing, and unforgettable presentation, whether you are hosting an intimate gathering or a large celebration. We'll team up with you to make your event run smoothly and fun and make sure everyone is getting their hands on some tasty frozen treats.</p>
<div class="banner-btn">
	<a href="/contact/" class="button-74">Get a Quote</a>
	<a href="/flavors/" class="button-74">View Flavors</a>
</div>
                </div>
				 
              </div>

             
                  <div class="col-lg-5 col-md-5">
                    
                        <div class="innerhomesec4 oneimgn">
							<?php
$vegan1_image_id = get_field('details_first_image', false, false);
$vegan1_image_alt = get_post_meta($vegan1_image_id, '_wp_attachment_image_alt', true);
?>
             <img src="https://lovemomandpops.com/wp-content/uploads/2026/06/ice-pops1.webp" alt="<?php echo esc_attr($vegan1_image_alt); ?>">
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
      <h2 class="sametitle mt-5">Why Choose Love Mom and Pops for Frozen Dessert Catering?</h2>
	   
	   <p>We love to make personalized gifts to make any occasion special. Our high-quality paletas are a tasty and fun treat instead of candy.</p>
   </div>
</div>
	
	<div class="col-lg-7 col-md-7">
		
		<div class="innerhomesec4 lastlist white-text">
                  <h3 class="titlehomesec4list white-text">Benefits of Our Catering Services</h3>
                  <ul class="duallist">
					  
                    <li>Handcrafted paletas made with fresh fruit and natural ingredients</li>					  
                    <li>Refreshing alternative to cakes and heavy desserts</li>					  
                    <li>Perfect for guests of all ages</li>					  
                    <li>Vibrant colors that enhance event presentations</li>					  
                    <li>Professional and reliable catering support</li>
					  <li>Customizable flavor selections</li>
					  <li>Suitable for indoor and outdoor events</li>
					  <li>High-quality ingredients in every treat</li>
					  <li>Easy and convenient event planning</li>
					  <li>Memorable dessert experience for every guest</li>
                  </ul>
			
			<p>Every frozen dessert we serve is crafted with care to ensure exceptional taste and presentation.</p>
			
			<div class="banner-btn">
	<a href="/contact/" class="button-74">Get a Quote</a>
	<a href="/flavors/" class="button-74">View Flavors</a>
</div>

                </div>		
              </div>   
	
	 <div class="col-lg-5 col-md-5">
                    
                        <div class="innerhomesec4 oneimgn">
							<?php
$vegan2_image_id = get_field('details_first_image', false, false);
$vegan2_image_alt = get_post_meta($vegan2_image_id, '_wp_attachment_image_alt', true);
?>
             <img src="https://lovemomandpops.com/wp-content/uploads/2026/06/ice-pops2.webp" alt="<?php echo esc_attr($vegan2_image_alt); ?>">
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
                    <h2 class="sametitle">Fresh and Flavorful Frozen Vegan Dessert Options</h2>
					
					<p>We understand that modern events often include guests with different dietary preferences. That's why we have a range of frozen vegan desserts, made by using vegan ingredients and fresh fruit. Made with all-natural flavor and goodness, our vegan paletas are refreshing. They are a tasty option for those who prefer to avoid dairy and still enjoy a tasty treat.</p>
                </div>
              </div>
	
	<div class="col-lg-5 col-md-5">
                    
                        <div class="innerhomesec4 oneimgn">
						 <img src="https://lovemomandpops.com/wp-content/uploads/2026/06/ice-pops3.webp" alt="Frozen Vegan Dessert Austin, TX">
                </div>                    
             
              </div>
	
	
	<div class="col-lg-7 col-md-7">
                <div class="innerhomesec4">
					<h3 class="mb-3">Why Guests Love Our Frozen Vegan Dessert Choices</h3>
                 
					<ul class="duallist">
						<li>Made with plant-based ingredients</li>
						<li>Crafted using real fruit</li>
						<li>Dairy-free and refreshing</li>
						<li>Naturally vibrant flavors</li>
						<li>Suitable for diverse dietary preferences</li>
						<li>Light and satisfying dessert option</li>
					</ul>
					
					
					<p>Every frozen vegan dessert is made with care to provide a smooth and refreshing treat that is perfect for all occasions.</p>
					
					<p>Our frozen dessert selections are vegan, making them the perfect addition to any wedding, corporate event, or family gathering.</p>
					
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
                    <h2 class="sametitle">Premium Frozen Dessert Flavors for Every Taste</h2>
					<p>At Love Mom and Pops, we have a plethora of flavors to please the sweetest of tastes.</p>
                </div>
              </div>
       
              <div class="col-lg-7 col-md-7">
                <div class="innerhomesec4">
					<h3>Popular Flavor Options</h3>
					
					<ul class="duallist">
						<li>Strawberry</li>
						<li>Mango</li>
						<li>Pineapple</li>
						<li>Watermelon</li>
						<li>Coconut</li>
						<li>Lime</li>
						<li>Mixed Berry</li>
						<li>Chocolate</li>
						<li>Seasonal Specialty Flavors</li>
					</ul>
					
					<p>There are a variety of frozen desserts so everyone can have something to enjoy at your event. Whether you're craving a tropical twist or a classic flavor, every handcrafted paleta promises a refreshing taste with each bite.</p>
               
<div class="banner-btn">
	<a href="/contact/" class="button-74">Get a Quote</a>
	<a href="/flavors/" class="button-74">View Flavors</a>
</div>
                </div>
				 
              </div>

             
                  <div class="col-lg-5 col-md-5">
                    
                        <div class="innerhomesec4 oneimgn">
							<?php
$vegan4_image_id = get_field('details_first_image', false, false);
$vegan4_image_alt = get_post_meta($vegan4_image_id, '_wp_attachment_image_alt', true);
?>
             <img src="https://lovemomandpops.com/wp-content/uploads/2026/06/ice-pops4.webp" alt="<?php echo esc_attr($vegan4_image_alt); ?>">
                </div>                    
             
              </div>
              </div>
            </div>       
        </section>



<section class="cateringsec1 ptop-0">
	<img class="pink-wave" src="https://lovemomandpops.com/wp-content/themes/themomandpops/images/shapepink.webp" alt="pink-wave">
	
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 mt-4">
		  <div class="head-steps">
		     <h2 class="sametitle">Frozen Dessert Catering for Every Occasion</h2>
			<p>Whether you're hosting a small or large event, our frozen desserts delivery staff will make it a memorable occasion.</p>
		    </div>
		 </div> 
		 		  
		 
		  <div class="col-lg-4 col-md-6 mb-4">
			  <div class="inner-stepscard huge-p text-center">
				<h4 class="titlestepscards">Weddings</h4>
				  <p>Make your wedding reception special and entertaining by creating your own frozen dessert bar! The refreshing flavors and color presentation are a favorite among guests.</p>                 
              
			  </div>
		  </div>
		
		 <div class="col-lg-4 col-md-6 mb-4">
			  <div class="inner-stepscard huge-p text-center">
				<h4 class="titlestepscards">Birthday Parties</h4>
				  <p>Celebrate birthdays with fun and tasty treats frozen for both kids and grownups!</p>                 
              
			  </div>
		  </div>
		
		 <div class="col-lg-4 col-md-6 mb-4">
			  <div class="inner-stepscard huge-p">
				<h4 class="titlestepscards">Corporate Events</h4>
				  <p>Our frozen dessert catering is ideal for employee appreciation events, company picnics, grand openings, and promotional events.</p>                 
              
			  </div>
		  </div>
		
		 <div class="col-lg-4 col-md-6 mb-4">
			  <div class="inner-stepscard huge-p text-center">
				<h4 class="titlestepscards">Events and Community Celebrations</h4>
				  <p>Large occasions call for easy-to-serve frozen treats that will keep guests refreshed during the day.</p>                 
              
			  </div>
		  </div>
		
		 <div class="col-lg-4 col-md-6 mb-4">
			  <div class="inner-stepscard huge-p text-center">
				<h4 class="titlestepscards">School and Family Events</h4>
				  <p>Bring families together with refreshing paletas that create smiles and lasting memories.</p>          
              
			  </div>
		  </div>
		  
          
		<div class="col-md-12 mt-4">	
          <div class="banner-btn text-center">                 
                       <a href="tel: +1 512-775-1353" class="button-74">(512) 775-1353</a>  <a href="mailto: info@LoveMomAndPops.com" class="button-74">info@LoveMomAndPops.com</a>
                    </div>
		</div>
       
      
    </div>
  </div>
</section>




<section class="cateringsec4 orangesecborder">
  <div class="container">
    <div class="row">
		
      <div class="col-md-12">
        <div class="headsec3cate">
           <h2 class="sametitle">Perfect Events for Our Catering Services</h2>
        </div>
      </div>
		
			
		<div class="col-md-12 mb-4">
			<div class="innerloactionbox1 white-text">
			<ul class="do-flex-list">
				<li>Weddings</li>
				<li>Birthday Parties</li>
				<li>Corporate Gatherings</li>
				<li>School Events</li>
				<li>Community Festivals</li>
				<li>Family Reunions</li>
				<li>Baby Showers</li>
				<li>Bridal Showers</li>
				<li>Holiday Parties</li>
				<li>Graduation Celebrations</li>
        	</ul>
		</div>
		</div>  
		
		<div class="col-md-12 mb-4">
		<div class="dashed-line"></div>
		</div>
		
		<div class="col-md-12 mb-4">
		<div class="headsec3cate">
           <h2 class="sametitle">Perfect Events for Our Catering Services</h2>
        </div>
			
			<div class="innerloactionbox1 white-text text-center">
			<p>Planning an event involves many moving parts. That's why we offer reliable frozen desserts delivery services designed to make the process stress-free. We will arrange the timing, transportation, and presentation of each order meticulously to ensure the order comes fresh and ready to serve.</p>
			
			<p><strong>Our Frozen Desserts Delivery comes with the following benefits:</strong></p>
				
				<ul class="do-flex-list mb-4">
					<li>Arriving on time to all planned activities</li>
					<li>Freshly prepared products</li>
					<li>Professional handling and transport.</li>
					<li>Convenient setup options</li>
					<li>Dependable customer service</li>
					<li>Stress-free dessert planning</li>
				</ul>
				
				<p>From private to large events, we have a frozen desserts delivery service to keep things running smoothly. Our clients trust us for our frozen desserts delivery solutions, and we're focused on quality, freshness, and customer satisfaction all the way.</p>
				
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
                    <h2 class="sametitle">What Makes Our Frozen Vegan Dessert Different?</h2>
					<p>All frozen treats cannot be the same. Frozen dessert vegan options are made with careful attention to selecting ingredients that provide delicious flavor and high quality.</p>
                </div>
              </div>
       
              <div class="col-lg-7 col-md-7">
                <div class="innerhomesec4">
					
					<p>No artificial ingredients, real fruit, natural flavors, and authentic recipes are used. In support of this commitment, we strive to develop products that taste great and are very refreshing.</p>
					
					<h3>Features of Our Vegan Options</h3>
					
					<ul class="duallist">
						<li>Real fruit ingredients</li>
						<li>Natural sweetness</li>
						<li>Vibrant colors and flavors</li>
						<li>Plant-based recipes</li>
						<li>Refreshing texture</li>
						<li>Excellent taste for all guests</li>
					</ul>
					
					<p>Each frozen dessert has been made to offer a treat without any compromise, and to address a range of dietary needs.</p>
               
<div class="banner-btn">
	<a href="/contact/" class="button-74">Get a Quote</a>
	<a href="/flavors/" class="button-74">View Flavors</a>
</div>
                </div>
				 
              </div>

             
                  <div class="col-lg-5 col-md-5">                    
                    <div class="innerhomesec4 oneimgn">					
					<img src="https://lovemomandpops.com/wp-content/uploads/2026/06/ice-pops5.webp" alt="Frozen Vegan Dessert">
                </div>                    
             
              </div>
              </div>
            </div>       
        </section>


<section class="cateringsec4 ptop-0 orangesecborder twosec">
	<img class="pink-wave" src="https://lovemomandpops.com/wp-content/themes/themomandpops/images/shapepink.webp" alt="pink-wave">
  <div class="container">
    <div class="row">
		
      <div class="col-md-12">
        <div class="headsec3cate">
           <h2 class="sametitle">Make Your Frozen Dessert Personalized</h2>
        </div>
      </div>
		
			
		<div class="col-md-12 mb-4">
			<div class="innerloactionbox1 white-text text-center">
				<p>All events are individual, and that's why we have catering packages that can be tailored to fit your needs. Our staff collaborates with you to create the ideal dessert experience.</p>
				<h3>Our Simple Catering Process</h3>
			<ul class="do-flex-list">
				<li>Discuss the requirements for your event</li>
				<li>Select flavors and quantities</li>
				<li>Arrange a menu designed to fit your tastes and budget.</li>
				<li>Make a delivery and service appointment.</li>
				<li>Experience an event without any hassles.</li>
        	</ul>
				
				<p>With our customization options, each and every offering of frozen desserts fits your event's style and preferences.</p>
		</div>
		</div>  
		
		<div class="col-md-12 mb-4">
		<div class="dashed-line"></div>
		</div>
		
		<div class="col-md-12 mb-4">
		<div class="headsec3cate">
           <h2 class="sametitle">Book Love Mom and Pops for Your Next Event</h2>
        </div>
			
			<div class="innerloactionbox1 white-text text-center">
			<p>At Love Mom and Pops, we are committed to making memories with handcrafted frozen treats. We know that only the finest ingredients, superior service, and excellent flavor are what you would expect, and that are why we are the trusted choice for events of any size.</p>
			
			<p><strong><em>Contact Love Mom and Pops today to learn more about our catering options and discover how our handcrafted paletas can add a refreshing touch to your next celebration.</em></strong></p>
				
						
			</div>
		</div>
		
		<div class="col-lg-12">
			<div class="banner-btn text-center">
	<a href="/contact/" class="button-74">Get a Quote</a>
	<a href="/flavors/" class="button-74">View Flavors</a>
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
                    <h2 class="sametitle">Frequently Asked Questions About Frozen Dessert Catering </h2>				
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
           <h3>What frozen dessert options do you offer?</h3>
            <span class="icon">+</span>
        </button>
        <div class="faq-answer">
            <p>We offer handcrafted fruit paletas, creamy varieties, vegan selections, and seasonal specialty flavors.</p>
        </div>
    </div>

    <div class="faq-item">
        <button class="faq-question">
			<h3>Do you provide frozen vegan dessert choices?</h3>
            <span class="icon">+</span>
        </button>
        <div class="faq-answer">
            <p>Yes, our frozen vegan dessert options feature plant-based ingredients and refreshing fruit flavors.</p>
        </div>
    </div>

    <div class="faq-item">
        <button class="faq-question">
			<h3>Is frozen desserts delivery available for events?</h3>
            <span class="icon">+</span>
        </button>
        <div class="faq-answer">
            <p>Yes, frozen desserts delivery is available for private parties, weddings, and corporate events.</p>
        </div>
    </div>
				
		<div class="faq-item">
        <button class="faq-question">
			<h3> Can I customize my frozen dessert catering package?</h3>
            <span class="icon">+</span>
        </button>
        <div class="faq-answer">
            <p>Absolutely, we customize flavors, quantities, and service options based on event requirements.</p>
        </div>
    </div>
				
		<div class="faq-item">
        <button class="faq-question">
			<h3>Why choose a frozen vegan dessert for guests?</h3>
            <span class="icon">+</span>
        </button>
        <div class="faq-answer">
            <p>Frozen vegan dessert options accommodate dietary preferences while providing delicious, refreshing, fruit-based enjoyment.</p>
        </div>
    </div>

</div>

		</div>
	</div>
	</div>
</section>

<section class="empty-box">
</section>






<?php
//get_sidebar();
get_footer();