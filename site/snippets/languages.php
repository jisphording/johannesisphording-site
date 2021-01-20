<!-- Language Selection Menu -->
<nav class="languages" role="navigation">

	<ul class="languages-menu">
		<?php foreach($kirby->languages() as $language): ?>

			<!-- Menu Item -->
			<li class="menu-item" <?php e($kirby->language() == $language, ' class="is-active"') ?>>

				<a href="<?= $page->url($language->code()) ?>">
					<?= html($language->code()) ?>
				</a>
				
			</li>

		<?php endforeach ?>
	</ul>

</nav>
<!-- End - Language Selection Menu -->