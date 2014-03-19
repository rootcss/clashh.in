$(document).ready(function(){

	$(window).bind('scroll',function(){
		//$("#one-sign").hide();		
			parallaxScroll();
		});
	function parallaxScroll()
		{
			
			var scrolledY=$(window).scrollTop();
			$("#cooie1").css('top','+'+(scrolledY*0.9)+'px');
			$("#cook2").css('top','+'+(scrolledY*0.8)+'px');
			$("#cookie").css('top','+'+(scrolledY*0.7)+'px');
			//$("#hazy").css('top',+(scrolledY*0.4)+'px');
			//$("#").css('left',(scrolledY*0.3)+'px');
			//$("#cookie1").css('left',(scrolledY*0.6)+'px');
			//$("#email").css('left',(scrolledY*0.4)+'px');
			//$("#address").css('left',(scrolledY*0.2)+'px');
			//$("#addss").css('left',(scrolledY*0.2)+'px');
			//$("#slider-info").css('top',(scrolledY*0.5)+'px');
		}
})