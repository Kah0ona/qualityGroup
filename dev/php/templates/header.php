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
    <link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/img/appleIcon.png">

    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->

    <!-- Wordpress head function -->
    <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  </head>
  <body <?php body_class(); ?> >
   <header class="Header-Wrapper">
        <div class="Header-Banner u-gridContainer u-gridRow">
            <div class="Header-Banner-Left u-gridCol8">
               <a href="http://qualitygroep.lokaalgevonden.nl/"><img class="Header-Banner-Left-Logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Quality_Groep_logo-final.png"/></a> 
            </div>
            <div class="Header-Banner-Right u-gridCol4">
                <h6>Bel voor meer informatie</h6>
                <h6><a url="0622185409">06-22 18 54 09</a></h6> 
            </div>
        </div> 
    </header>
    <nav>
        <div class="u-gridContainer">
            <div class="Bot-Nav ">
                <div class="Nav-toggle u-cf">
                    <a class="Navigation-menuToggle" id="js-navCollapse">
                        <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                            <use xlink:href="#icon-menu2"></use>
                        </svg>
                    </a>
                    <div class="Mob-contact-ico u-gridContainer">
                        <a class="Button Button--transparent u-textInverted u-noLine telefoon" href="tel:0622185409">
                            <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                                <use xlink:href="#icon-phone"></use>
                            </svg>
                        </a>
                        <a class="Button Button--transparent u-textInverted u-noLine mail" href="mailto:info@strijkenenschoonmaakservice.nl">
                            <svg class="Icon Icon--inline" viewBox="0 0 128 128">
                            <use xlink:href="#icon-envelope"></use>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <?php include 'includes/navigation.php'; ?>
        </div>
        
    </nav>
  
		<!-- header-contact -->
	
  
