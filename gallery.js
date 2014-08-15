jQuery(function($) {
	// Gallery
	$('.js-gallery').each(function(){
		$gallery = $(this);
		$('.gallery__thumbs a', $gallery).click(function(e){
			e.preventDefault();
			var $imgLink = $(this);
			$imgLink.addClass('current').siblings().removeClass('current');
			var bigImg = $imgLink.attr('href');
			var $bigView = $('.gallery__large', $gallery);
			$('h5', $bigView).text($imgLink.attr('title'));
			$('img', $bigView).attr('src', bigImg);
			if ($('.top').css('position')=='fixed') {
				$bigView.css('max-height', ($(window).height() - $('.top').height())+'px');
			} else {
				$bigView.css('max-height', $(window).height()+'px');
			}
			if (!$imgLink.next().is('a')) {
				$('.js-gallery-next', $gallery).hide();
			} else {
				$('.js-gallery-next', $gallery).show();
			}
			if (!$imgLink.prev().is('a')) {
				$('.js-gallery-prev', $gallery).hide();
			} else {
				$('.js-gallery-prev', $gallery).show();
			}
			$('img', $bigView).one('load', function(){
				$bigView.slideDown();
				scrollToElem('#gallery-large');
			}).each(function(){
				if(this.complete) $(this).load();
			});
		});
		$('.gallery__close', $gallery).click(function(e){
			e.preventDefault();
			$('.gallery__large', $gallery).slideUp();
			$('.gallery__thumbs a', $gallery).removeClass('current');
		});
		$('.js-gallery-next', $gallery).click(function(e){
			e.preventDefault();
			$('.gallery__thumbs .current', $gallery).next().trigger('click');
		});
		$('.js-gallery-prev', $gallery).click(function(e){
			e.preventDefault();
			$('.gallery__thumbs .current', $gallery).prev().trigger('click');
		});

	});
});