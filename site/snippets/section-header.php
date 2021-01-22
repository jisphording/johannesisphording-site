<!-- SECTION HEADER -->

<!-- Used to display the keyvisual and title on Article and Project Single View Pages -->
<header>
	<!-- KEYVISUAL / INTRO -->
	<section class="intro">
		<!-- Image Wrapper -->
		<figure class="keyvisual showcase__grid--image">

			<!-- Image -->
			<?php $image = $page->images()->filterBy('filename', '*=', '_keyvisual')->first(); ?>

			<img class="showcase__grid--image--inside" srcset="<?= $image -> srcset([480, 768, 1024, 1280, 1440, 1680, 1920, 2560, 3840]) ?>"
						src="<?= $image -> url()?>" alt="Project: <?= $page->title() ?>" loading="lazy" 
						style="height:<?= floor(($image -> height()) * 0.5) ?>; width:<?= floor(($image -> width()) * 0.5) ?>;">
		</figure>

		<h1><?= $page->title() ?></h1>
	</section>

	<!-- PROJECT / ARTICLE DETAILS -->
	<div class="meta">
		<p><?= $page->year() ?></p>
		<p class="tags"><?= $page->tags() ?></p>
	</div>

	<?php snippet('social') ?>
	
	<hr />
</header>
