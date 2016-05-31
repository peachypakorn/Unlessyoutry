<!DOCTYPE html>
<html>
<head>
	<?php include 'header.php';?>
	<link href="header.php">
	<link rel="stylesheet" type="text/css" href="./css/Leftbanner2.css">
	<script src="./vender/typed/js/typed.js"></script>
	<script src="./js/menu.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="./css/home.css"> -->
	<link rel="stylesheet" type="text/css" href="./css/activities.css">
	<link rel="stylesheet" type="text/css" href="./css/picture.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<script >
	
		$("p").hide();
		$(document).ready(function(){
    		$("img#menu").click(function(){
    			if($("p#home").css("margin-left")=="-50px"){
    					$("p#home").animate({"margin-left": '+=167'});
    					$("p#act").animate({"margin-left": '+=342'});
    					$("p#idea").animate({"margin-left": '+=507'});
    	    			}
    			else{
    					$("p#home").animate({"margin-left": '-50'});
    					$("p#act").animate({"margin-left": '-100'});
    					$("p#idea").animate({"margin-left": '-100'});
    	
    				}
    									});
    		$("p#home").hover(function(){
       			$("p#home").css("color","#FFAA21");
       			$("p#act").css("color","white");
       			$("p#idea").css("color","white");
       		}, function(){
       			$("p#home").css("color","white");
       			$("p#act").css("color","#FFAA21");
       			$("p#idea").css("color","white");
    								});
    		$("p#act").hover(function(){
       			$("p#home").css("color","white");
       			$("p#act").css("color","#FFAA21");
       			$("p#idea").css("color","white");
       		}, function(){
       			$("p#home").css("color","white");
       			$("p#act").css("color","#FFAA21");
       			$("p#idea").css("color","white");
    								});

	   		$("p#idea").hover(function(){
    	   		$("p#home").css("color","white");
       			$("p#act").css("color","white");
       			$("p#idea").css("color","#FFAA21");
	       }, function(){
    	   		$("p#home").css("color","#white");
       			$("p#act").css("color","#FFAA21");
       			$("p#idea").css("color","white");
    								});

    	//pic JS Part
   	 		$(".pic").hover(function(){
    			$(this).find(".text").animate({
        			left: '57%',
        			opacity: '0.5',
        			height: '43%',
        			width: '43%'
    			});
        		$(this).find("p.text2").animate({
        			opacity: '1'
         		});
        		$(this).find("p.text3").animate({
        			opacity: '1'
        		},1000);
       		}, function(){
        		$(this).find("p.text2").animate({
        			opacity: '0'
        		},10);
        		$(this).find("p.text3").animate({
        			opacity: '0'
        		},10);
				$(this).find(".text").animate({
			        left: '100%',
			        opacity: '0',
			        height: '43%',
			        width: '43%'
    			});

    		});
		});
	</script>
</head>

<body>
	<div class = "left-banner">
		<div class = "wrap">
			<video autoplay loop poster muted="./img/video/LandingVid.png" id="bgvid" class = "banner2" >
		    	  	<source src="./img/video/actVideo.mp4" type= "video/mp4">
			</video>
			<div class = "clear-bg"></div>
			<img id= "menu"class="yellow pointer" src="./img/icon/Menu.png" alt="menu">
			<img id = "profile" class="yellow" src="./img/icon/Profile.png" alt="prfile">
			<a href="story.php">
				<p  id = "home">HOME</p>
			</a>
			<p  class = "pointer"id = "act">ACTIVITIES</p>
			<a href="idea.php">
				<p  id = "idea">IDEAS</p>
			</a>
			<script>
       			$("p#home").css("color","white");
       			$("p#act").css("color","#FFAA21");
			</script>
			<img id="logo2" src="./img/header/Activities.png" alt="logoW">
			<p id = "sen1-act">JANUARY - APRILL 2016</p>
			<p id = "sen2-act">SO MANY THINGS ARE WAITING FOR YOU TO TRY<br>WE ARE UPDATING THE ACTIVITIES FROM SEVERAL<br>ORGANIZATIONS EVERY QUARTER</p>
			<div class = "a pointer">
				<img id="add-icon" src="./img/icon/Add.png" alt="video">
				<p id = "add">ADD ACTIVITIES</p>
				<p id = "sen3-act">SO MANY THINGS ARE WAITING FOR YOU TO TRY<br>WE ARE UPDATING THE ACTIVITIES FROM SEVERAL</p>
			</div>
			</div>
			<img id="fb" class="yellow" src="./img/icon/Fb.png" alt="video">
			<a href="https://www.instagram.com/unlessyoutry.campaign/" target="_blank">
				<img id="ig" class="yellow" src="./img/icon/Ig.png" alt="video">
			</a>
			<a href="https://twitter.com/UnlessYouTryCP/" target="_blank">
				<img id="tw" class="yellow" src="./img/icon/Tw.png" alt="video">
			</a>
			<script>
				$("div.in").hide();
			</script>
		</div>
	</div>

	<div class = "content">
		<a href="./stories/phum-story.php">
			<div class="grow pic bw" id = "pic1">
				<img  src="./img/actPic/Act1.jpg" alt="phumConcert">
				<div class = "text"></div>
					<p class = "text2" >BKK<br>COLOR<br>RUN</p>
					<p class = "text3" ><br><br><br>05.01.16</p>
			</div>
		</a>
		<a href="cindy-story.php">
			<div class="grow pic bw" id = "pic2">
				<img  src="./img/actPic/Act2.jpg" alt="Cindy">
				<div class = "text"></div>
					<p class = "text2" >HUAY<br>MHEE<br>CAMP</p>
					<p class = "text3" ><br><br><br>7-13.03.16</p>
			</div>
		<a>							
		<a href="bonus-story.php">
			<div class="grow pic bw" id = "pic3">
				<img  src="./img/actPic/Act3.jpg" alt="Bonus">
				<div class = "text"></div>
					<p class = "text2" >ICE<br>RIDE<br>2016</p>
					<p class = "text3" ><br><br><br>28.02.16</p>
				</div>
		</a>
		<a href="mitz-story.php">
			<div class="grow pic bw" id = "pic4">
				<img  src="./img/actPic/Act4.jpg" alt="midjungle">
				<div class = "text"></div>
					<p class = "text2" >BIG<br>BUBBLE<br>DIVING</p>
					<p class = "text3" ><br><br><br>17-21.01.16</p>
			</div>
		</a>
		<a href="touch-story.php">
			<div class="grow pic bw" id = "pic5">
				<img  src="./img/actPic/Act5.jpg" alt="touch">
				<div class = "text"></div>
					<p class = "text2" > <br>MOKUJU<br>TREKKING</p>
					<p class = "text3" ><br><br><br>22-26.01.16</p>
			</div>						
		</a>
		<a href="sun-story.php">
			<div class="grow pic bw" id = "pic6">
				<img  src="./img/actPic/Act6.jpg" alt="sunActing">
				<div class = "text"></div>
					<p class = "text2" >TEACH<br>FOR<br>THAI</p>
					<p class = "text3" ><br><br><br>2015-2016</p>
			</div>
		</a>
		<a href="pep-story.php">
			<div class="grow pic bw" id = "pic7">
				<img  src="./img/actPic/Act7.jpg" alt="pep">
				<div class = "text"></div>
					<p class = "text2" >IMAGINE<br>FOR A<br>CHANGE</p>
					<p class = "text3" ><br><br><br>5-7.04.16</p>
			</div>
		</a>
		<a href="gino-story.php">	
			<div class="grow pic bw" id = "pic8">
				<img  src="./img/actPic/Act8.jpg" alt="gino Russia">
				<div class = "text"></div>
					<p class = "text2" >LITTLE<br>THREE<br>FRIENDS</p>
					<p class = "text3" ><br><br><br>17.03.16</p>
			</div>						
		</a>
		<a href="dew-story.php">
			<div class="grow pic bw" id = "pic9">
				<img  src="./img/actPic/Act9.jpg" alt="dewdewdew">
				<div class = "text"></div>
					<p class = "text2" >BKK<br>DESIGN<br>TRAINING</p>
					<p class = "text3" ><br><br><br>1.02.16</p>
			</div>
		</a>
		<a href="oak-story.php">
			<div class="grow pic bw" id = "pic10">
				<img  src="./img/actPic/Act10.jpg" alt="camping">
				<div class = "text"></div>
					<p class = "text2" >PLANT<br>MAN<br>GROVE</p>
					<p class = "text3" ><br><br><br>14.04.16</p>
			</div>
		</a>
	
	</div>

<!-- Video Modal Part -->
	<div id="myModal" class="modal">
		<video autoplay loop poster controls="./img/video/LandingVid.png" id="viral-video" >
		  	<source src="./img/video/viral.mp4" type= "video/mp4">
		</video>
		<img class="yellow close-modal" src="./img/icon/Close.png" alt="close">
	</div>

	<script>
	//modal part
		var viralvid = document.getElementById("viral-video"); 
// Get the modal
		var modal = document.getElementById('myModal');
// Get the button that opens the modal
		var btn = document.getElementById("video");
// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close-modal")[0];
		viralvid.pause();
// When the user clicks on the button, open the modal 
		btn.onclick = function() {
		    modal.style.display = "block";
		    viralvid.play();
		    viralvid.currentTime = 0;
		}
// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
		    modal.style.display = "none";
		    viralvid.pause();
		    viralvid.currentTime = 0;
		}
// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";
		    }
		}
	</script>
</body>
</html>