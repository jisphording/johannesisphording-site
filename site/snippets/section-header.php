<!-- SECTION HEADER -->

<!-- Used to display the keyvisual and title on Article and Project Single View Pages -->
<header>
	<!-- KEYVISUAL / INTRO -->
	<section class="intro">
		<!-- Image Wrapper -->
		<figure class="keyvisual showcase__grid--image">

			<!-- Keyvisual -->
			<?php $image = $page->images()->filterBy('filename', '*=', '_keyvisual')->first();

			// Writing filename to video variable while stripping the file extension
            // This is achieved with basename and the respective kirbyobjects. 
			// The dot has to be 'manually' connected to the extension
			// TODO: video check is used multiple times, should be moved to site methods plugin
            $video_dir = "video/";
			$file_video = NULL;
			$file_video = $image->filename();
			$file_video = substr($file_video, 0, strrpos($file_video, '.')) . ".webm";

			// Testing if a video with the same filename exists 
			$filetocheck = $video_dir . $file_video;
			// If exists -> put video here
			if ( file_exists( $filetocheck )) { ?>
				<video playsinline autoplay muted loop>
                    <source src="<?= $site->url('') . '/' . $video_dir . $file_video ?>" type="video/webm">
                </video>
			<?php } // endif

			// if no video than just put the image
			else { ?>
				<img class="showcase__grid--image--inside" srcset="<?= $image -> srcset([480, 768, 1024, 1280, 1440, 1680, 1920, 2560, 3840]) ?>"
							src="<?= $image -> url()?>" alt="Project: <?= $page->title() ?>" loading="lazy" 
							style="height:<?= floor(($image -> height()) * 0.5) ?>; width:<?= floor(($image -> width()) * 0.5) ?>;">
			<?php } // endelse ?>
		</figure>

		<h1>
			<?php 
			$titlelong = $page->titlelong();
			$title = $page->title();

			if( $titlelong != '' ) {
				echo $titlelong;
			} else {
				echo $title;
			} ?>
		</h1>

	</section>

	<!-- PROJECT / ARTICLE DETAILS -->
	<div class="meta">
		<p><?= $page->year() ?></p>
		<p class="tags"><?= $page->tags() ?></p>
	</div>
	
	<hr />
</header>
