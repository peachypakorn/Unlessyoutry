<!DOCTYPE html>
<html>
<head>
	<?php include 'header.php';?>
	<link href="header.php">
	<link rel="stylesheet" type="text/css" href="./css/Leftbanner2.css">
	<script src="./vender/typed/js/typed.js"></script>
	<!--  <script src="./js/menu.js"></script> -->
	<link rel="stylesheet" type="text/css" href="./css/categories.css">
	<link rel="stylesheet" type="text/css" href="./css/animations.css">
	<link rel="stylesheet" type="text/css" href="./css/home.css">
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

    								});
    		$("p#act").hover(function(){
       			$("p#home").css("color","white");
       			$("p#act").css("color","#FFAA21");
       			$("p#idea").css("color","white");
       		}, function(){
       			$("p#home").css("color","#FFAA21");
       			$("p#act").css("color","white");
       			$("p#idea").css("color","white");
    								});

	   		$("p#idea").hover(function(){
    	   		$("p#home").css("color","white");
       			$("p#act").css("color","white");
       			$("p#idea").css("color","#FFAA21");
	       }, function(){
    	   		$("p#home").css("color","#FFAA21");
       			$("p#act").css("color","white");
       			$("p#idea").css("color","white");
    								});

	   		$("p#cont").click(function(){
    			if($("div.in").is(":visible")){
    				$("p#cont").animate({"margin-top": '+=100'});
    				$("div.in").hide(100);
    											}
    			else{
    				$("p#cont").animate({"margin-top": '-=100'});
    				$("div.in").fadeIn(2500);
    				}
    		});
		   	// p1.addClass()
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
			<video autoplay loop poster muted="./img/video/LandingVid.png" id="bgvid" class = "banner" >
		    	  	<source src="./img/video/mainVideo20.mp4" type= "video/mp4">
			</video>
			<div class = "clear-bg"></div>
			<img id= "menu"class="yellow pointer" src="./img/icon/Menu.png" alt="menu">
			<img id = "profile" class="yellow" src="./img/icon/Profile.png" alt="prfile">
			<p  class = "pointer"id = "home">HOME</p>
			<a href="activities.php">
				<p  id = "act">ACTIVITIES</p>
			</a>
			<a href="idea.php">
				<p  id = "idea">IDEAS</p>
			</a>
			<img id="logo1" src="./img/header/logo.png" alt="logoW">
			<p id = "sen1">  YOU WILL NEVER UNDERSTAND WHAT IT'S LIKE,<br>WHAT IT'S FOR, HOW IT FEELS TO DO SOMETHING</p>
			<p id = "hashtag">#UNLESSYOUTRY</p>
			<div class = "h pointer">
				<img id="video" src="./img/icon/Video.png" alt="video">
				<p id = "watch">WATCH OUR VIDEO</p>
			</div>

			<p class = "pointer" id = "cont">CONTACT</p>
			<div class ="in">
				<img id="address" src="./img/icon/Adr.png" alt="video">
				<img id="phone" src="./img/icon/Phone.png" alt="video">
				<img id="mail" src="./img/icon/Mail.png" alt="video">
				<p id = "cont1">46 MOO 9 PANJASAP VILLAGE TAWEEWATTANA<br>
								KANJANAPISEK ROAD 10170 BANGKOK</p>
				<p id = "cont2">081-835-8398</p>
				<p id = "cont3">UNLESSYOUTRY@GMAIL.COM</p>
			</div>
			<a href ="https://www.facebook.com/unlessyoutry/" target="_blank">
				<img id="fb" class="yellow" src="./img/icon/Fb.png" alt="fb">
			</a>
			<a href="https://www.instagram.com/unlessyoutry.campaign/" target="_blank">
				<img id="ig" class="yellow" src="./img/icon/Ig.png" alt="ig">
			</a>
			<a href="https://twitter.com/UnlessYouTryCP/" target="_blank">
				<img id="tw" class="yellow" src="./img/icon/Tw.png" alt="tw">
			</a>
			<script>
				$("div.in").hide();
			</script>
			<p class = "rotate">CATEGORIES</p>
			<div id = "cat">

				<p class = "pointer" id = "cat1" onclick="showCat(1)">  EDUCATION  </p>
				<p class = "pointer" id = "cat2" onclick="showCat(2)">  SPORT  </p>
				<p class = "pointer" id = "cat3" onclick="showCat(3)">  ADVANTURE  </p>
				<p class = "pointer" id = "cat4" onclick="showCat(4)">  VOLUNTEER  </p>
				<p class = "pointer" id = "cat5" onclick="showCat(5)">  ART&MUSIC  </p>
				<p class = "pointer" id = "cat6" onclick="showCat(6)">  OTHER  </p>
			</div>
		</div>
	</div>

	<div class = "content">
		<a href="./stories/phum-story.php">
			<div class="grow pic bw expandUp" id = "pic1">
				<img  src="./img/homePic/Phum.jpg" alt="phumConcert">
				<div class = "text"></div>
					<p class = "text2" >     <br>PHUM<br>CONCERT</p>
					<p class = "text3" ><br><br><br>15.03.16</p>
			</div>
		</a>
		<a href="cindy-story.php">
			<div class="grow pic bw expandUp" id = "pic2">
				<img  src="./img/homePic/Cindy.jpg" alt="Cindy">
				<div class = "text"></div>
					<p class = "text2" >KOREA<br>ART<br>TRIP</p>
					<p class = "text3" ><br><br><br>4-11.04.16</p>
			</div>
		<a>							
		<a href="./stories/bonus-story.php">
			<div class="grow pic bw expandUp" id = "pic3">
				<img  src="./img/homePic/Bonus.jpg" alt="Bonus">
				<div class = "text"></div>
					<p class = "text2" >HIGHER<br>LEVEL<br>DANCE</p>
					<p class = "text3" ><br><br><br>18.02.16</p>
				</div>
		</a>
		<a href="mitz-story.php">
			<div class="grow pic bw expandUp" id = "pic4">
				<img  src="./img/homePic/Mitz.jpg" alt="midjungle">
				<div class = "text"></div>
					<p class = "text2" >WEIR<br>FOR<br>WILD</p>
					<p class = "text3" ><br><br><br>28.02.16</p>
			</div>
		</a>
		<a href="touch-story.php">
			<div class="grow pic bw expandUp" id = "pic5">
				<img  src="./img/homePic/Touch.jpg" alt="touch">
				<div class = "text"></div>
					<p class = "text2" >RURAL<br>TEACHER<br>#170</p>
					<p class = "text3" ><br><br><br>7-10.01.16</p>
			</div>						
		</a>
		<a href="sun-story.php">
			<div class="grow pic bw expandUp"  id = "pic6">
				<img  src="./img/homePic/Sun.jpg" alt="sunActing">
				<div class = "text"></div>
					<p class = "text2" >THE<br>OUTER<br>PROJECT</p>
					<p class = "text3" ><br><br><br>1-31.01.16</p>
			</div>
		</a>
		<a href="pep-story.php">
			<div class="grow pic bw expandUp" id = "pic7">
				<img  src="./img/homePic/PEP.jpg" alt="pep">
				<div class = "text"></div>
					<p class = "text2" >KOH<br>TAO<br>DIVING</p>
					<p class = "text3" ><br><br><br>17.05.16</p>
			</div>
		</a>
		<a href="gino-story.php">	
			<div class="grow pic bw expandUp" id = "pic8">
				<img  src="./img/homePic/gino.jpg" alt="gino Russia">
				<div class = "text"></div>
					<p class = "text2" >AFS<br>AT<br>RUSSIA</p>
					<p class = "text3" ><br><br><br>2014-2015</p>
			</div>						
		</a>
		<a href="dew-story.php">
			<div class="grow pic bw expandUp" id = "pic9">
				<img  src="./img/homePic/Dew.jpg" alt="dewdewdew">
				<div class = "text"></div>
					<p class = "text2" >PHU<br>SOIDAOW<br>HIKING</p>
					<p class = "text3" ><br><br><br>24-28.12.15</p>
			</div>
		</a>
		<a href="oak-story.php">
			<div class="grow pic bw expandUp" id = "pic10">
				<img  src="./img/homePic/Oak.jpg" alt="camping">
				<div class = "text"></div>
					<p class = "text2" >AFS<br>MEDIA<br>MAN</p>
					<p class = "text3" ><br><br><br>21-24.04.15</p>
			</div>
		</a>
		<a href="nat-story.php">
			<div class="grow pic bw expandUp" id = "pic11">
				<img  src="./img/homePic/Nat.jpg" alt="TFT">
				<div class = "text"></div>
					<p class = "text2" >TEACH<br>FOR<br>THAI</p>
					<p class = "text3" ><br><br><br>21-24.04.15</p>
			</div>
		</a>	

		<script>
		var pics = document.getElementsByClassName("pic");
		 for (i = 0; i < pics.length; i++) {
		 	// pics[i].find(".expandUp").style.animationDuration = 1.2 + (i * 0.2)+"s";
          }
		</script>
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

	   	//categories bar
		   	var p1 = document.getElementById("pic1");
		   	var p2 = document.getElementById("pic2");
		   	var p3 = document.getElementById("pic3");
		   	var p4 = document.getElementById("pic4");
		   	var p5 = document.getElementById("pic5");
		   	var p6 = document.getElementById("pic6");
		   	var p7 = document.getElementById("pic7");
		   	var p8 = document.getElementById("pic8");
		   	var p9 = document.getElementById("pic9");
		   	var p10 = document.getElementById("pic10");
		   	var p11 = document.getElementById("pic11");
		   	var pics = document.getElementsByClassName("pic");
		   	var currentCat = 0;

		   	function show(n){
		   		var pics = document.getElementsByClassName("pic");
		   		pics[i].style.display = "block"; 
		   				   	}

		   	function showCat(n) {
		   		var pics = document.getElementsByClassName("pic");
		   		debugger;
		   		if(currentCat==n){
		   			for (i = 0; i < pics.length; i++) {
              		// pics[i].style.display = "block"; 
              		setInterval(show(i),1000);
              		pics[i].style.WebkitAnimation = "expandUp 0.7s 1";
					pics[i].style.animation = "expandUp 0.7s 1";
          		}
          		currentCat=0;
		   		}
		   		else{
				   		var picShow
				   		if(n==1)picShow = new Array(8, 11);
				   		else if(n==2) picShow = new Array(7,7);
				   		else if(n==3) picShow = new Array(9,9);
				   		else if(n==4) picShow = new Array(4,5);
				   		else if(n==5) picShow = new Array(1,2,3,6);
				   		else if(n==6) picShow = new Array(10,10);
				   			
				   		for (i = 0; i < pics.length; i++) {
		              		pics[i].style.display = "none"; 
		          		}
		          		// debugger;
				   		for (i = 0; i < picShow.length; i++) {
				   			
				   			pics[picShow[i]-1].style.display = "block";
				   			pics[picShow[i]-1].style.WebkitAnimation = "expandUp 0.7s 1";
							pics[picShow[i]-1].style.animation = "expandUp 0.7s 1";
				   		}
		   		currentCat = n;
		   		}
		   	}
	</script>
</body>
</html>