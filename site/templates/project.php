<?php snippet('header') ?>

<main class="main project" role="main">
	
	<!-- LOCAL PAGE HEADER -->
    <?php snippet('section-header') ?>
	
	<!-- PROJECT CONTENT -->
    <div class="text">

		<!-- Project Description  -->
		<h3><?php echo t('Project Description') ?></h3>
		
		<!-- Kirbytext - Intro -->
		<article>
			<?= $page->intro()->kirbytext() ?>
		</article>
		
		<!-- Intro Image after initial Text -->
		<ul  class="project-gallery">
			<li><img src="<?= $page->url() . '/intro-img.jpg' ?>"></li>
		</ul>
		
		<!-- Kirbytext - Main -->
		<article id="article-main">
			<?= $page->text()->kirbytext() ?>
		</article>

		<!-- PROJECT GALLERY -->
		<ul class="project-gallery">
			<?php
			// Filtering images from backend
			foreach($page->images()->filterBy('extension', 'webp')->filterBy('filename', '!*=', '_keyvisual')->filterBy('filename', '!*=', 'intro-img')->sortBy('sort', 'asc') as $image): ?>
			<li>
				<figure>
					<img src="<?= $image->url() ?>" alt="<?= $page->title() ?>">
				</figure>
			</li>
			<?php endforeach ?>
		</ul>
	</div>
	<!-- END - PROJECT CONTENT -->
	
	<!-- RELATED CONTENT -->
    <section class="related__showcase">
		<h3><?php echo t('Related projects') ?></h3>
      
		<div>    
			<!-- Sub Pages Loop -->
			<?php $site->pullRelatedPages('projects') ?>
		</div>

	</section>
	<!-- END - RELATED CONTENT -->
  </main>

<?php snippet('footer') ?>
