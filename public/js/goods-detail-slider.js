$(function(){
var slideWidth=195;
var sliderTimer;
$('#recommend-slider .slider-wrapper').width($('#recommend-slider .slider-wrapper').children().size()*slideWidth);
    sliderTimer=setInterval(nextSlide,2000000);
    $('#recommend-slider .viewport').hover(function(){
        clearInterval(sliderTimer);
    },function(){
        sliderTimer=setInterval(prevSlide,2000000);
    });
    $('#recommend-slider .next_slide').click(function(){
        clearInterval(sliderTimer);
        nextSlide();
        sliderTimer=setInterval(nextSlide,2000000);
    });
    $('#recommend-slider .prev_slide').click(function(){
        clearInterval(sliderTimer);
        prevSlide();
        sliderTimer=setInterval(nextSlide,2000000);
    });
	
	function nextSlide(){

    var currentSlide=parseInt($('#recommend-slider .slider-wrapper').data('current'));
     console.log(currentSlide);
    currentSlide++;
    if(currentSlide+5>=$('#recommend-slider .slider-wrapper').children().size())
    {
        $('#recommend-slider .slider-wrapper').css('left',-(currentSlide-2)*slideWidth);  
        $('#recommend-slider .slider-wrapper').append($('#recommend-slider .slider-wrapper').children().first().clone()); 
        $('#recommend-slider .slider-wrapper').children().first().remove();
        currentSlide--;                        
    }
        $('#recommend-slider .slider-wrapper').animate({left: -currentSlide*slideWidth},300).data('current',currentSlide);
    
    
	}

	function prevSlide(){
		var currentSlide=parseInt($('#recommend-slider .slider-wrapper').data('current'));
		currentSlide--;
		if(currentSlide<0)
		{
			$('#recommend-slider .slider-wrapper').css('left',-(currentSlide+2)*slideWidth);  
			$('#recommend-slider .slider-wrapper').prepend($('#recommend-slider .slider-wrapper').children().last().clone()); 
			$('#recommend-slider .slider-wrapper').children().last().remove();
			currentSlide++;   
		}
		$('#recommend-slider .slider-wrapper').animate({left: -currentSlide*slideWidth},300).data('current',currentSlide);
	}
});