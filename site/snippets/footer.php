<!-- SITE HEAFOOTERDER -->
<footer class="footer cf" role="contentinfo">
    <div class="wrap wide">

		<!-- Footer -->
		<section class="section-top">

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
		<section class="section-bottom">
			<?php
			echo $site->legal()->kirbytext();
			echo $site->meta()->kirbytext();
			?>   
		</section>
    </div>
  </footer>

<!-- ADDITIONAL LINKS -->
  
</body>
</html>