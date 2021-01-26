<?php snippet('header') ?>

  <main class="main" role="main">
    <!-- LOCAL PAGE HEADER -->
    <header>
		<!-- Taking the showreel styling from home -->
		<section class="showreel">
			<!-- Mood Image -->
			<img src="<?= $page->url() . '/' . $page->cover() ?>" alt="Legal Text Mood Image">

			<!-- Showreel Headline -->
			<h1 class="showreel--title"><?= $page->title() ?></h1>
		</section>
    </header>
  
	<!-- LEGAL CONTENT -->
    <section class="legal-section">
      
      <div>
        <article>
          	<?= $page->text()->kirbytext() ?>
        </article>
      </div>
      
    </section>
	
	<!-- CREDITS -->
    <section class="credit-section">
      
      <div>
        <article>
          	<?= $page->credits()->kirbytext() ?>
        </article>
      </div>
      
    </section>

  </main>

<?php snippet('footer') ?>