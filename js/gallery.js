$(document).ready(function() {

	if ($('[data-lightbox="true"]')) {
		// find all images in data-lightbox attr container
		var images = $(this).find('img');

		$(this).find('img').on('click', function() {
			// create lightbox
			$(this).parents('[data-lightbox="true"]').after('<div class="lightbox"><section class="flkty"></section></div>');
			$('.lightbox').hide().fadeIn(300);

			// initialize flickity
			$('.flkty').flickity({
				autoPlay: false,
				pageDots: false,
				imagesLoaded: true,
				adaptiveHeight: true
			});

			// append the images to the lightbox gallery
			$('.flkty').flickity('append', images.clone());

			// open gallery at specific index
			var index = $(this).index();
			$('.flkty').flickity('selectCell', index);

			// set focus to flickity so keyboard navigation can be used
			$('.flkty').focus();

			// append close button
			$('.flkty').append('<button class="flickity-prev-next-button close" aria-label="close"><svg viewBox="0 0 100 100"><path d="M 10,10 L 90,90 M 10,90 L 90,10" class="cross"></path></svg></button>');
		});
	}

	// reposition images once loaded
	$(window).load(function() {
		$('.flkty').flickity('reposition');
	});

	// select cell on staticClick
	$(document).on('staticClick.flickity', '.flkty', function(event, pointer, cellElement, cellIndex) {
		if (typeof cellIndex == 'number') {
			$('.flkty').flickity('selectCell', cellIndex);
		}
	});

	// closeLightbox function
	function closeLightbox() {
		$('.lightbox').fadeOut(300, function() {
			$(this).remove();
		});
	}

	// trigger closeLightbox() on outside click
	$(document).on('click', '.lightbox', function(e) {
		if(!$(e.target).is('.flkty, .flkty *')) {
			closeLightbox();
		};
	});

	// trigger closeLightbox() on close button
	$(document).on('click', '.flickity-prev-next-button.close', function() {
		closeLightbox();
	});

	// trigger closeLightbox() on escape
	$(document).on('keyup', function(e) {
		if(e.keyCode == 27) {
			closeLightbox();
		}
	});

});
