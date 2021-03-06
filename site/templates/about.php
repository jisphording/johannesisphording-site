<?php snippet('header') ?>

<!-- ABOUT PAGE MAIN CONTENT -->
<main class="main about" role="main">
		
	<!-- LOCAL PAGE HEADER -->
    <?php snippet('section-header') ?>
		
	<!-- ABOUT BODY CONTENT -->
	<div class="text">
		
		<!-- About Headline  -->
		<h3><?php echo t('About') ?></h3>
			
		<!-- Kirbytext - Intro -->
		<article>
			<?= $page->intro()->kirbytext() ?>
		</article>
			
		<!-- about mood -->
		<section class="mood full">
			<img src="<?= $page->url() . '/' . $page->mood_01() ?>">
			<p class="bildunterschrift"><?= $page->mood_01_txt() ?></p>
		</section>
			
		<!-- about experience -->
		<article class="experience">
			<h3>Experience</h3>
			<?= $page->experience()->kirbytext() ?>
		</article>
			
		<!-- about mood images -->
		<section class="moods">
			<ul>
				<li class="full border"><img src="<?= $page->url() . '/' . $page->mood_02() ?>"></li>
				<li class="quarter"><img src="<?= $page->url() . '/' . $page->mood_03a() ?>"></li>
				<li class="quarter"><img src="<?= $page->url() . '/' . $page->mood_03b() ?>"></li>
			</ul>
		</section>
			
		<!-- about awards & recognition -->
		<article class="recognition">
			<h3>Awards &amp; Recognition</h3>
			<?= $page->recognition()->kirbytext() ?>
		</article>
		
	</div>
	<!-- END - ABOUT BODY CONTENT -->
		
	<!-- OFFICE LOCATIONS -->
	<article class="locations">
		<h3>Locations</h3>

		<?= $page->locations()->kirbytext() ?>

		<?php snippet('visitenkarte-bln') ?>
	</article>
		
</main>
<!-- END - ABOUT PAGE MAIN CONTENT -->

<?php snippet('footer') ?>