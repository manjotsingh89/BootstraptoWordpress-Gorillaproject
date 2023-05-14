<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gorilla
 */
global $redux_demo;

//print_r($redux_demo);
//echo"<br>";
 //echo $redux_demo['Slider1']['url'];
?>






<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 ltie8 ltie9" lang="en-US"><![endif]-->
<!--[if IE 8]>
<html class="ie ie8 ltie9" lang="en-US"><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<!-- Executive Produced by Amadeus Volker
Web Developer, content producer, shooter, and editor: Christopher E. Scott

Jonathan and Christopher travelled to Gabon to shoot this film, overcoming tremendous obstacles.  Everything you see in this film is real.-->

    <!doctype html>
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	 <link rel="icon" type="image/ico" href="favicon.ico"/>

	<?php wp_head(); ?>

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VSE4E7F5N0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VSE4E7F5N0');
</script>

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-NP5WSZ6');</script>
  <!-- End Google Tag Manager -->

   
    <meta property="og:image" content="upload slider-1.jpg"/><meta property="og:url" content="https://gorillaproject.org/">
    <meta property="og:image" content="images/gorilla-project-logo.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="200">
    <meta property="og:image:height" content="200">
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://gorillaproject.org/"/>
    <meta property="og:title" content="The Gorilla Project"/>
    <meta property="og:description" content="The Gorilla Project podcast interviews the world's top scientists helping protect gorillas. Watch the interactive film by clicking the "Play the Interactive Film" button."/>

    <title>The Gorilla Project - The Gorilla Project podcast is about protecting gorillas. </title>
    <link rel="icon" type="image/ico" href="<?php  echo get_stylesheet_directory_uri();  ?>/favicon.ico"/>
    
    <link href="<?php  echo get_stylesheet_directory_uri();  ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">



    <link href="<?php echo get_stylesheet_directory_uri();  ?>/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <link href="<?php echo get_stylesheet_directory_uri();  ?>/css/creative.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();  ?>/css/custom.css"/>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin&amp;" type="text/css" media="all"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans%3Aregular%2Citalic%2C700%2C700italic&amp;subset=greek%2Ccyrillic-ext%2Ccyrillic%2Clatin%2Clatin-ext%2Cvietnamese%2Cgreek-ext&amp;" type="text/css" media="all"/>


    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();  ?>/css/style.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();  ?>/plugins/superfish/css/superfish.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();  ?>/plugins/dl-menu/component.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();  ?>/plugins/font-awesome-new/css/font-awesome.min.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();  ?>/plugins/elegant-font/style.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();  ?>/plugins/fancybox/jquery.fancybox.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();  ?>/plugins/flexslider/flexslider.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();  ?>/css/style-responsive.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();  ?>/css/style-custom.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();  ?>/plugins/masterslider/public/assets/css/masterslider.main.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();  ?>/css/master-custom.css" type="text/css" media="all"/>

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();  ?>/plugins/revslider/public/assets/css/settings.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri();  ?>/css/modal-video.min.css"> <!-- Video Model -->



</head>

<body <?php body_class(); ?> data-rsssl="1" class="home page-template-default page page-id-5680 _masterslider _msp_version_3.2.7 woocommerce-no-js">
<?php wp_body_open(); ?>

  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NP5WSZ6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="body-wrapper  float-menu">
    <header class="greennature-header-wrapper header-style-5-wrapper greennature-header-with-top-bar">

        <div id="greennature-header-substitute"></div>
        <div class="greennature-header-inner header-inner-header-style-5">
            <div class="greennature-header-container container">
                <div class="greennature-header-inner-overlay"></div>

                <a href="<?php echo home_url(); ?>">
                  <img src="<?php echo $redux_demo['opt-text']; ?>" alt="The logo for The Gorilla Project">
              </a>

                <div class="greennature-navigation-wrapper">
                    <nav class="greennature-navigation" id="greennature-main-navigation">
                        <ul id="menu-main-menu-1" class="sf-menu greennature-main-menu">

                            <?php echo $redux_demo['Header1link']; ?>


                        </ul>
                        
                        <?php echo $redux_demo['Header2link']; ?>
                        
                      

                    </nav>
                    <div class="greennature-navigation-gimmick" id="greennature-navigation-gimmick"></div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </header>

























