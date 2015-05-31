$(function(){
var slideWidth=130;
var sliderTimer;
$('#order-slider .slidewrapper').width($('#order-slider .slidewrapper').children().size()*slideWidth);
    sliderTimer=setInterval(nextSlide,2000000);
    $('#order-slider .viewport').hover(function(){
        clearInterval(sliderTimer);
    },function(){
        sliderTimer=setInterval(prevSlide,2000000);
    });
    $('#order-slider .next_slide2').click(function(){
        clearInterval(sliderTimer);
        nextSlide();
        sliderTimer=setInterval(nextSlide,2000000);
    });
    $('#order-slider .prev_slide2').click(function(){
        clearInterval(sliderTimer);
        prevSlide();
        sliderTimer=setInterval(nextSlide,2000000);
    });
	
	function nextSlide(){

    var currentSlide=parseInt($('#order-slider .slidewrapper').data('current'));
     console.log(currentSlide);
    currentSlide++;
    if(currentSlide+5>=$('#order-slider .slidewrapper').children().size())
    {
        $('#order-slider .slidewrapper').css('left',-(currentSlide-2)*slideWidth);  
        $('#order-slider .slidewrapper').append($('#order-slider .slidewrapper').children().first().clone()); 
        $('#order-slider .slidewrapper').children().first().remove();
        currentSlide--;                        
    }
        $('#order-slider .slidewrapper').animate({left: -currentSlide*slideWidth},300).data('current',currentSlide);
    
    
	}

	function prevSlide(){
		var currentSlide=parseInt($('#order-slider .slidewrapper').data('current'));
		currentSlide--;
		if(currentSlide<0)
		{
			$('#order-slider .slidewrapper').css('left',-(currentSlide+2)*slideWidth);  
			$('#order-slider .slidewrapper').prepend($('#order-slider .slidewrapper').children().last().clone()); 
			$('#order-slider .slidewrapper').children().last().remove();
			currentSlide++;   
		}
		$('#order-slider .slidewrapper').animate({left: -currentSlide*slideWidth},300).data('current',currentSlide);
	}
});