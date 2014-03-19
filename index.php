<html>
<head>
	<title>Clashh '14</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link rel="stylesheet" type="text/css" href="css/tab.css">
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="./js/fetcher.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/scroll.js"></script>
    <script type="text/javascript" src="js/parallaxScroll.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" charset="utf-8">
  		$(window).load(function() {
  		$('.flexslider').flexslider({
  		  animation: "slide"
  			});
		})
	</script>
</head>
<body>
<div id="wrapper">
	<div id="one" class="tabs" data-stellar-background-ratio="0.2">
		<?php include("php/one.php"); ?>
	</div>
	<div id="three" class="tabs" data-stellar-background-ratio="0.4">
		<?php include("php/three.php"); ?>
	</div>
	<div id="two" class="tabs" data-stellar-background-ratio="0.2">
		<?php include("php/two.php"); ?>
	</div>
	<div id="four" class="tabs"  data-stellar-background-ratio="0.3">>
		<?php include("php/four.php"); ?>
	</div>
	<div id="five" class="tabs">
		<?php include("php/five.php"); ?>
	</div>
	<script type="text/javascript" src="./js/stellar.js"></script>
	<script type="text/javascript">

		$(function(){
            $.stellar({
                horizontalScrolling: false,
                verticalOffset: 0
            });
        });
	</script>
</div>

<div id="fixed-footer">
	<marquee>
	<span style="float:left;font-family:mix;font-size:20px;line-height:1.9em;">Sponsors &amp; Partners : &nbsp; </span>
	<span class="spons-ele"><img src="images/marquee/1.gif" height=50 width=100></span>&nbsp; &nbsp; &nbsp; 
	<span class="spons-ele"><img src="images/marquee/2.jpg" height=50 width=80></span>&nbsp; &nbsp; &nbsp; 
	<span class="spons-ele"><img src="images/marquee/3.png" height=50 width=80></span>&nbsp; &nbsp; &nbsp; 
	<!--<span class="spons-ele"><img src="images/bk4.jpg" height=40 width=140></span>&nbsp; &nbsp; &nbsp; 
	<span class="spons-ele"><img src="images/bk5.jpg" height=40 width=140></span>&nbsp; &nbsp; &nbsp; -->
	</marquee>
</div>

<div id="navbar" style="z-index:100000;">
	<!--<a href="#one"><div align="left" style="width:40%;display:inline-block;height:100%;text-align:center;">
			<img src="images/cook.jpg" width="60%" height="100%"></div></a>-->
	<a href="#five"><div class="nav-item"align="right">Contact</div></a>
	<a href="#four"><div class="nav-item"align="right">Register</div></a>
	<a href="#three"><div class="nav-item"align="right">Workshops</div></a>
	<a href="#two"><div class="nav-item" align="right">Events</div></a>
	<a href="#one"><div class="nav-item" align="right">Home</div></a>	
</div>


<div id="about-soa-link" style="position:fixed;top:25%;right:0;height:250px;width:5px;background:#505050;font-size:20px;font-weight:bold;padding:5px 15px 5px 7px;border-radius:5px 0px 0px 5px;z-index:10000;cursor:pointer;color:#fafafa;">
	A<br>
	B<br>
	O<br>
	U<br>
	T<br>
		<br>
	S<br>
	O<br>
	A<br>
</div>

<div id="about-soa-content" style="right:0px;top:10%;position:fixed;width:600px;height:530px;background:rgba(0,0,0,0.9);padding:10px;padding-right:35px;border-radius:10px 0px 0px 10px;box-shadow:0px 0px 25px #ccc;z-index:1234567;">
	<div style="height:100%;width:100%;">
		<div style="overflow-y:auto;text-align:justify;padding:5px;color:#bbb;font-family:Calibri;font-size:17px;">
			<h2>SRM Ramapuram SOA</h2>
			<span style="">
				SRM Ramapuram School of Architecture, Ramapuram Campus is a premier institution offering an undergraduate programme in Architecture. We aspire to increase the students' sensitivity to the emotional, spiritual and aesthetic dimensions which would mould them into a successful professional. 
				<br><br>
				SRM Ramapuram School of Architecture has evolved as a premier educational society within a short span of time. It has been striving hard to achieve great heights by taking steps of hardwork, dedication and quality education. Our institution has left no stone unturned while participating or conducting events, workshops, seminars, etc.
				<br><br>
				SRM Architecture Students Association (SASA) is an intiative by the SRM Ramapuram School of Architecture, with regard to the increasing social activity in the architecture circles at the academic level. 
				<br><br>
				The association was formed with an interest of fostering a better sense of learning and interaction amongst its thriving student community and to work creatively with its members gaining practical knowledge and to showcase their talents from time to time. Thus, the association serves as a platform for growth, development and to dwell with the practical insight of today's competitive world.The association envisions to host seminars, conferences, design competitons, exhibitions, campus drives, etc. in the coming years.
			</span>
		</div>
		<div id="soa-close" style="position:absolute;right:0;top:0;font-size:30px;font-weight:bold;background:#aaa;padding:5px;border-radius:0px 0px 0px 35px;padding-left:10px;cursor:pointer;">
			X
		</div>
		<div id="" style="position:absolute;right:70;top:-45;height:100px;width:100px;">
			<img alt="image" src="./images/sasa.png" height=150% width=150% style="position:absolute;float:right;margin-right:100px;">
		</div>
	</div>

</div>


<div id="downloads-btn" style="width:120px;height:30px;position:fixed;bottom:60px;left:10px;background:rgba(0,0,0,0.9);padding:5px;font-size:25px;color:rgb(200,50,50);padding-left:7px;border-radius:5px 5px 5px 5px;cursor:pointer;padding-right:12px;">
	Downloads
</div>

<div id="downloads-content" style="width:200px;height:240px;position:fixed;bottom:100px;left:0px;background:rgba(0,0,0,0.8);padding:5px;font-size:25px;color:rgb(200,50,50);padding-left:15px;border-radius:5px 5px 5px 5px;">
	<ol style="list-style-type:none;font-size:18px;font-family:mix;text-decoration:none;">
		<li><a style="text-decoration:none;" href="./downloads/5.PHOTOGRAPHY A5.pdf">Photography</a></li>
		<li><a style="text-decoration:none;" href="./downloads/6.SHORT FILM A5.pdf">Short Film</a></li>
		<li><a style="text-decoration:none;" href="./downloads/7.WORKSHOPS A5.pdf">Workshops</a></li>
		<li><a style="text-decoration:none;" href="./downloads/8.DANCE.pdf">Dance</a></li>
		<li><a style="text-decoration:none;" href="./downloads/Design Brief.pdf">Design Brief</a></li>
		<li><a style="text-decoration:none;" href="./downloads/Invitation.pdf">Invitation</a></li>
		<li><a style="text-decoration:none;" href="./downloads/POSTER A3.pdf">Poster</a></li>
		<li><a style="text-decoration:none;" href="./downloads/Reg Form.pdf">Reg Form</a></li>
	</ol>
</div>
</body>
</html>