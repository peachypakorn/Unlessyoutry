<!DOCTYPE html>
<html>
<head>
	<?php include 'header.php';?>
	<link href="header.php">
	<link rel="stylesheet" type="text/css" href="./css/Leftbanner2.css">
	<script src="./vender/typed/js/typed.js"></script>
	<script src="./js/menu.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/categories.css">
	<link rel="stylesheet" type="text/css" href="./css/animations.css">
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
        		$(this).find(".cata").animate({
        			left: '0%',
        			opacity: '1'
        		});
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
    			$(this).find(".cata").animate({
        			left: '-3%',
        			opacity: '0'
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
			<a href = "./profiles/touch-profile.php">
				<img id = "profile" class="yellow" src="./img/icon/Profile.png" alt="prfile">
			</a>
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
			<p id = "sen1-act" class = "center">JANUARY - APRILL 2016</p>
			<p id = "sen2-act">SO MANY THINGS ARE WAITING FOR YOU TO TRY<br>WE ARE UPDATING THE ACTIVITIES FROM SEVERAL<br>ORGANIZATIONS EVERY QUARTER.</p>
			<div class = "a pointer">
				<img id="add-icon" src="./img/icon/Add.png" alt="video">
				<p id = "add">ADD ACTIVITIES</p>
				<p id = "sen3-act">PROMOTE YOUR ACTIVITY;<br> YOUR ACTIVITY WILL APPEAR ON THE PAGE AFTER WE APPROVED.</p>
			</div>
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

				<p class = "pointer" id = "cat1"  onclick="showCat(1)">  EDUCATION  </p>
				<p class = "pointer" id = "cat2"  onclick="showCat(2)">  SPORT  </p>
				<p class = "pointer" id = "cat3"  onclick="showCat(3)">  ADVENTURE  </p>
				<p class = "pointer" id = "cat4"  onclick="showCat(4)">  VOLUNTEER  </p>
				<p class = "pointer" id = "cat5"  onclick="showCat(5)">  ART&MUSIC  </p>
				<p class = "pointer" id = "cat6"  onclick="showCat(6)">  OTHER  </p>
			</div>
		</div>
	</div>

	<div class = "content">
		<a href="./activities/colorrun-act.php">
			<div class="grow pic bw slideUp" id = "pic1">
				<img  src="./img/actPic/Act1.jpg" alt="phumConcert">
				<div class = "text"></div>
				<div class = "cata" style = "background:#E45641" ></div>
					<p class = "text2" >BKK<br>COLOR<br>RUN</p>
					<p class = "text3" ><br><br><br>05.01.16</p>
			</div>
		</a>
		<a href="./activities/bigbubble-act.php ">
			<div class="grow pic bw slideUp" id = "pic4">
				<img  src="./img/actPic/Act4.jpg" alt="midjungle">
				<div class = "text"></div>
				<div class = "cata" style = "background:#F2AA4E" ></div>
					<p class = "text2" >BIG<br>BUBBLE<br>DIVING</p>
					<p class = "text3" ><br><br><br>17-21.01.16</p>
			</div>
		</a>	
		<a href="./activities/iceride-act.php">
			<div class="grow pic bw slideUp" id = "pic3">
				<img  src="./img/actPic/Act3.jpg" alt="Bonus">
				<div class = "text"></div>
				<div class = "cata" style = "background:#4EBC90" ></div>
					<p class = "text2" >ICE<br>RIDE<br>2016</p>
					<p class = "text3" ><br><br><br>28.02.16</p>
				</div>
		</a>
			<div class="grow pic bw slideUp pointer" id = "pic2">
				<img  src="./img/actPic/Act2.jpg" alt="Cindy">
				<div class = "text"></div>
				<div class = "cata" style = "background:#4EBC90" ></div>
					<p class = "text2" >HUAY<br>MHEE<br>CAMP</p>
					<p class = "text3" ><br><br><br>7-13.03.16</p>
			</div>
		
			<div class="grow pic bw slideUp pointer" id = "pic5">
				<img  src="./img/actPic/Act5.jpg" alt="touch">
				<div class = "text"></div>
				<div class = "cata" style = "background:#F2AA4E" ></div>
					<p class = "text2" > <br>MOKUJU<br>TREKKING</p>
					<p class = "text3" ><br><br><br>22-26.01.16</p>
			</div>						

			<div class="grow pic bw slideUp pointer" id = "pic6">
				<img  src="./img/actPic/Act6.jpg" alt="sunActing">
				<div class = "text"></div>
				<div class = "cata" style = "background:#ECE4C2" ></div>
					<p class = "text2" >TEACH<br>FOR<br>THAI</p>
					<p class = "text3" ><br><br><br>2015-2016</p>
			</div>

			<div class="grow pic bw slideUp pointer" id = "pic7">
				<img  src="./img/actPic/Act7.jpg" alt="pep">
				<div class = "text"></div>
				<div class = "cata" style = "background:#274763" ></div>
					<p class = "text2" >IMAGINE<br>FOR A<br>CHANGE</p>
					<p class = "text3" ><br><br><br>5-7.04.16</p>
			</div>

			<div class="grow pic bw slideUp pointer" id = "pic8">
				<img  src="./img/actPic/Act8.jpg" alt="gino Russia">
				<div class = "text"></div>
				<div class = "cata" style = "background:#1A9AAF" ></div>
					<p class = "text2" >LITTLE<br>THREE<br>FRIENDS</p>
					<p class = "text3" ><br><br><br>17.03.16</p>
			</div>						

			<div class="grow pic bw slideUp pointer" id = "pic9">
				<img  src="./img/actPic/Act9.jpg" alt="dewdewdew">
				<div class = "text"></div>
				<div class = "cata" style = "background:#1A9AAF" ></div>
					<p class = "text2" >BKK<br>DESIGN<br>TRAINING</p>
					<p class = "text3" ><br><br><br>1.02.16</p>
			</div>

			<div class="grow pic bw slideUp pointer" id = "pic10">
				<img  src="./img/actPic/Act10.jpg" alt="camping">
				<div class = "text"></div>
				<div class = "cata" style = "background:#4EBC90" ></div>
					<p class = "text2" >PLANT<br>MAN<br>GROVE</p>
					<p class = "text3" ><br><br><br>14.04.16</p>
			</div>

	</div>


	<script>
	//categories bar

		   	var pics = document.getElementsByClassName("pic");
		   	var currentCat = 0;
		   	var numpic = 0;
		   	var h;
		   	var cat =document.getElementById("cat1");;
		   			for (i = 0; i < pics.length; i++) {
		              		pics[i].style.display = "none"; 
		          		}
		   			for (i = 0; i < pics.length; i++) {
		   				doshow(i,i);
              		pics[i].style.WebkitAnimation = "slideUp 0.7s 1";
					pics[i].style.animation = "slideUp 0.7s 1";
          		}
          	function hoverup(n,elem){
          		// cat = document.getElementById("elem");
          		elem.style.paddingLeft = "12px";
				elem.style.paddingRight = "12px";
				elem.style.textIndent = "0%";
				elem.style.width = n+"%";

          	}
          	function normal(elem){
          		// cat = document.getElementById("elem");
          		elem.style.paddingLeft = "0px";
				elem.style.paddingRight = "0px";
				elem.style.textIndent = "1%";
				elem.style.width ="6px";
          	}
		   	function shows(n){
		   		// var pics = document.getElementsByClassName("pic");
		   		var pos = n;
		   		// alert(n + " " + pos);
		   		pics[pos].style.display = "block"; 

		   				   	}
		   	function doshow(n,m){
		   		setTimeout(function(){shows(numpic=n);},m*150);
              				   	}

		   	function showCat(n) {
		   		// var pics = document.getElementsByClassName("pic");
		   		// debugger;
		  //  		cat.style.paddingLeft = "0px";
				// cat.style.paddingRight = "0px";
				// cat.style.textIndent = "1%";
				// cat.style.width = "6px";
				normal(cat);
		   		if(currentCat==n){
		   			for (i = 0; i < pics.length; i++) {
		              		pics[i].style.display = "none"; 
		          		}
		   			for (i = 0; i < pics.length; i++) {
		   				// alert(i);
		   				doshow(i,i);
		   				// numpic = i;
              		// pics[i].style.display = "block"; 
              			// alert(numpic);
              		pics[i].style.WebkitAnimation = "slideUp 0.7s 1";
					pics[i].style.animation = "slideUp 0.7s 1";
          		}
          		currentCat=0;
		   		}
		   		else{
				   		var picShow
				   		
				   		if(n==1){
				   			picShow = new Array(6,6);
				   			cat = document.getElementById("cat1");
				   			cat.style.width = "18%";
				   		}
				   		else if(n==2) {
				   			picShow = new Array(1,1);
				   			cat = document.getElementById("cat2");
				   			cat.style.width = "12%";
				   		}
				   		else if(n==3) {
				   			picShow = new Array(2,5);
				   			cat = document.getElementById("cat3");
				   			cat.style.width = "18.8%";
				   		}
				   		else if(n==4){
				   			picShow = new Array(4,3,10);
				   			cat = document.getElementById("cat4");
				   			cat.style.width = "18.4%";
				   		} 
				   		else if(n==5){
				   			picShow = new Array(8,9);
				   			cat = document.getElementById("cat5");
				   			cat.style.width = "18%";
				   		} 
				   		else if(n==6){
				   			picShow = new Array(7,7);
				   			cat = document.getElementById("cat6");
				   			cat.style.width = "12%";
				   						   		} 
				   		// cat.style.paddingLeft = "12px";
				   		// cat.style.paddingRight = "12px";
				   		// cat.style.textIndent = "0%";	
				   		hoverup(cat.style.width,cat);
				   		for (i = 0; i < pics.length; i++) {
		              		pics[i].style.display = "none"; 
		          		}
		          		// debugger;
				   		for (i = 0; i < picShow.length; i++) {
				   			doshow(picShow[i]-1,i);
				   			// pics[picShow[i]-1].style.display = "block";
				   			pics[picShow[i]-1].style.WebkitAnimation = "slideUp 0.7s 1";
							pics[picShow[i]-1].style.animation = "slideUp 0.7s 1";
				   		}
		   		currentCat = n;
		   		}
		   	}

	</script>
</body>
</html>