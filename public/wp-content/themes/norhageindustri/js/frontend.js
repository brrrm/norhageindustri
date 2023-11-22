(function( $ ) {

	$(document).ready(function(){
		$('#hamburger').click(function(e){
			e.preventDefault();
			$('body').toggleClass('showNav');
		});

		window.scrollInterval = window.setInterval(function(){
			if(window.scrollY > window.innerHeight){
				$('body:not(.small-height-header)').addClass('small-height-header');
			}else{
				$('body.small-height-header').removeClass('small-height-header');
			}
		}, 100);
		if($('.headerblock').length){
			window.headerBlockScrollInterval = window.setInterval(function(){
				if(window.scrollY <  window.innerHeight){
					$('.main-navigation:not(.over-headerblock)').addClass('over-headerblock');
				}
				if(window.scrollY >= window.innerHeight){
					$('.main-navigation.over-headerblock').removeClass('over-headerblock');
				}
			}, 100);
		}

		$('.expander').click(function(e){
			e.preventDefault();
			$(this).parent().toggleClass('expanded');
		});

		$('.menu-toggle').click(function(e){
			e.preventDefault();
			$('#site-navigation').toggleClass('expanded');
		});

		$('.projects-block .slider-nav button').click(function(e){
			e.preventDefault();
			let s = $(this).parents('.projects-block').scrollLeft();
			if($(this).hasClass('left')){
				s -= $(window).width() / 3;
			}else{
				s += $(window).width() / 3;
			}
			$(this).parents('.projects-block').scrollLeft(s);
		});




		$('.productHeaderBlock .image-col').click(function(e){
			e.preventDefault();
			if(!$('.popup-overlay').length){
				createOverlay();
			}
			if(!$('.image-popup').length){
				createImagePopup();
			}
			$('body').addClass('showOverlay');
		});

		function createOverlay(){
			let overlay = $('<div />')
					.addClass('popup-overlay')
					.appendTo($('body'));
		}

		function createImagePopup(){
			let popup = $('<div />')
				.addClass('image-popup')
				.appendTo($('body'));
			$('h1.wp-block-post-title').clone().appendTo(popup);
			$('.productHeaderBlock .image-col').clone().appendTo(popup);
			$('.productHeaderBlock .image-col slider-nav').appendTo(popup);
			let closeBtn = $('<button />').text('Close').addClass('close-button').click(function(e){
				e.preventDefault();
				$('body').removeClass('showOverlay');
			}).appendTo(popup);
	

			popup.find('.image-col').click(function(e){
				$(this).toggleClass('contain');
			});


		}


		/*
		function gtag() { dataLayer.push(arguments); }
		$('#cn-accept-cookie').click(function(e){
			console.log('clicker');
			window.dataLayer = window.dataLayer || [];
			

			gtag('consent', 'update', {
					        'ad_storage': 'granted',
					        'analytics_storage': 'granted',
					        'functionality_storage': 'granted',
					        'personalization_storage': 'granted',
					        'security_storage': 'granted',
					    });
			dataLayer.push({'event': 'consent_given_in_popup'});
		});
		*/
	});

})(jQuery);