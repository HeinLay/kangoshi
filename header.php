<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bties-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Google Tag Manager --> 
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-TSBWGZ9');</script> 
	<!-- End Google Tag Manager -->
	<?php
		$canonical_url = get_seo_url();
		$eyecatch_url = get_eyecatch_url();
		$seo_title = get_seo_title();
	?>
	<?php /* Meta ------------------------------------- */ ?>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=1200">
	<title><?php echo $seo_title ?></title>
	<meta name="format-detection" content="telephone=no">
	<link rel="canonical" href="<?php echo $canonical_url; ?>" />
	<meta name="description" content="<?php echo get_description(); ?>">
	<?php /* OGP settings ---------------------------------- */ ?>
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo $canonical_url; ?>" />
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	<meta property="og:title" content="<?php echo $seo_title ?>" />
	<meta property="og:description" content="<?php echo get_description(); ?>" />
	<meta property="og:image" content="<?php echo $eyecatch_url; ?>" />
	<?php /* Facebook ---------------------------------- */ ?>
	<meta property="fb:app_id" content="" />
	<?php /* Twitter ---------------------------------- */ ?>
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="<?php echo $seo_title ?>" />
	<meta name="twitter:description" content="<?php echo get_description(); ?>" />
	<meta name="twitter:image" content="<?php echo $eyecatch_url; ?>" />
	<!-- favicon, touch-icon -->
	<link rel="shortcut icon" href="<?php print get_template_directory_uri(); ?>/favicon.ico">
	<link rel="apple-touch-icon" href="<?php print get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png">
	<!-- css -->
	<link rel="stylesheet" href="<?php print get_template_directory_uri(); ?>/assets/css/library/scroll-hint.min.css">
	<link rel="stylesheet" href="<?php print get_template_directory_uri(); ?>/assets/css/style.css">
	<!-- Web Font -->
	<script>
		(function(d) {
			var config = {
					kitId: 'mjz8tad',
					scriptTimeout: 3000,
					async: true
				},
				h = d.documentElement,
				t = setTimeout(function() {
					h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
				}, config.scriptTimeout),
				tk = d.createElement("script"),
				f = false,
				s = d.getElementsByTagName("script")[0],
				a;
			h.className += " wf-loading";
			tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
			tk.async = true;
			tk.onload = tk.onreadystatechange = function() {
				a = this.readyState;
				if (f || a && a != "complete" && a != "loaded") return;
				f = true;
				clearTimeout(t);
				try {
					Typekit.load(config)
				} catch (e) {}
			};
			s.parentNode.insertBefore(tk, s)
		})(document);
	</script>

	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!-- for IE9 below -->
	<!--[if lt IE 9]>
  <script src="<?php print get_template_directory_uri(); ?>/common/js/library/respond.min.js"></script>
<![endif]-->
	<?php wp_head(); ?>
</head>

<body>
<!-- Google Tag Manager (noscript) --> 
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TSBWGZ9" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> 
<!-- End Google Tag Manager (noscript) -->
	<!-- ===============  header ============== -->
	<header class="header">
		<div class="inner">
			<h1>看護師求人・転職お届けチャンネル</h1>
		</div>
	</header>
	<!-- ./header -->