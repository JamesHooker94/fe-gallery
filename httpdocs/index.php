<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>
		FE Gallery
		</title>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
		<meta name="generator" content="http://www.propeller.uk.com" />
		<meta name="author" content="propeller communications" />
		<link rel="stylesheet" href="/assets/css/style.css">
	</head>

	<body>

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

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="/assets/js/scripts.js"></script>

	</body>
</html>