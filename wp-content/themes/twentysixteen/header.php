<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	
	
	<!-- CUSTOM THEME -->
	<link rel="stylesheet" href="http://127.0.0.1/qcpinkfilmfest/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://127.0.0.1/qcpinkfilmfest/assets/css/bootstrap-theme.min.css">

	<link rel="stylesheet" href="http://127.0.0.1/qcpinkfilmfest/assets/css/slick.css">
	<link rel="stylesheet" href="http://127.0.0.1/qcpinkfilmfest/assets/css/slick-theme.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- END OF CUSTOM THEME -->

	<style>
	/* MONTSERRAT */
	@font-face {
	  font-family: 'Montserrat';
	  src: url('http://127.0.0.1/qcpinkfilmfest/assets/fonts/Montserrat/Montserrat-Regular.ttf')  format('truetype'); /* Safari, Android, iOS */
	  font-style: normal;
	  font-weight: normal;
	}
	@font-face {
	  font-family: 'Montserrat';
	  src: url('http://127.0.0.1/qcpinkfilmfest/assets/fonts/Montserrat/Montserrat-Bold.ttf')  format('truetype'); /* Safari, Android, iOS */
	  font-style: normal;
	  font-weight: bold;
	}
	/* AVENIR */
	@font-face {
	  font-family: 'Avenir';
	  src: url('http://127.0.0.1/qcpinkfilmfest/assets/fonts/Avenir/Avenir-Roman.ttf')  format('truetype'); /* Safari, Android, iOS */
	  font-style: normal;
	  font-weight: normal;
	}
	@font-face {
	  font-family: 'Avenir Next';
	  src: url('http://127.0.0.1/qcpinkfilmfest/assets/fonts/Avenir/Avenir-Oblique.ttf')  format('truetype'); /* Safari, Android, iOS */
	  font-style: italic;
	  font-weight: normal;
	}
	@font-face {
	  font-family: 'Avenir Next';
	  src: url('http://127.0.0.1/qcpinkfilmfest/assets/fonts/Avenir/Avenir-Heavy.ttf')  format('truetype'); /* Safari, Android, iOS */
	  font-style: normal;
	  font-weight: bold;
	}
	@font-face {
	  font-family: 'Avenir Next';
	  src: url('http://127.0.0.1/qcpinkfilmfest/assets/fonts/Avenir/Avenir-HeavyOblique.ttf')  format('truetype'); /* Safari, Android, iOS */
	  font-style: italic;
	  font-weight: bold;
	}
	/* AVENIR NEXT */
	@font-face {
	  font-family: 'Avenir Next';
	  src: url('http://127.0.0.1/qcpinkfilmfest/assets/fonts/Avenir Next/AvenirNext-Regular.ttf')  format('truetype'); /* Safari, Android, iOS */
	  font-style: normal;
	  font-weight: normal;
	}
	@font-face {
	  font-family: 'Avenir Next';
	  src: url('http://127.0.0.1/qcpinkfilmfest/assets/fonts/Avenir Next/AvenirNext-Italic.ttf')  format('truetype'); /* Safari, Android, iOS */
	  font-style: italic;
	  font-weight: normal;
	}
	@font-face {
	  font-family: 'Avenir Next';
	  src: url('http://127.0.0.1/qcpinkfilmfest/assets/fonts/Avenir Next/AvenirNext-Bold.ttf')  format('truetype'); /* Safari, Android, iOS */
	  font-style: normal;
	  font-weight: bold;
	}
	@font-face {
	  font-family: 'Avenir Next';
	  src: url('http://127.0.0.1/qcpinkfilmfest/assets/fonts/Avenir Next/AvenirNext-BoldItalic.ttf')  format('truetype'); /* Safari, Android, iOS */
	  font-style: italic;
	  font-weight: bold;
	}
	/* NOVECENTOWIDE */
	@font-face {
	  font-family: 'Novecentowide';
	  src: url('http://127.0.0.1/qcpinkfilmfest/assets/fonts/Novecentowide/Novecentowide-Light.otf')  format('opentype'); /* Safari, Android, iOS */
	  font-style: normal;
	  font-weight: 100;
	}
	@font-face {
	  font-family: 'Novecentowide';
	  src: url('http://127.0.0.1/qcpinkfilmfest/assets/fonts/Novecentowide/Novecentowide-Normal.otf')  format('opentype'); /* Safari, Android, iOS */
	  font-style: normal;
	  font-weight: normal;
	}
	@font-face {
	  font-family: 'Novecentowide';
	  src: url('http://127.0.0.1/qcpinkfilmfest/assets/fonts/Novecentowide/Novecentowide-Bold.otf')  format('opentype'), /* Safari, Android, iOS */
	  font-style: normal;
	  font-weight: bold;
	}
	</style>

	<link rel="stylesheet" href="http://127.0.0.1/qcpinkfilmfest/assets/css/lean.css">
	<link rel="stylesheet" href="http://127.0.0.1/qcpinkfilmfest/assets/css/custom.css">
	
</head>

<body <?php body_class(); ?>>


<!-- CUSTOM STYLE --->
<style>
	body { background: #ff7bac; }
	body.home .site-content { display: none; }
	.site {	margin: 0px; background-color: transparent; }	
	.site-content { padding-top: 200px; }
	.page-header { display: none; }
	.entry-footer { display:none; }
	.main-navigation { display: none; }
</style>
<!-- END OF CUSTOM STYLE -->



<div id="page" class="site">		
	<div class="site-inner">
	
		<nav class="km-navbar">
			<div class="container">
				<div id="km-navbar" class="km-navbar-collapse">
					<ul class="km-navbar-grouping">
						<li class="km-navbar-left">
							<ul class="">
								<li><a href="#">About</a></li>
							    <li><a href="#">Program</a>
									<ul class="km-navbar-dropdown">
										<li><a href="program/opening">Opening</a></li>
										<li><a href="program/keps">Keps</a></li>
									</ul>
								</li>
								<li><a href="#">Films</a>
									<ul class="km-navbar-dropdown">
										<li><a href="http://127.0.0.1/qcpinkfilmfest/category/films">Trailers</a></li>
										<li><a href="films/schedule">Schedule</a></li>
										<li><a href="films/tickets">Tickets</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="km-navbar-brand hidden-xs">
							<a href="http://127.0.0.1/qcpinkfilmfest/"><img class="" src="http://127.0.0.1/qcpinkfilmfest/assets/images/logo-qcpinkfest.png"></a>
						</li>
						<li class="km-navbar-right">
							<ul class="">
								<li><a href="#">News</a></li>
								<li><a href="contact">Contact</a></li>
								<li><a href="#">Archive</a>
									<ul class="km-navbar-dropdown">
										<li><a href="#">2015</a></li>
									  	<li><a href="#">2014</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div id="content" class="site-content">