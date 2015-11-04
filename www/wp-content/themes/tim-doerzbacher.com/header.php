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
					<a class="navbar-brand" href="/~tim/tim-doerzbacher.com/www.tim-doerzbacher.com/web/app_dev.php/">
						<img alt="tim-doerzbacher.com" src="/~tim/tim-doerzbacher.com/www.tim-doerzbacher.com/web/img/icons/my-logo.svg">
					</a>
				</div>

				<div class="collapse navbar-collapse" id="main-navigation">
					<ul class="nav navbar-nav">
						<li>
							<a href="http://www.tim-doerzbacher.com/home">home</a>
						</li>
						<li>
							<a class="active" href="<?php echo get_page_uri('home'); ?>">blog</a>
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
