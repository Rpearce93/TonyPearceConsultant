require('./plugins');

var $ = jQuery;

window.designamite = {

  init: function()
  {

    designamite.global.init();
    designamite.slider();

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

  global: require('./methods/global'),

}

$(document).ready(designamite.init);