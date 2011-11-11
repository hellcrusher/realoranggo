<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	wp_enqueue_script( 'jquery' );
	wp_head();
?>

</head>

<body <?php body_class(); ?>>
<div id="top" >
	<header id="bloghead" >
		<hgroup>
			<h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1>
			<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>
		<ul>
			<li class="pagelink" ><a href="<?php echo esc_url( home_url( '/' ) ); ?>" ><img src="<?php bloginfo('template_url'); ?>/images/home.jpg" alt="Home @Reality Leap" /></a></li>
			<li class="pagelink" ><a href="<?php echo esc_url( home_url() ); ?>/about" ><img src="<?php bloginfo('template_url'); ?>/images/aboutpage.jpg" alt="Know more about out circle" /></a></li>
			<li class="pagelink" ><a href="<?php echo esc_url( home_url() ); ?>/contact" ><img src="<?php bloginfo('template_url'); ?>/images/contactpage.jpg" alt="Have something to ask?" /></a></li>
			<li class="pagelink" ><a href="<?php echo esc_url( home_url() ); ?>/authors" ><img src="<?php bloginfo('template_url'); ?>/images/authorspage.jpg" alt="Meet the ones behind the scene" /></a></li>
		</ul>
	</header>
</div>
<div id="container" >