<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package themomandpops
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="dns-prefetch" href="https://fonts.googleapis.com" />
        <link rel="dns-prefetch" href="https://fonts.gstatic.com" crossorigin />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
         <link rel="dns-prefetch" href="https://fonts.googleapis.com">
        <link rel="dns-prefetch" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@200..700&display=swap" rel="stylesheet">
        <link rel="dns-prefetch" href="https://fonts.googleapis.com">
        <link rel="dns-prefetch" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/owl.carousel.min.css" />
<!--         <link rel="stylesheet" href="<//?php echo bloginfo('template_directory'); ?>/owl.theme.default.min.css" /> -->
        <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/bootstrap.min.css" />
          <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/jarallax.css">
        <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/fancybox.css">
        <link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/custom.css" />

        <?php wp_head(); ?>
        
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-D812KTHT79"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-D812KTHT79');
</script>  
		
<?php // v2: base Organization/WebSite schema is now emitted by Yoast SEO. Removed the duplicate hardcoded block to prevent conflicting Organization entities. ?>		
		
<?php // v2: Per-page structured data (Austin = LocalBusiness/HQ, Dallas = Service + areaServed, no address) is injected via inc/schema.php on wp_head. Removed the hardcoded global IceCreamShop block that wrongly applied the Austin storefront address site-wide (D4 violation on the Dallas page). ?>
        
    </head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
       

    <!-- <header> -->
         
      <header class="page-header">
    
        <div class="container-fluid">
         <div class="row">

        <nav class="navbar navbar-expand-lg navbar-light">
        
          <div class="col-md-2">
			  <?php  $image = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); ?>
          <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo $image[0]; ?>" alt="main-logo" title="main-logo" width="222" height="112"></a>
           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            </div>
             <div class="col-md-9">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <?php
wp_nav_menu(array(
    'theme_location' => 'menu-1',
    'menu_class'     => 'navbar-nav',
    'container'      => false,
    'depth'          => 2,
    'fallback_cb'    => false,
    'walker'         => new Custom_Nav_Walker(),
));
?>

             
            
            </div>
            </div>

             <div class="col-md-1">
           <div class="nav-searchbtn">
  
                            <a onclick="myFunction()"><img src="<?php echo bloginfo('template_directory'); ?>/images/searchicon.webp" alt="" width="26" height="26"></a>
                             <a href="/my-account/"><img src="<?php echo bloginfo('template_directory'); ?>/images/usericon.webp" alt="" width="26" height="28"></a>
                              <a href="/cart/"><img src="<?php echo bloginfo('template_directory'); ?>/images/carticon.webp" alt="" width="30" height="27"></a>

<span><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                                
                        </div>
             </div>
      
        </nav> 
			 <div id="myDIV" class="search-form" style="display: none;">
              <?php echo do_shortcode('[fibosearch]'); ?>
			</div>
        </div>
          
        </div>
       
      <!-- </header> -->







    
        </header>
        

<div class="navheight"></div>