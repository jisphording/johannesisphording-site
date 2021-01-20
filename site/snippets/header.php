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
	<link rel="canonical" href="https://johannesisphording-site.test/">

	<!-- main css file for styling -->
	<?= css(['dist/index.css', '@auto']) ?>

</head>

<!-- SITE BODY -->
<body class="loading">

	<!-- PAGE WRAPPER (closed in footer) -->
	<div class="page page--<?= $page->uri() ?>">
	  
		<!-- LOCAL PAGE HEADER -->
		<header id="header" class="header wrap" role="banner">

			<!-- Logo / Branding -->
			<div class="branding">
				<a title="Logo links back to homepage" href="<?= $site->homePage()->url() ?>" rel="home">
					<img src="<?= $site->url('index') ?>/dist/img/logotype.svg" alt="Vector image of the branding logo">
				</a>
			</div>

			<!-- Adding the menus -->
			<?php snippet('menu') ?>
			<?php snippet('languages'); ?>

		</header>

