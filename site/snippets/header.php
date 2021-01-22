<!doctype html>
<html lang="de">
<!-- SITE HEADER -->
<head>

  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="Online Portfolio of Berlin Based Designer Johannes Isphording." />
    <meta name="author" content="Johannes Isphording" />
    <meta name="keywords" content="digital, graphic, product, design, berlin, germany" />

	<title><?= $site->title() ?> | <?= $page->title() ?></title>
	  
	<!-- Canonical Link to main content for this site -->
	<link rel="canonical" href="https://johannesisphording.de/">

	<!-- main css file for styling -->
	<?= css(['dist/index.css', '@auto']) ?>

	<!-- Enabling a very basic Progressive Web App Manifest in case the user has no internet connection -->
	<link rel="manifest" href="/dist/manifest.webmanifest" crossorigin="use-credentials">

	<!-- Manually adding the apple touch icon for PWA here -->
	<link rel="apple-touch-icon" href="/dist/emblem-quadrat-192x192.png" />

	<!-- Enable non-render-blocking quality for Google Fonts -->
	<!-- Connect to domain of font files -->
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<!-- optionally increase loading priority -->
	<link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Rajdhani:500,700|Roboto:400&display=swap">
	<!-- async CSS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rajdhani:500,700|Roboto:400&display=swap" media="print" onload="this.onload=null;this.removeAttribute('media');">
	<!-- no-JS fallback -->
	<noscript>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rajdhani:500,700|Roboto:400&display=swap">
	</noscript>

</head>

<!-- SITE BODY -->
<body class="loading">

	<!-- PAGE WRAPPER (closed in footer) -->
	<div class="page page--<?= $page->uri() ?>">
	  
		<!-- LOCAL PAGE HEADER -->
		<header id="header" class="header" role="banner">

			<!-- Logo / Branding -->
			<div class="branding">
				<a title="Logo links back to homepage" href="<?= $site->homePage()->url() ?>" rel="home">
					<img src="<?= $site->url('index') ?>/dist/img/logotype.svg" alt="Vector image of the branding logo">
				</a>
			</div>

			<!-- Adding the menus -->
			<section id="mainmenu">
				<?php snippet('menu') ?>
				<?php snippet('languages'); ?>
			</section>

		</header>

