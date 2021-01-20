<?php

// CUSTOM SITE METHODS
// ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
//
// This "plugin" contains a few custom functions used across multiple pages on different sites.

Kirby::plugin('studio-isphording/site-methods', [
  'siteMethods' => [

		// PULL RELATED PAGES
		// ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- ----- -----
		//
		// Pulling all related child pages of a given page into the loop
		'pullRelatedPages' => function ($page = '', $limit = 8) {

			if( !is_int( $limit) ) {
				$limit = 8;
			}

			$subpages = kirby()->site()->pages()->find($page)->children()->limit($limit); ?>

			<ul class="rel-article-showcase grid gutter-2">

			<?php foreach($subpages as $subpage): ?>

				<li class="rel-article-showcase-item column">
					<a href="<?= $subpage->url() ?>" class="rel-article-showcase-link">
					<?php if($image = $subpage->images()->filterBy('filename', '*=', '_keyvisual')->first()): 
					// thumb for all browsers
					$thumb = $image->crop(490, 390, 35, true);
					// hq thumb is loaded were interaction observer is available
					$thumbHQ = $image->crop(690, 590, 75); ?>
						<img src="<?= $thumb->url() ?>" data-src="<?= $thumbHQ->url() ?>" alt="Thumbnail for <?= $subpage->title() ?>" class="rel-article-showcase-image" />
					<?php endif ?>
					<div class="rel-article-showcase-caption">
						
						<h1 class="rel-article-showcase-title"><?= $subpage->title() ?></h1>
						
						<div class="tags">
						<h4>Related</h4>
						
						<h4>Tags</h4>
						<p><?= $subpage->tags() ?></p>
						</div>
						
					</div>
					</a>
				</li>

			<?php endforeach ?>

			</ul>

			<?php
		}
  ] // end site methods
]); 
?>