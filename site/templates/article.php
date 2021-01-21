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

	<!-- RELATED CONTENT -->
    <section class="related__showcase">
		<h3><?php echo t('Related articles') ?></h3>
      
		<div>    
			<!-- Sub Pages Loop -->
			<?php $site->pullRelatedPages('articles') ?>
		</div>

	</section>
	<!-- END - RELATED CONTENT -->
</main>

<?php snippet('footer') ?>
