<nav class="navigation" role="navigation">
	<!-- Main Menu -->
	<div class="menu menu-item menu__main">

		<?php
		// main menu items
		$items = $pages->listed();

		// only show the menu if items are available
		if($items->isNotEmpty()):
		?>
		
		<!-- The actual Menu -->
		<ul class="menu">
			<?php foreach($items as $item): ?>

				<!-- Menu Item -->
				<li class="menu-item<?= r($item->isOpen(), ' is-active') ?>">
					<a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
				</li>

			<?php endforeach ?>
		</ul>
		
		<?php endif ?>

	</div>
	<!-- End - Main Menu -->
</nav>