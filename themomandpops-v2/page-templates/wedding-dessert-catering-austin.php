<?php
/**
 * The template for displaying all pages
 * Template Name: wedding-dessert-catering-austin
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
                 <p>Your wedding day deserves memorable moments, beautiful décor, and delicious treats that leave a lasting impression. Wedding dessert catering is a great way to make your guests happy and give your wedding a special flair. From a picnic to a party, creative desserts can make all the difference. </p>					
					
					<p>Love Mom and Pops is dedicated to making handcrafted frozen treats with smiles on everyone's face. Each of our paletas is made with fresh ingredients, colorful mixes, and incredible flavors, giving you a refreshing dessert experience.</p>
					
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
             <img src="https://lovemomandpops.com/wp-content/uploads/2026/06/wedding-ice-caterin1.webp" alt="<?php echo esc_attr($vegan1_image_alt); ?>">
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
      <h2 class="sametitle mt-5">Why Dessert Catering Matters at Weddings?</h2>
	   
	   <p>Desserts are a very popular item on many wedding menus and are a favorite component of any wedding reception. Although the traditional wedding cake is still popular, many couples are seeking something unique that embodies their personalities and style.</p>
   </div>
</div>
	
	<div class="col-lg-7 col-md-7">
		
		<div class="innerhomesec4 lastlist white-text">
                  <h3 class="titlehomesec4list white-text">Wedding dessert catering Austin offers:</h3>
                  <ul class="duallist">
					  
                    <li>Unique dessert options</li>					  
                    <li>Convenient on-site service</li>					  
                    <li>Beautiful presentation</li>					  
                    <li>Memorable guest experiences</li>					  
                    <li>Customizable menu selections</li>
                  </ul>
			
			<p>Specialty desserts provide guests with additional variety and will serve as an interesting highlight of your party.</p>
			
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
             <img src="https://lovemomandpops.com/wp-content/uploads/2026/06/wedding-ice-caterin2.webp" alt="<?php echo esc_attr($vegan2_image_alt); ?>">
                </div>   
              </div>
	
	

</div>
</div>
	<img class="white-wave mt-5" src="https://lovemomandpops.com/wp-content/themes/themomandpops/images/foooterwave.webp">
</section>

<section class="custom-section2">
<div class="container">
<div class="row align-items-center">

	
	<div class="col-lg-5 col-md-5">
                    
                        <div class="innerhomesec4 oneimgn">
						 <img src="https://lovemomandpops.com/wp-content/uploads/2026/06/wedding-ice-caterin3.webp" alt="Variety of Wedding Dessert Flavors">
                </div>                    
             
              </div>
	
	
	<div class="col-lg-7 col-md-7">
                <div class="innerhomesec4">
					  <h2 class="sametitle">Handcrafted Paletas for Every Wedding</h2>
					
					<p>Guests of all ages will enjoy our colorful paletas as a refreshing treat! Each pop is handcrafted with fresh fruit and natural ingredients, creating authentic and bold flavors. They are a great way to add some fun and color to any event or celebration and are a great alternative to the traditional dessert options.</p>
					
					<p>Paletas are not only fun, but they also provide a refreshing and exciting element to your wedding. It is pleasant for guests to have a tasty frozen indulgence that is also very refreshing.</p>
					
					<p>Whether you're hosting an outdoor summer wedding or a sophisticated evening reception, our paletas seamlessly fit into the style and theme of any wedding.</p>
					
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
                    <h2 class="sametitle">A Wide Variety of Delicious Flavors</h2>
					<p>The best way to find the perfect wedding dessert is to use your imagination, as each wedding is special. Various flavors are provided that will meet different tastes and preferences.</p>
                </div>
              </div>
       
              <div class="col-lg-7 col-md-7">
                <div class="innerhomesec4">
					<h3>Popular options include:</h3>
					
					<ul class="duallist">
						<li>Strawberry</li>
						<li>Mango</li>
						<li>Pineapple</li>
						<li>Watermelon</li>
						<li>Coconut</li>
						<li>Chocolate</li>
						<li>Cookies and Cream</li>
						<li>Lime</li>
						<li>Mixed Berry</li>
					</ul>
					
					<p>We can help you develop a menu of flavors that would suit your wedding and please your guests.</p>
               
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


<section class="cateringsec4 pt-0 pb-0">
	<img class="pink-wave" src="https://lovemomandpops.com/wp-content/themes/themomandpops/images/shapepink.webp" alt="pink-wave">
  <div class="container">
    <div class="row">
		
      <div class="col-md-12">
        <div class="headsec3cate text-center white-text">
           <h2 class="sametitle mt-5">Perfect for Austin Weddings</h2>
			
			<p>Austin is known for its culture, outdoor spaces, and lovely warm weather. Frozen desserts are a great option for local celebrations since they ensure guests are refreshed throughout the celebration.</p>
			
			<p><strong>Whether your wedding takes place at:</strong></p>
        </div>
      </div>
		
			
		<div class="col-md-12 mb-4">
			<div class="innerloactionbox1 white-text text-center">
			<ul class="do-flex-list">
				<li>A rustic ranch</li>
				<li>A downtown venue</li>
				<li>A garden setting</li>
				<li>A lakeside location</li>
				<li>A luxury ballroom</li>
        	</ul>
				
				<p>Our Dessert Catering Service is perfectly in place in the atmosphere.</p>
				
				<p>When we do all the setup, service, and presentation, couples can relax and enjoy their special day while we do the rest with the desserts.</p>
		</div>
		</div>  
		
		<div class="col-md-12 mb-4">
		<div class="dashed-line"></div>
		</div>
		
		<div class="col-md-12 mb-4">
		<div class="headsec3cate">
           <h2 class="sametitle">Custom Dessert Experiences </h2>
        </div>
			
			<div class="innerloactionbox1 white-text text-center">
			<p>Each couple has their own dream for a wedding. That's why we provide tailored dessert catering choices according to your tastes.</p>
			
			<p><strong>Customization options include:</strong></p>
				
				<ul class="do-flex-list mb-4">
					<li>Personalized flavor selections</li>
					<li>Coordinated presentation displays</li>
					<li>Guest-friendly serving stations</li>
					<li>Flexible package options</li>
				</ul>
				
				<p>Dietary accommodations will be made for preferences.</p>
				
				<p>We aim to work towards crafting a dessert experience that is personal, memorable, and just right for your celebration.</p>
				
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
                    <h2 class="sametitle">A Refreshing Alternative to Traditional Desserts</h2>
					<p>Many couples are looking for desserts other than a traditional wedding cake. Paletas are a creative solution that will be remembered by guests long after the event has come and gone.</p>
                </div>
              </div>
       
              <div class="col-lg-7 col-md-7">
                <div class="innerhomesec4">				
					
					<h3>Benefits include:</h3>
					
					<ul class="duallist">
						<li>Fresh ingredients</li>
						<li>Lighter dessert option</li>
						<li>Eye-catching appearance</li>
						<li>Easy serving</li>
						<li>Great for guests of all ages</li>
					</ul>
					
					<p>With the option of wedding dessert catering Austin, couples can provide something fun, refreshing, and unique, all while keeping it elegant and sophisticated.</p>
               
<div class="banner-btn">
	<a href="/contact/" class="button-74">Get a Quote</a>
	<a href="/flavors/" class="button-74">View Flavors</a>
</div>
                </div>
				 
              </div>

             
                  <div class="col-lg-5 col-md-5">                    
                    <div class="innerhomesec4 oneimgn">					
					<img src="https://lovemomandpops.com/wp-content/uploads/2026/06/wedding-ice-caterin4.webp" alt="Frozen Vegan Dessert">
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
           <h2 class="sametitle">Why love Mom and Pops?</h2>
        </div>
      </div>
		
			
		<div class="col-md-12 mb-4">
			<div class="innerloactionbox1 white-text text-center">
				<p>We at Love Mom and Pops are dedicated to making couples have an unforgettable wedding day. We know how to make the perfect wedding dessert look delicious and are committed to providing the highest quality ingredients, service, and handcrafted desserts.</p>
				
				<h3>We focus on:</h3>
				
			<ul class="do-flex-list mb-5">
				<li>Fresh, natural ingredients</li>
				<li>Professional event service</li>
				<li>Beautiful presentation</li>
				<li>Reliable catering support</li>
				<li>Outstanding guest experiences</li>
        	</ul>
				
				<p>We make sure every detail is above and beyond, from our initial consultation to the last bite.</p>
		</div>
		</div>  
		
		<div class="col-md-12 mb-4">
		<div class="dashed-line"></div>
		</div>
		
		<div class="col-md-12 mb-4">
		<div class="headsec3cate">
           <h2 class="sametitle">Book Wedding Dessert Catering Austin Today</h2>
        </div>
			
			<div class="innerloactionbox1 white-text text-center">
			<p>Your wedding deserves desserts that will be as memorable as the celebration itself. Love Mom and Pops offers an unforgettable dessert experience for weddings all across Austin with their handcrafted paletas, bold flavors, and professional service.</p>
			
			<p><strong><em>Call us if you're looking for wedding dessert catering Austin services that you can rely on to make your special day even sweeter. Give us a call today to talk about your wedding and how we can help you make your grand gesture one that will create memories for years to come with our refreshing desserts.</em></strong></p>
				
						
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
                    <h2 class="sametitle">FAQs on Wedding Dessert Catering Austin</h2>				
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
           <h3>What desserts do you serve at weddings?</h3>
            <span class="icon">+</span>
        </button>
        <div class="faq-answer">
            <p>Love Mom and Pops serves handcrafted paletas made with fresh ingredients and vibrant flavors.</p>
        </div>
    </div>

    <div class="faq-item">
        <button class="faq-question">
			<h3>Can you customize flavors for our wedding?</h3>
            <span class="icon">+</span>
        </button>
        <div class="faq-answer">
            <p>Yes, we customize flavor selections to match wedding themes, preferences, and guest tastes.</p>
        </div>
    </div>

    <div class="faq-item">
        <button class="faq-question">
			<h3>Are paletas suitable for outdoor weddings?</h3>
            <span class="icon">+</span>
        </button>
        <div class="faq-answer">
            <p>Yes, paletas provide refreshing desserts perfect for Austin's warm outdoor wedding celebrations year-round.</p>
        </div>
    </div>
				
		<div class="faq-item">
        <button class="faq-question">
			<h3>Do you offer setup and serving services?</h3>
            <span class="icon">+</span>
        </button>
        <div class="faq-answer">
            <p>Yes, our team handles setup, presentation, and serving for a seamless wedding experience.</p>
        </div>
    </div>
				
		<div class="faq-item">
        <button class="faq-question">
			<h3>How far should we book in advance?</h3>
            <span class="icon">+</span>
        </button>
        <div class="faq-answer">
            <p>Book several months ahead to secure availability and ensure smooth wedding planning coordination.</p>
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