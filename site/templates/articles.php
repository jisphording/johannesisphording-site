<?php snippet('header') ?>

	<main class="main" role="main">

		<!-- LOCAL PAGE HEADER -->
		<header>
			<!-- Intro -->
			<div class="intro text <?= $page ?>">
				<?= $page->text()->kirbytext() ?>
			</div>
		</header>
		
		<div>
			<!-- Showcase Loop -->
			<?php $site->displayShowcase('articles', 99) ?>
		</div>

	</main>

<?php snippet('footer') ?>