<?php snippet('header') ?>

<!-- PROJECT PAGE MAIN CONTENT -->
<main class="main" role="main">

	<!-- LOCAL PAGE HEADER -->
	<header>
		<!-- Intro -->
		<div class="intro text <?= $page ?>">
			<?= $page->text()->kirbytext() ?>
		</div>
	</header>

	<!-- PROJECT SHOWCASE -->
	<section class="projects__showcase">

		<!-- Showcase Loop -->
		<?php $site->displayShowcase('projects', 99) ?>

		<!-- Link to all projects -->
		<p class="projects__showcase--more">
			<a href="<?= page('projects')->url() ?>" class="btn"><?php echo t('Show all projects') ?></a>
		</p>

	</section>

</main>
<!-- END - PROJECT PAGE MAIN CONTENT -->

<?php snippet('footer') ?>