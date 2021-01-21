<!-- SITE HEAFOOTERDER -->
<footer role="contentinfo">
	<!-- Footer -->
	<section class="section__top">
		
		<!-- Logo / Branding -->
		<div class="branding">
			<a title="Logo links back to homepage" href="<?= $site->homePage()->url() ?>" rel="home">
				<img src="<?= $site->uri() ?>/dist/img/logotype.svg" alt="Vector image of the branding logo">
			</a>
		</div>

		<!-- Footer Info -->
		<?php
		echo $site->copyright()->kirbytext();
		echo $site->zusatz()->kirbytext();
		echo $site->year()->kirbytext();
		?> 
	</section>

	<!-- Credits & Legal Information -->	
	<section class="section__bottom">
		<?php
		echo $site->legal()->kirbytext();
		echo $site->meta()->kirbytext();
		?>   
	</section>
</footer>

<!-- ADDITIONAL LINKS -->
  
</body>
</html>