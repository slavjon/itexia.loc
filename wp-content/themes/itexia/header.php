<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package itexia
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2, user-scalable=yes">
	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#033144">
	<!-- Custom Browsers Color End -->
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="content-wrapper">


		<div class="mobile-menu">
			<div class="wrap">
				<ul class="mobile-menu_nav">
					<li><a href="inventory.html">Inventar-manager</a></li>
					<li><a href="solutions.html">Lösungen</a></li>
					<li><a href="inventory.html#pricing-table">Preise</a></li>
					<li class="header-lang">
						<a href="#">DE</a>
						<a href="#">EN</a>
					</li>
					<div class="header-optionals">
						<a href=".demo-popup" class="btn-dark demo-btn">Freie Demo</a>
						<a href="#" class="chat">
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icons/chat.svg" alt="">
						</a>
					</div>
				</ul>
			</div>
		</div>

		<div id="page" class="site">
			<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'itexia'); ?></a>

			<header id="masthead" class="header">
				<div class="container-fluid">
					<div class="row">
						<div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2">
							<a href="/" class="header-logo">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.svg" alt="">
							</a>
						</div>
						<div class="offset-6 col-2 offset-sm-6 col-sm-2 offset-md-8 col-md-2 offset-lg-2 col-lg-8 offset-xl-2 col-xl-8">
							<nav class="header-nav">
								<ul>
									<li><a href="inventory.html">Inventar-manager</a></li>
									<li><a href="solutions.html">Lösungen</a></li>
									<li><a href="inventory.html#pricing-table">Preise</a></li>
									<li class="header-lang">
										<a href="#" class="active">DE<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icons/menu-arrow.svg" alt=""></a>
										<div class="header-lang__dropdown">
											<a href="#">EN</a>
										</div>
									</li>
									<a href=".demo-popup" class="btn-dark demo-btn">Freie Demo</a>
									<li class="chat">
										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icons/chat.svg" alt="">
									</li>
								</ul>
							</nav>
							<button class="hamburger hamburger--spin" type="button">
								<span class="hamburger-box">
									<span class="hamburger-inner"></span>
								</span>
							</button>
						</div>
					</div>
				</div>
			</header><!-- #masthead -->

			<main class="main">