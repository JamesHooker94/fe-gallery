<section class="gallery js-gallery">
	<figure class="gallery__large block--pattern-dark" id="gallery-large">
		<header class="gallery__large__header">
			<a href="" class="gallery__nav js-gallery-prev"><i class="icon-chevron-left"></i></a>
			<h5></h5>
			<a href="" class="gallery__nav js-gallery-next"><i class="icon-chevron-right"></i></a>
			<a href="" class="gallery__close">&times;</a>
		</header>
		<img src="">
	</figure>
	<div class="gallery__thumbs">

		<?php
			require '/var/www/shared/galleryincludes/galleryv2.php';
			$gallery = new Gallery(true, 1256, 5182, '', 20, true);
			$gallery->getHeader();
			$galleryImages = $gallery->getGalleryImageArray();
		?>

		<? for($i = 0; $i < count($galleryImages); $i++) : ?>
			<a href="<?= $galleryImages[$i]['large'];?>">
				<img src="<?= $galleryImages[$i]['thumb'];?>" alt="">
			</a>
		<? endfor; ?>

	</div>
</section>