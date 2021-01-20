<?php snippet('header') ?>

<main class="main" role="main">
	<article class="article">

		<!-- LOCAL PAGE HEADER -->
		<?php snippet('section-header') ?>

		<!-- ARTICLE CONTENT -->
		<div class="article-text text">
			<?= $page->text()->kt() ?>
		</div>
		
	</article>
</main>

<?php snippet('footer') ?>
