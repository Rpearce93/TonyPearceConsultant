<!doctype html>
<?php include __DIR__ . '/inc/maintenance.php'; ?>
<!--
SITE BY DESIGNAMITE.CO.UK
-->
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="apple-touch-icon" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/images/favicons/16px.png">
	<link rel="apple-touch-icon" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/images/favicons/32px.png">
	<link rel="apple-touch-icon" sizes="64x64" href="<?php echo get_template_directory_uri(); ?>/images/favicons/64px.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/favicons/72px.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/favicons/76px.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/favicons/114px.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/favicons/120px.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/favicons/144px.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/favicons/152px.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/images/favicons/180px.png">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicons/32px.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicons/64px.png" sizes="64x64">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicons/96px.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicons/144px.png" sizes="144x144">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

	<?php wp_head(); ?>
	<?php if ( strpos(site_url(), 'designamite.info') ) echo "<meta name='robots' content='noindex' />"; ?>

</head>

<body <?php body_class(); ?>>

	<!--
	Google Analytics
	<script async>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'ADDIDHERE', 'auto');
	  ga('send', 'pageview');
	</script> -->

<div id="page" class="site">

	<header id="masthead" class="site-header">

		<div class="logo-wrapper">
			<a href="/"><img src="<?php echo get_template_directory_uri();?>/images/just-name-logo.png"></a>
		</div>

		<div class="hamburger-wrapper">
			<button class="c-hamburger c-hamburger--htx"><span></span></button>
		</div>

<!-- 		<div class="contact-information">
			<h5><span>Call Me On</span>:<br /> 00000 000000</h5>
		</div> -->

		<nav id="site-navigation" class="main-navigation">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'before' => '',                                 // before the menu
					'after' => '',                                  // after the menu
					'link_before' => '',                            // before each link
					'link_after' => '<span></span>',                // after each link
				) );
			?>
		</nav><!-- #site-navigation -->
		
	</header><!-- #masthead -->

	<?php get_template_part('/template-parts/slider'); ?>

	<div id="content" class="site-content">
