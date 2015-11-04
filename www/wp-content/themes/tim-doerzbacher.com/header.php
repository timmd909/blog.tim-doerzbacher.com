<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />

	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="description" content="Personal website for Tim Doerzbacher">
	<meta name="author" content="Tim Doerzbacher">

	<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/favicon-194x194.png" sizes="194x194">
	<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#006699">
	<link rel="shortcut icon" href="/favicon.ico">
	<meta name="apple-mobile-web-app-title" content="tim-doerzbacher.com">
	<meta name="application-name" content="tim-doerzbacher.com">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="msapplication-config" content="/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">


	<meta name="viewport" content="width=device-width" />

	<link href="<?php echo get_template_directory_uri() ?>/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri() ?>/css/font-awesome.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri() ?>/css/style.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri() ?>/css/blog.css" rel="stylesheet">
	<?php /* wp_head(); */ ?>
</head>

<body>

	<header class="header-main">
		<nav class="navbar navbar-main navbar-fixed-top">
			<div class="container-fluid">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navigation" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="http://www.tim-doerzbacher.com/">
						<img alt="tim-doerzbacher.com" src="http://www.tim-doerzbacher.com/img/icons/my-logo.svg">
					</a>
				</div>

				<div class="collapse navbar-collapse" id="main-navigation">
					<ul class="nav navbar-nav">
						<li>
							<a href="http://www.tim-doerzbacher.com/home">home</a>
						</li>
						<li class="active" >
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">blog</a>
						</li>
						<li>
							<a href="http://www.tim-doerzbacher.com/resume">resume</a>
						</li>
						<li>
							<a href="http://www.tim-doerzbacher.com/links">links</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<main>
		<div class="container">
