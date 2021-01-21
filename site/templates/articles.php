<?php snippet('header') ?>

<!-- ARTICLES PAGE MAIN CONTENT -->
<main class="main" role="main">

	<!-- LOCAL PAGE HEADER -->
	<header>
		<!-- Intro -->
		<div class="intro text <?= $page ?>">
			<?= $page->text()->kirbytext() ?>
		</div>
	</header>

	<!-- ARTICLE SHOWCASE -->
	<section class="projects__showcase">

		<!-- Showcase Loop -->
		<?php $site->displayShowcase('articles', 99) ?>

		<!-- Link to all articles -->
		<p class="projects__showcase--more">
			<a href="<?= page('articles')->url() ?>" class="btn"><?php echo t('Show all articles') ?></a>
		</p>

	</section>

</main>
<!-- END - ARTICLES PAGE MAIN CONTENT -->

<?php snippet('footer') ?>