<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#slideShim').cycle({ 
			fx:     'fade',
			speed:  2000,
			timeout: 4000,
			prev:   '#back',
			next:   '#forward',
			pause:  1,
			pager:  '#pager'
		});
});
</script>

<style>
#slideShim a{  
	text-decoration: none;
	font-family: mix;
}
</style>
	<!-- Beginning of the slider markup -->
	<div id="metaContainer">	

		<div class="backLink"><a href="#" title="Back" id="back">Back</a></div>
		
		<div id="slideContainer">
			<div id="slideShim">
				<a href="#">
					<div style="height:360px;width:800px;">
						<span style="position:absolute;top:0px;left:0px;font-size:33px;color:#333;">17th, 18th March</span>
						<img src="slides/1.png" height=100% width=100% alt="Slide One" />
						<img src="images/marquee/1.gif" style="float:right;margin-top:-50px;" height=60 width=100>
					</div>
				</a>
				<a href="#">
					<div style="height:360px;width:800px;background:rgba(0,0,0,0.7);border-radius:10px;">
						<div style="height:340px;width:750px;overflow-y:auto;text-align:justify;padding:10px;">
							<h2 style="color:rgb(200,50,50);"><b>Theme - Clashh '14</b></h2>
							<span style="color:rgb(250, 50, 50);">	<b>TACKLING URBAN ISSUES</b></span>
								<br><br>
								<span style="color:#ddd; font-family:'Times New Roman';font-weight:normal;">
								Urban design and urban planning have economic, environmental, cultural and social dimensions. Quality urban planning and design can have significant positive effects on both of these by creating well connected, inclusive and accessible places. Starting from problems relating to housing, waste disposal, public transport,
								community spaces, security, pollution, there are various problems that need our utmost attention. 
								<br>
								Urban management issues are increasingly becoming important for sustaining economic activities in the country and widely affect the quality of life of urban citizens. Given the pace of its growth, the metropolitan cities in India are facing challenges of rapid urbanisation like many other cities around the world. The desire to create zero-carbon sustainable cities may be a distant goal.
								<br>
								Clashh'14 serves as a platform for young minds to put their ideas together in addressing this basic yet an important issue and provide feasible solutions for the same. 
								Focusing on the lines of craft, tradition, technology and place, this association will bring together the talented group of architects for two days of design, discussion and debate.
								<br>
							</span>
						</div>
					</div>
				</a>
				<a href="#">
					<div style="height:360px;width:800px;background:rgba(0,0,0,0.7);border-radius:10px;">
						<div style="height:350px;width:780px;background:url(images/fd.jpg);">
							<h2 style="text-align:left;color:rgb(200,50,50);"><b>Speakers</b></h2>
							<br><br><br>
							<h3>To be updated soon !</h3>
						</div>	
					</div>
				</a>
			</div>
		</div>
		
		<div class="forwardLink"><a href="#" title="Forward" id="forward">Forward</a></div>
	</div>
	<!-- End of the slider markup -->
