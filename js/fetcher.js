$(document).ready(function(){

	//EVENTS SLIDE
	$("#event-one-content").hide();
	$("#event-two-content").hide();
	$("#event-three-content").hide();
	$("#event-four-content").hide();
	$("#event-five-content").hide();
	$("#event-six-content").hide();

	$("#event-one").click(function(){
		$("#default-opened-event").hide();
		$("#event-two-content").hide();
		$("#event-three-content").hide();
		$("#event-four-content").hide();
		$("#event-five-content").hide();
		$("#event-six-content").hide();
		$("#event-one-content").fadeIn();				
	});

	$("#event-two").click(function(){
		$("#default-opened-event").hide();
		$("#event-one-content").hide();
		$("#event-four-content").hide();
		$("#event-five-content").hide();
		$("#event-six-content").hide();		
		$("#event-three-content").hide();
		$("#event-two-content").fadeIn();			
	});

	$("#event-three").click(function(){
		$("#default-opened-event").hide();		
		$("#event-one-content").hide();
		$("#event-two-content").hide();
		$("#event-five-content").hide();
		$("#event-six-content").hide();
		$("#event-four-content").hide();
		$("#event-three-content").fadeIn();			
	});

	$("#event-four").click(function(){
		$("#default-opened-event").hide();		
		$("#event-one-content").hide();
		$("#event-two-content").hide();
		$("#event-five-content").hide();
		$("#event-six-content").hide();
		$("#event-three-content").hide();		
		$("#event-four-content").fadeIn();			
	});

	$("#event-five").click(function(){
		$("#default-opened-event").hide();		
		$("#event-one-content").hide();
		$("#event-two-content").hide();
		$("#event-five-content").hide();
		$("#event-four-content").hide();
		$("#event-three-content").hide();		
		$("#event-five-content").fadeIn();			
	});

	$("#event-six").click(function(){
		$("#default-opened-event").hide();		
		$("#event-one-content").hide();
		$("#event-two-content").hide();
		$("#event-five-content").hide();
		$("#event-four-content").hide();
		$("#event-three-content").hide();		
		$("#event-six-content").fadeIn();			
	});



	//WORKSHOP SLIDE
	$("#workshop-one-content").hide();
	$("#workshop-two-content").hide();
	$("#workshop-three-content").hide();
	$("#workshop-four-content").hide();
	$("#workshop-five-content").hide();

	$("#workshop-one").click(function(){
		$("#default-opened-workshop").hide();		
		$("#workshop-two-content").hide();
		$("#workshop-three-content").hide();
		$("#workshop-four-content").hide();
		$("#workshop-five-content").hide();
		$("#workshop-one-content").fadeIn();			
	});

	$("#workshop-two").click(function(){
		$("#default-opened-workshop").hide();		
		$("#workshop-one-content").hide();
		$("#workshop-four-content").hide();
		$("#workshop-five-content").hide();
		$("#workshop-three-content").hide();
		$("#workshop-two-content").fadeIn();			
	});

	$("#workshop-three").click(function(){
		$("#default-opened-workshop").hide();		
		$("#workshop-one-content").hide();
		$("#workshop-two-content").hide();
		$("#workshop-five-content").hide();
		$("#workshop-four-content").hide();
		$("#workshop-three-content").fadeIn();			
	});

	$("#workshop-four").click(function(){
		$("#default-opened-workshop").hide();		
		$("#workshop-one-content").hide();
		$("#workshop-two-content").hide();
		$("#workshop-five-content").hide();
		$("#workshop-three-content").hide();		
		$("#workshop-four-content").fadeIn();			
	});

	$("#workshop-five").click(function(){
		$("#default-opened-workshop").hide();		
		$("#workshop-one-content").hide();
		$("#workshop-two-content").hide();
		$("#workshop-four-content").hide();
		$("#workshop-three-content").hide();		
		$("#workshop-five-content").fadeIn();			
	});	


	$("#about-soa-content").hide();
	$("#about-soa-link").click(function(){
		$("#about-soa-content").slideToggle();
	});
	$("#soa-close").click(function(){
		$("#about-soa-content").slideToggle();
	});
	$("#about-soa-content").mouseleave(function(){
		$("#about-soa-content").slideUp(1300);
	});


	$("#downloads-content").hide();
	$("#downloads-btn").click(function(){
		$("#downloads-content").slideToggle();
	});
	$("#downloads-btn").mouseleave(function(){
		$("#downloads-content").slideUp(1600);
	});


});