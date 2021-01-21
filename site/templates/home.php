<?php snippet('header') ?>

  <main class="main landing" role="main">
    <!-- LOCAL PAGE HEADER -->
    <header>
      	<section class="showreel">
			<!-- Showreel -->
			<video playsinline autoplay muted loop poster="<?= $site->uri() . '/content/home/' . $page->showreel() ?>.jpg">
				<source src="<?= $site->uri() . '/content/home/' . $page->showreel() ?>.webm" type="video/webm" />
				<source src="<?= $site->uri() . '/content/home/' . $page->showreel() ?>.ogg" type="video/ogg" />
				Sorry, your browser doesn't support embedded videos, but don't worry, you can <a href="<?= $site->url() . '/content/home/' . $page->showreel() ?>.mp4">download it</a>
				and watch it with your favorite video player!
			</video>

			<!-- Showreel Headline -->
			<h1 class="showreel--title"><?= $page->title() ?></h1>
      	</section>
    </header>
  
	<!-- PROJECT SHOWCASE -->
    <section class="projects-section">

		<!-- Showcase Loop -->
		<?php $site->displayShowcase('projects', 4) ?>

		<!-- Link to all projects -->
		<p class="projects-section-more">
			<a href="<?= page('projects')->url() ?>" class="btn"><?php echo t('Show all projects') ?></a>
		</p>
      
    </section>
	
	<!-- RELATED SHOWCASE -->
    <section class="related__showcase">	
      
		<h3><?php echo t('Recent articles') ?></h3>
		
		<!-- Section Description -->
        <div class="intro text">
          <?= $page->intro()->kirbytext() ?>
        </div>

        <!-- Sub Pages Loop -->
        <?php $site->pullRelatedPages('articles') ?>

		<!-- Link to all articles -->
        <p class="articles-section-more">
			<a href="<?= page('articles')->url() ?>" class="btn"><?php echo t('Show all articles') ?></a>
		</p>
      
    </section>

  </main>

<?php snippet('footer') ?>