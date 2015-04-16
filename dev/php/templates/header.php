<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title>Bakkersport</title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">

    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->
    <link href='http://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->

    <!-- Wordpress head function -->
    <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  </head>
  <body <?php body_class(); ?> >


<header class="header">

    <div class="u-gridContainer">
        
        <div class="u-gridRow">
            <div class="u-gridCol5 show-for-large">
               <a href="/home"> <img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"></a>
            </div>
            <div class="u-gridCol5 head-top">
                <a href=""><i class="fa fa-phone"></i>&nbsp&nbsp +31 (0) 172234527 &nbsp&nbsp</a>
                <a href=""><i class="fa fa-envelope"></i>&nbsp&nbsp info@bakkersporttrading.nl</a>
            </div>

        </div>
      <div class="Bot-Nav">
        <div class="Nav-toggle u-cf">
            <a class="Navigation-menuToggle" id="js-navCollapse">
                <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                    <use xlink:href="#icon-menu2"></use>
                </svg>
            </a>
        </div>
    	<div class="u-gridRow">
                
                <div class="u-gridCol6 dropdown-menu" style="float:right;"> 
            		  <?php include 'includes/navigation.php'; ?>
            	</div> 
                
                <a href="/home"> <img  class="logo show-for-small" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"></a>

        		<div class="Mob-contact-ico">
        			<a class="Button Button--transparent u-textInverted u-noLine telsvg" href="tel:+31(0)172234527">
        				<svg class="Icon Icon--inline" viewBox="0 0 128 128">
        					<use xlink:href="#icon-phone"></use>
        				</svg>
        			</a>
        		
                        <a class="Button Button--transparent u-textInverted u-noLine mailsvg" href="mailto:info@bakkersporttrading.nl">
        				<svg class="Icon Icon--inline" viewBox="0 0 128 128">
        					<use xlink:href="#icon-envelope"></use>
        				</svg>
        			</a>
        		</div><!-- header-contact -->
        	
        </div>
      </div>
  </div>
</header>
<div id="preloader"></div>