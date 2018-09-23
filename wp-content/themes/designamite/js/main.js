require('./plugins');

var $ = jQuery;

window.main = {

  init: function()
  {

    main.slider();
    main.readMore();

  },

  	slider: function() {
		$('#owl-carousel-slider').owlCarousel({
	        responsive:{
	            0:{
	                items:1,
	            }
	        },
	        nav:false,
	        loop: false,
	        autoplay:false,

	    });
	},

  	readMore: function() {

  		var c = false;

	    $('.read-more').click(function(){

	    	if( c === false) {
	    		$(this).parent().find('.hidden-block').addClass('open');
	    		c = true;
	    	} else {
	    		$(this).parent().find('.hidden-block').removeClass('open');
	    		c = false;
	    	}

	    });

  	},

  	global: require('./methods/global'),

}

$(document).ready(main.init);