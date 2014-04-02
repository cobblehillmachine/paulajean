$(window).load(function() {
	

});


$(document).ready(function() {
	$('#main-wrap, #footer, #banner').fadeIn('slow');

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
