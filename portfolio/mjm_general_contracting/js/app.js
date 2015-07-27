/*  Based on Worthy, a Bootstrap template created by HTMLCoder
    http://htmlcoder.me
    Creative Commons Attribution 3.0 License
    https://creativecommons.org/licenses/by/3.0/us/ */

(function($){
	$(document).ready(function(){
	
        // Backstretch
		$(".banner-image").backstretch('images/banner.jpg');

        // Animations
		if (($("[data-animation-effect]").length>0) && !Modernizr.touch) {
			$("[data-animation-effect]").each(function() {
				var $this = $(this),
				animationEffect = $this.attr("data-animation-effect");
				if(Modernizr.mq('only all and (min-width: 768px)') && Modernizr.csstransitions) {
					$this.appear(function() {
						setTimeout(function() {
							$this.addClass('animated object-visible ' + animationEffect);
						}, 400);
					}, {accX: 0, accY: -130});
				} else {
					$this.addClass('object-visible');
				}
			});
		};

		// Modal
		if($(".modal").length>0) {
			$(".modal").each(function() {
				$(".modal").prependTo( "body" );
			});
		}

	});
})(this.jQuery);