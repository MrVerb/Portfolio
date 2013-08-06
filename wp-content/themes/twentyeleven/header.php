<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
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
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link type="text/css" rel="stylesheet" href="/css/1140.css">
	<link type="text/css" rel="stylesheet" href="/css/h5bp.css">
	<link type="text/css" rel="stylesheet" href="/css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway+Dots|Sanchez' rel='stylesheet' type='text/css'>
	<link type="text/css" rel="stylesheet" href="/css/blueberry.css">
	<script type="text/javascript" src="/js/jquery.blueberry.js"></script><!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
<div id="wrapper" class="container row">
	<header>
		<div class="row">
			<div class="sevencol logo">
				<a href="/"><img src="/images/rd_logo.png" class="header_logo"></a>
				<h1>Ron de Leon<br><span class="my_title">Verb Being Verb</span></h1>
			</div>
			
			<nav>
			<ul class="header_links">
				<li class="onecol works"><a href="/">Work</a></li>
				<li class="onecol blog"><a href="blog" class="active">Blog</a></li>
				<li class="onecol about"><a href="about">About</a></li>
				<li class="onecol last contact"><a href="contact">Contact</a></li>
			</ul>
			</nav>
		</div>
	</header>
</div>


	<div id="main">
		<hr class="row">
