$(document).ready(function(){
	$('.slider-nav').css("left", (($(window).width() - $('.slider-nav').outerWidth()) / 2) + $(window).scrollLeft()-435 + "px");
	window.onresize = function(){
		$('.slider-nav').css("left", (($(window).width() - $('.slider-nav').outerWidth()) / 2) + $(window).scrollLeft()-435 + "px");
	}
	changeImg();
	
	$('#slider-prev').click(function(){
		prev();
	});
	
	$('#slider-next').click(function(){
		next();
	});
	
	/*******helps functions*********/
	function changeImg(current){
		var imgsrc = $('#slider .slider-items.current').data('img');
		
		$('#slider .slider-items.current').css('display','none');
		$('#slider .slider-bg').css('background','url(images/slider-bg-shadow.png) no-repeat scroll center -9px,url('+imgsrc+') no-repeat scroll center top');
	}
	
	function prev(){
		var current = $('#slider .slider-items.current');
		if(current.prev('.slider-items').length>0){
			$('#slider .slider-items.current').removeClass('current');
			current.prev().addClass('current');
		}else{
			$('#slider .slider-items.current').removeClass('current');
			current.next().addClass('current');
		}
		changeImg();
		$('.slider-bg').css('display','none');
		$('.slider-bg').fadeIn();
		current.fadeIn();
	}
	function next(){
		var current = $('#slider .slider-items.current');
		if(current.next('.slider-items').length>0){
			$('#slider .slider-items.current').removeClass('current');
			current.next().addClass('current');
		}else{
			$('#slider .slider-items.current').removeClass('current');
			current.prev().addClass('current');
		}
		changeImg();
		$('.slider-bg').css('display','none');
		$('.slider-bg').fadeIn();
		current.fadeIn();
	}
});
