$(window).load(function() {
	

});


$(document).ready(function() {
	$('#main-wrap, #footer, #banner').fadeIn('slow');
	$('#portfolio-cont .bxslider img').each(function() {
		$(this).wrapAll('<li></li>');
	});
	 $('#press-cont .bxslider').bxSlider({
		minSlides: 1,
	    maxSlides: 4,
	    moveSlides: 1,
	    slideMargin: 25
	});
	//  $('#portfolio-cont .bxslider').bxSlider({
	// 	// minSlides: 1,
	// 	// 	    maxSlides: 4,
	//     moveSlides: 1,
	//     slideMargin: 2
	// });
	
	// $('#carousel').carouFredSel({
	// 	circular: true,         // Determines whether the carousel should be circular.
	// 	    infinite: true,         // Determines whether the carousel should be infinite. Note: It is possible to create a non-circular, infinite carousel, but it is not possible to create a circular, non-infinite carousel.
	// 	    responsive: true,      // Determines whether the carousel should be responsive. If true, the items will be resized to fill the carousel.
	// 	    direction: "left",      // The direction to scroll the carousel. Possible values: "right", "left", "up" or "down".
	// 	    width: null,            // The width of the carousel. Can be null (width will be calculated), a number, "variable" (automatically resize the carousel when scrolling items with variable widths), "auto" (measure the widest item) or a percentage like "100%" (only applies on horizontal carousels)
	// 	    height: null,           // The height of the carousel. Can be null (width will be calculated), a number, "variable" (automatically resize the carousel when scrolling items with variable heights), "auto" (measure the tallest item) or a percentage like "100%" (only applies on vertical carousels)
	// 	    align: "center",        // Whether and how to align the items inside a fixed width/height. Possible values: "center", "left", "right" or false.
	// 	    padding: null,          // Padding around the carousel (top, right, bottom and left). For example: [10, 20, 30, 40] (top, right, bottom, left) or [0, 50] (top/bottom, left/right).
	// 	    synchronise: null,      // Selector and options for the carousel to synchronise: [string selector, boolean inheritOptions, boolean sameDirection, number deviation] For example: ["#foo2", true, true, 0]
	// 	    cookie: false,          // Determines whether the carousel should start at its last viewed position. The cookie is stored until the browser is closed. Can be a string to set a specific name for the cookie to prevent multiple carousels from using the same cookie.
	// 	    onCreate: null          // Function that will be called after the carousel has been created. Receives a map of all data.
	//         // items               :4,
	//         // 	        direction           : "left",
	//         // 			prev				: "button",
	//         // 	        scroll : {
	//         // 	            items           : 1,
	//         // 	            //easing          : "elastic",
	//         // 	            duration        : 1000,                         
	//         // 	            pauseOnHover    : true
	//         // 	        }                   
	//     });

});

$(window).resize(function() {
	

});


function setInputFieldFunctions(){
	$('input, textarea').each(function(){
	    var $this = $(this);
	    $this.data('placeholder', $this.attr('placeholder'))
	         .focus(function(){$this.removeAttr('placeholder');})
	         .blur(function(){$this.attr('placeholder', $this.data('placeholder'));});
	});
}

function centerItem(item,iWidth,iHeight){  
   windowWidth = $(window).width();
   windowHeight = $(window).height();
   var w = windowWidth - iWidth; 
   var h = windowHeight - iHeight;
   $(item).css({
       'left': w/2,
       'top':h/2
   });   
}


function splashH() {
	var contH = $('#main-cont img').height();
	$('#main-cont .gray').css({'height':contH});
}
