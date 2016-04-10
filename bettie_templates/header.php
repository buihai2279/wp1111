<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<title>
		<?php 
			wp_title('|', true,'right');
			bloginfo('name');
		?>
	</title>	
	<link rel="shortcut icon" href="/favicon.ico">
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body class="home blog" <?php body_class(); ?>>
<div id="site-wrapper" class="site">
    <div class="top-panel_container">
        <div class="container-fluid">
            <div class="row vertical-align__center">
            	<?php get_template_part('nav/nav-top' ); ?>
            </div>
            <div class="row vertical-align__center">
	            <div class="col-xs-12 hidden-md-up hamburger-container">
	                <div class="row vertical-align__center">
	                    <div class="col-xs-3">
	                        <div class="hamburger-toggle align-left"><a href="#" id="hamburger-button"><i class="fa fa-bars"></i></a></div>
	                    </div>
	                    <div class="col-xs-9">
	                    	<?php get_template_part('search-panel') ?>
	                    </div>
	                </div>

	                <div class="hamburger-area" style="display: none;">
		                <?php get_template_part('nav/nav-main' ); ?>
		                <?php get_template_part('nav/nav-top' ); ?>
	                    <ul class="social-list list-header">
	                    	<?php get_template_part('social' ); ?>
	                    </ul>
	                </div>
	            </div>
        	</div>
		</div>
	</div>
	<?php get_template_part('site-header'); ?>

<div id="content" class="site-content">
    <div class="container">
    <?php
		if(!is_archive())
		     get_template_part('breadcrumbs');
	?>
<?php get_template_part('custom-css' ); ?>