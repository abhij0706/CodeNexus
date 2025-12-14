jQuery(document).ready(function()
{
	 "use strict"

	 $(".slider").ripples({       //function to get the  ripple water effect 
	  dropRadius:12 ,
	  perturbance: 0.01,
	  
	});

	 // function to create jQuery typing effect


	// function for sticky navigation using DOM

	

	//magnific popup for work section 

	$('.work').magnificPopup({
	  delegate: 'a', // child items selector, by clicking on it popup will open
	  type: 'image',
	  gallery:{ enabled:true}
	  // other options
	});

	$('.owl-carousel').owlCarousel();

//   Email notification



	


});