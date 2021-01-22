<?php snippet('header') ?>

<!-- PROJECT SINGLE VIEW MAIN CONTENT -->
<main class="main project__single" role="main">
	
	<!-- LOCAL PAGE HEADER -->
    <?php snippet('section-header') ?>
	
	<!-- PROJECT CONTENT -->
    <div class="text project__single--text">

		<!-- Project Description  -->
		<h3><?php echo t('Project Description') ?></h3>
		
		<!-- Kirbytext - Intro -->
		<article>
			<?= $page->intro()->kirbytext() ?>
		</article>
		
		<!-- Intro Image after initial Text -->
		<ul  class="project__single--gallery">
			<li>
				<!-- Image Wrapper -->
				<figure class="showcase__grid--image">

					<!-- Image -->
					<?php $image = $page->images()->filterBy('filename', '*=', '_intro-img')->first(); ?>
					<!-- TODO - The way the following img code is implemented is used so frequently on this website that it
								is probably a good idea to roll it into it's own function -->
					<img class="showcase__grid--image--inside" srcset="<?= $image -> srcset([480, 768, 1024, 1280, 1440, 1680, 1920, 2560, 3840]) ?>"
							src="<?= $image -> url()?>" alt="Project: <?= $page->title() ?>" loading="lazy" 
							style="height:<?= floor(($image -> height()) * 0.5) ?>; width:<?= floor(($image -> width()) * 0.5) ?>;">
				</figure>
			</li>
		</ul>
		
		<!-- Kirbytext - Main -->
		<article id="article-main">
			<?= $page->text()->kirbytext() ?>
		</article>

		<!-- PROJECT GALLERY -->
		<ul class="project__single--gallery">
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
</main>
<!-- END - PROJECT SINGLE VIEW MAIN CONTENT -->

<!-- RELATED CONTENT -->
<section class="related__showcase">
	<h3><?php echo t('Related projects') ?></h3>
      
	<div>    
		<!-- Sub Pages Loop -->
		<?php $site->pullRelatedPages('projects', 4) ?>
	</div>

</section>
<!-- END - RELATED CONTENT -->

<?php snippet('footer') ?>
