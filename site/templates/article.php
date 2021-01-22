<?php snippet('header') ?>

<!-- ARTICLE SINGLE VIEW MAIN CONTENT -->
<main class="main article__single" role="main">
	
	<!-- LOCAL PAGE HEADER -->
    <?php snippet('section-header') ?>
	
	<!-- ARTICLE CONTENT -->
    <div class="text article__single--text">

		<!-- Project Description  -->
		<h3><?php echo t('Article Description') ?></h3>
		
		<!-- Kirbytext - Intro -->
		<article>
			<?= $page->intro()->kirbytext() ?>
		</article>
		
		<!-- Kirbytext - Main -->
		<article id="article-main">
			<?= $page->text()->kirbytext() ?>
		</article>
	</div>
	<!-- END - ARTICLE CONTENT -->
</main>
<!-- END - ARTICLE SINGLE VIEW MAIN CONTENT -->

<!-- RELATED CONTENT -->
<section class="related__showcase">
	<h3><?php echo t('Related articles') ?></h3>
      
	<div>    
		<!-- Sub Pages Loop -->
		<?php $site->pullRelatedPages('articles', 4) ?>
	</div>

</section>
<!-- END - RELATED CONTENT -->

<?php snippet('footer') ?>
