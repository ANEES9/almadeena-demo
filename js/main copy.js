'use strict';
var window_w = jQuery(window).innerWidth();

// var announcementCarousel = document.querySelector('#announcementCarousel')
// var carousel = new bootstrap.Carousel(announcementCarousel, {
//   interval: 3000,
//   wrap: true
// })

// var myCarousel = document.querySelector('#myCarousel')
// var carousel = new bootstrap.Carousel(myCarousel, {
//   interval: 2000,
//   wrap: true
// })

	/*------------------
		Popup
	--------------------*/
	jQuery('.img-popup').magnificPopup({
		type: 'image',
		mainClass: 'img-popup-warp',
		removalDelay: 400,
	});

	// Start Header Animation
		//var height = $(window).height();
		var height = 100;
		jQuery(window).scroll(function () {
			if (jQuery(document).scrollTop() > height- 0) {
				jQuery('.top-menu').addClass('tiny grow');
			} else {
				jQuery('.top-menu').removeClass('tiny shrink');
			}
		});
		var Pheight = 1500;
		jQuery(window).scroll(function () {
			if (jQuery(document).scrollTop() > Pheight- 0) {
				jQuery('.project-top-menu').addClass('tiny grow');
			} else {
				jQuery('.project-top-menu').removeClass('tiny shrink');
			}
		});

	/**back-to-top starts**/
		var offset = 400;
		var duration = 1000;
		jQuery(window).scroll(function() {
			if (jQuery(this).scrollTop() > offset) {
				jQuery('.back-to-top').fadeIn(duration);
			} else {
				jQuery('.back-to-top').fadeOut(duration);
			}
		});

		jQuery('.back-to-top').click(function(event) {
			event.preventDefault();
			jQuery('html, body').animate({scrollTop: 0}, duration);
			return false;
		})
		
		/**back-to-top ends**/
		jQuery('#horizontalTab').responsiveTabs({
			 startCollapsed: 'accordion',
			 collapsible: 'accordion',
			 rotate: false,
			 setHash: true,
		});
		

	   jQuery('#RefreshPage').click(function() {
			window.location.reload();
		});
	//magnific-popup,

	//Multiple galleries
	jQuery('.gallery').each(function() { // the containers for all your galleries
		jQuery(this).magnificPopup({
			delegate: 'a', // the selector for gallery item
			type: 'image',
			gallery: {
				enabled:true
			}
		});
	});
	jQuery('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,
		fixedContentPos: false
	});

	jQuery('#nav').onePageNav({
		currentClass: 'current',
		changeHash: false,
		scrollSpeed: 750,
		scrollThreshold: 0.5,
		filter: '',
		easing: 'swing',
		begin: function() {
			//I get fired when the animation is starting
		},
		end: function() {
			//I get fired when the animation is ending
		},
		scrollChange: function($currentListItem) {
			//I get fired when you enter a section and I pass the list item of the section
		}
	});
	
// Counter
jQuery('.counter').counterUp({
delay: 150,
time: 5000
});

jQuery('.counting').each(function() {
	var jQuerythis = jQuery(this),
		countTo = jQuerythis.attr('data-count');
	
	jQuery({ countNum: jQuerythis.text()}).animate({
	  countNum: countTo
	},
	{
	  duration: 9000,
	  easing:'linear',
	  step: function() {
		jQuerythis.text(Math.floor(this.countNum));
	  },
	  complete: function() {
		jQuerythis.text(this.countNum);
		//alert('finished');
	  }
	});  
  });

jQuery('#home-future-owl').owlCarousel({
	loop: true,
	smartSpeed:1000,
	margin: 10,
	responsiveClass: true,
	navText: ["<i class='fa-solid fa-angle-left'></i>","<i class='fa-solid fa-angle-right'></i>"],
	responsive: {
		0: {
			items: 2,
			nav: true,
			dots: false,
		},
		600: {
			items: 2,
			nav: true,
			dots: false,
		},
		1000: {
			items: 4,
			nav: true,
			dots: false,
			loop: true,
			autoplay: true,
			margin: 30
		}
	}
})
jQuery('#home-new-owl').owlCarousel({
	loop: true,
	smartSpeed:1000,
	margin: 10,
	responsiveClass: true,
	navText: ["<i class='fa-solid fa-angle-left'></i>","<i class='fa-solid fa-angle-right'></i>"],
	responsive: {
		0: {
			items: 1,
			nav: true,
			dots: false,
		},
		600: {
			items: 1,
			nav: true,
			dots: false,
		},
		1000: {
			items: 4,
			nav: true,
			dots: false,
			loop: true,
			autoplay: true,
			margin: 30
		}
	}
})

jQuery('.menu-link').click(function(e) {
	e.preventDefault();  // Prevent default anchor behavior

	var targetId = $(this).attr('href');  // Get the target section's ID from the href attribute

	// Set the window location to the target section and reload the page
	window.location.href = targetId; // Navigate to the section
	location.reload();  // Refresh the page
});

// portfolio filter
jQuery(window).load(function(){'use strict';
	var $portfolio_selectors = $('.portfolio-filter >li>a');
	var $portfolio = $('.portfolio-items');
	$portfolio.isotope({
		itemSelector : '.portfolio-item',
		layoutMode : 'fitRows'
	});
	if($('.portfolio-filter li a.active').length){
		var selector = $('.portfolio-filter li a.active').attr('data-filter');
		$portfolio.isotope({ filter: selector });
	}
	$portfolio_selectors.on('click', function(){
		$portfolio_selectors.removeClass('active');
		$(this).addClass('active');
		var selector = $(this).attr('data-filter');
		$portfolio.isotope({ filter: selector });
		return false;
	});
});

const buttons = document.querySelectorAll('.home-wedo-btn')
const stage   = document.querySelector('#background-panel')

buttons.forEach(button => {
  button.onmouseover = function() {
    document.querySelector(button.dataset.show).style.opacity = 1
  }
  button.onmouseout = function() {
    document.querySelector(button.dataset.show).style.opacity = 0
  }
})

function addRowCount(tableAttr) {
	jQuery(tableAttr).each(function(){
	  jQuery('th:first-child, thead td:first-child', this).each(function(){
		var tag = jQuery(this).prop('tagName');
		jQuery(this).before('<'+tag+'>Sl.No.</'+tag+'>');
	  });
	  jQuery('td:first-child', this).each(function(i){
		jQuery(this).before('<td data-th="Sl.No.">'+(i+1)+'</td>');
	  });
	});
  }
  // Call the function with table attr on which you want automatic serial number
  addRowCount('.js-serial');

  jQuery("select").change(function(){
	jQuery(this).find("option:selected").each(function(){
		var optionValue = jQuery(this).attr("value");
		if(optionValue){
			jQuery(".box").not("." + optionValue).hide();
			jQuery("." + optionValue).show();
		} else{
			jQuery(".box").hide();
		}
	});
}).change();


jQuery(function(jQuery) {
	var path = window.location.href; 
	// because the 'href' property of the DOM element is the absolute path
	jQuery('.act').each(function() {
	  if (this.href === path) {
		jQuery(this).addClass('active');
	  }
	});
  });

  

  document.getElementById("openCustomPopup").addEventListener("click", function(event) {
    event.preventDefault();
    document.getElementById("customPopupModal").style.display = "flex";
});

document.querySelector(".custom-close-btn").addEventListener("click", function() {
    document.getElementById("customPopupModal").style.display = "none";
});

window.onclick = function(event) {
    let modal = document.getElementById("customPopupModal");
    if (event.target === modal) {
        modal.style.display = "none";
    }
};
