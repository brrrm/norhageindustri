(function( $ ) {

	$(document).ready(function(){
		$('#hamburger').click(function(e){
			e.preventDefault();
			$('body').toggleClass('showNav');
		});

		if($('.headerblock').length){
			window.scrollInterval = window.setInterval(function(){
				if(window.scrollY <  window.innerHeight){
					$('.main-navigation:not(.over-headerblock)').addClass('over-headerblock');
				}
				if(window.scrollY >= window.innerHeight){
					$('.main-navigation.over-headerblock').removeClass('over-headerblock');
				}
			}, 100);
		}
		$('.menu-secondary-menu-container')



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