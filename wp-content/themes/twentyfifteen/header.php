<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class('ready animation-started animation-ended'); ?>>
<div id="page" class="hfeed site">
	<nav class="navbar navbar-default navbar-cinnamon navbar-fixed-top" role="navigation">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <a class="navbar-brand" href="<?php echo home_url(); ?>">
					<div class="logo">
						<span class="typo-brand-weak logotype-about">essays</span><span id="logotype-displayname" class="typo-brand-strong logotype-displayname">alessio</span>
					</div>
					<!-- <img src="./images/logo.svg" alt="About Alessio" height="37" /> -->
				</a>
	    </div>

			<!-- <button onclick="$('#contact').modal('toggle');" class="link link-primary pull-right modal-closer no-padding navbar-btn">
				<img src="images/email.svg" alt="Close">
				<img src="images/cross.svg" class="hidden" alt="Close">
			</button> -->
	  </div><!-- /.container-fluid -->
	</nav><!-- /.navbar -->


	<div id="content" class="container site-content">
