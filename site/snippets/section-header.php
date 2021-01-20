<!-- SECTION HEADER -->

<!-- Used to display the keyvisual and title on Article and Project Single View Pages -->
<header>
	<!-- KEYVISUAL / INTRO -->
	<section class="intro">
		<div class="keyvisual">
			<img src="<?= $page->url() . '/' . $page->keyvisual() ?>">
			<h1><?= $page->title() ?></h1>
		</div>
	</section>

	<!-- PROJECT / ARTICLE DETAILS -->
	<div class="meta">
		<p><?= $page->year() ?></p>
		<p class="tags"><?= $page->tags() ?></p>
	</div>

	<?php snippet('social') ?>
	
	<hr />
</header>