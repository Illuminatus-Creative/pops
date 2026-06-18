<?php
/**
 * The template for displaying all pages
 * Template Name: catering-in-austin-tx
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

<section class="custom-section0">
          <div class="container">
            <div class="row align-items-center">
                     
              <div class="col-lg-7 col-md-7">
				  
                <div class="innerhomesec4">
					 <h2 class="sametitle mb-3">Corporate Catering Services by Love Mom and Pops</h2>
                 <p>At Love Mom and Pops, we believe every corporate event deserves a memorable treat. Our handcrafted frozen desserts make it a fun and refreshing day for your employees, clients, company picnic, product launch, or holiday celebration. Each of our colorful paletas is crafted using fresh fruit, natural ingredients, and authentic flavors to leave a lasting impression on visitors of any age.</p>					
					
					<p>Businesses in Austin, TX can rely on Love Mom and Pops to provide them with outstanding service, scrumptious desserts, and an unparalleled catering experience. Whether you're planning a casual meeting at your office or a large-scale corporate event, our corporate catering packages are created to add excitement, taste, and convenience to your celebration.</p>
					
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
             <img src="https://lovemomandpops.com/wp-content/uploads/2026/06/corporate-ice2.webp" alt="<?php echo esc_attr($vegan1_image_alt); ?>">
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
      <h2 class="sametitle mt-5">Why Choose Frozen Dessert Catering Austin for Corporate Events?</h2>
	   
	   <p>Frozen desserts make a fun and special addition to corporate events, as they are something that you won't find at a typical event. Our frozen dessert catering service provides a refreshing twist to regular catering services.</p>
   </div>
</div>
	
	<div class="col-lg-7 col-md-7">
		
		<div class="innerhomesec4 lastlist white-text">
                  <h3 class="titlehomesec4list white-text">Benefits of choosing our frozen dessert catering include:</h3>
                  <ul class="duallist">
					  
                    <li>Handcrafted paletas made with fresh ingredients</li>					  
                    <li>Vegan and dairy-free options are available</li>					  
                    <li>Wide variety of fruit and cream-based flavors</li>					  
                    <li>Quality service provided by professionals and friendly staff.</li>					  
                    <li>Customizable catering packages</li>
					  <li>Ideal for indoor and outdoor occasions</li>
					  <li>Suitable for guests of all ages</li>
					  <li>Easy setup and cleanup.</li>
                  </ul>
			
			<p>With our frozen dessert catering services, we can help you set the tone for a positive and entertaining environment, while delighting your guests with a tasty cool-down and celebration.</p>
			
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
             <img src="https://lovemomandpops.com/wp-content/uploads/2026/06/corporate-ice3-1.webp" alt="<?php echo esc_attr($vegan2_image_alt); ?>">
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
                    <h2 class="sametitle">Party Catering for Corporate Celebrations</h2>
					
					<p>Corporate events should be fun, interesting, and memorable. Our party catering services can make any event an exciting celebration.  We know that each event is special! That's why we have flexible catering packages to suit the event, your style, and the size of your gathering.</p>
					
                </div>
              </div>
	
	<div class="col-lg-5 col-md-5">
                    
                        <div class="innerhomesec4 oneimgn">
						 <img src="https://lovemomandpops.com/wp-content/uploads/2026/06/corporate-ice1.webp" alt="Frozen Vegan Dessert Austin, TX">
                </div>                    
             
              </div>
	
	
	<div class="col-lg-7 col-md-7">
                <div class="innerhomesec4">
					<h3 class="mb-3">Our party catering solutions are ideal for:</h3>
                 
					<ul class="duallist">
						<li>Office parties</li>
						<li>Company milestones</li>
						<li>Retirement celebrations</li>
						<li>Staff recognition events</li>
						<li>Holiday gatherings</li>
						<li>Summer employee events</li>						
					</ul>
					
					
					<p>Handcrafted frozen desserts are the perfect way to get a fun and festive atmosphere going in no time. Guests will be able to mingle, sit back, and unwind while celebrating as a group with our party catering.</p>
					
					<p>We offer party catering packages that are both easy to handle and of high quality, while also being memorable. </p>
					
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
                    <h2 class="sametitle">Frozen Dessert Catering That Guests Remember</h2>
					<p>A good dessert will really make a difference long after the party is over. Quality, freshness, and presentation are our focus when providing frozen desserts catering. Each paleta is made by hand with all-natural ingredients. Having authentic flavors and natural goodness is our priority to make guests enjoy frozen treats.</p>
                </div>
              </div>
       
              <div class="col-lg-7 col-md-7">
                <div class="innerhomesec4">
					<h3>We have the following steps in our catering process:</h3>
					
					<ul class="duallist">
						<li>Event consultation</li>
						<li>Flavor selection assistance</li>
						<li>Professional setup</li>
						<li>On-site service</li>
						<li>Smooth event coordination</li>
						<li>Efficient cleanup</li>
					</ul>
					
					<p>Our frozen dessert catering services are an ideal choice for businesses time and time again due to our ability to make event planning easier without any compromises in quality. Although we specialize in corporate events, many clients also trust us for elegant celebrations and special occasions. Our wedding dessert catering service delivers handcrafted frozen treats that complement any event style.</p>
               
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
             <img src="https://lovemomandpops.com/wp-content/uploads/2026/06/corporate-ice4.webp" alt="<?php echo esc_attr($vegan4_image_alt); ?>">
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
		     <h2 class="sametitle">Corporate Catering Customized for Your Event</h2>
			<p>Every corporate event is different. This is why our corporate catering packages can be customized to fit your objectives and needs. We will tailor the service to fit your board meeting, employee event, or company-wide celebration, no matter what your dessert needs are.</p>
			  
			  <p>We have a team of professionals who collaborate with the event organizer to make sure all details are taken care of. Our corporate catering services are tailored to go above and beyond in every aspect, from flavors and menu planning to guest services.</p>
			  
			  <p>When you're looking for reliable catering services offering creativity, quality, and exceptional service, Love Mom and Pops is here to help you make your next event an unforgettable one!</p>
			  
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
        <div class="headsec3cate white-text text-center">
           <h2 class="sametitle">Why Love Mom and Pops?</h2>
			
			<p>We love making happy moments at Love Mom and Pops with custom-made, frozen desserts. We use fresh fruit and natural ingredients for our colorful paletas and offer guests intense flavors.</p>
			
			<p><strong>What sets us apart:</strong></p>
        </div>
      </div>
		
			
		<div class="col-md-12 mb-4 text-center">
			<div class="innerloactionbox1 white-text">
			<ul class="do-flex-list mb-3">
				<li>Premium ingredients</li>
				<li>Handcrafted desserts</li>
				<li>Friendly service team</li>
				<li>Flexible catering packages</li>
				<li>Vegan-friendly options</li>
				<li>Beautiful presentation</li>
				<li>Reliable event support</li>
				<li>Memorable guest experiences</li>
        	</ul>
				
				<p>Whether you're a business or an event planner, we can help you make your celebration a memorable one, from paleta catering to party catering in Austin TX.</p>
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
                    <h2 class="sametitle">Frequently Asked Questions On Frozen Dessert Catering Austin</h2>				
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
           <h3>Why choose corporate catering Austin TX for company events?</h3>
            <span class="icon">+</span>
        </button>
        <div class="faq-answer">
            <p>Our frozen desserts create memorable experiences, encourage engagement, and provide refreshing treats for attendees.</p>
        </div>
    </div>

    <div class="faq-item">
        <button class="faq-question">
			<h3>What makes frozen dessert catering Austin unique?</h3>
            <span class="icon">+</span>
        </button>
        <div class="faq-answer">
            <p>Fresh ingredients, handcrafted paletas, customizable menus, and professional service create exceptional event experiences.</p>
        </div>
    </div>

    <div class="faq-item">
        <button class="faq-question">
			<h3>Does Paleta Catering Austin offer vegan dessert options?</h3>
            <span class="icon">+</span>
        </button>
        <div class="faq-answer">
            <p>Yes, we provide delicious vegan paletas made with fruit and natural ingredients.</p>
        </div>
    </div>
				
		<div class="faq-item">
        <button class="faq-question">
			<h3>Is party catering Austin TX suitable for large corporate gatherings?</h3>
            <span class="icon">+</span>
        </button>
        <div class="faq-answer">
            <p>Absolutely, our catering packages accommodate both small office events and large celebrations.</p>
        </div>
    </div>
				
		<div class="faq-item">
        <button class="faq-question">
			<h3>Why is wedding dessert catering Austin popular with guests?</h3>
            <span class="icon">+</span>
        </button>
        <div class="faq-answer">
            <p>Handcrafted frozen desserts offer unique flavors, elegant presentation, and refreshing enjoyment throughout celebrations.</p>
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
