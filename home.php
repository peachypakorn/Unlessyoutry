<!DOCTYPE html>
<html>
<head>
<?php include 'header.php';?>
<link href="header.php">
<link rel="stylesheet" type="text/css" href="./css/Leftbanner.css">
<link rel="stylesheet" type="text/css" href="./css/home.css">
</head>

<script>
$("p").hide();
$(document).ready(function(){
    $("img.menu").click(function(){
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
    	// $("p#home").slideToggle(""function(){
    		//$("p#home").slideLeft(200);
    	// });
    	// $("p#act").slideToggle(function(){
    	// 	$("p#act").animate({left: '38%'});
    	// });	
    	// $("p#idea").slideToggle(function(){
    		// $("p#idea").animate({left: '67%'});
    	// });	

        // $("p#home").toggle();
        // $("p#act").toggle();
        // $("p#idea").toggle();
    });
    $("p#home").hover(function(){
       $("p#home").css("color","#FFAA21");
       $("p#act").css("color","white");
       $("p#idea").css("color","white");

    });
    $("p#act").delay("slow").hover(function(){
       $("p#home").css("color","white");
       $("p#act").delay(4000).css("color","#FFAA21");
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
    		$("div.in").hide(500);
    	}
    	else{
    		$("p#cont").animate({"margin-top": '-=100'});
    		$("div.in").fadeIn(2500);
    	}
    });
});
</script>
<body>
	<div class ="container-fluid">
		<div class="row" >
			<div class="col-sm-4 fix" >
				<div class = "wrap">
				<!-- <h2>Touch and Bonus Yeah!!!!!!!</h2> -->
				<video autoplay loop poster muted="./img/video/LandingVid.png" id="bgvid" class = "banner" >
		    	  	<source src="./img/video/mainVideo.mp4" type= "video/mp4">
				</video>
				<div class = "clear">
				</div>
				<img class="menu yellow" src="./img/icon/Menu.png" alt="menu">
				<img class="profile yellow" src="./img/icon/Profile.png" alt="prfile">
				<p  id = "home">HOME</p>
				<p  id = "act">ACTIVITIES</p>
				<p  id = "idea">IDEAS</p>
				<img id="logo1" src="./img/header/logo.png" alt="logoW">
				<p id = "sen1">  YOU WILL NEVER UNDERSTAND WHAT IT'S LIKE,<br>WHAT IT'S FOR, HOW IT FEELS TO DO SOMETHING</p>
				<p id = "hashtag">#UNLESSYOUTRY</p>
				<div class = "h">
				<img id="video" src="./img/icon/Video.png" alt="video">
				<p id = "watch">WATCH OUR VIDEO</p>
			</div>
				<p id = "cont">CONTACT</p>
				<div class ="in">
				<img id="address" src="./img/icon/Adr.png" alt="video">
				<img id="phone" src="./img/icon/Phone.png" alt="video">
				<img id="mail" src="./img/icon/Mail.png" alt="video">
				<p id = "cont1">46 MOO 9 PANJASAP VILLAGE TAWEEWATTANA<br>
								KANJANAPISEK ROAD 10170 BANGKOK</p>
				<p id = "cont2">081-835-8398</p>
				<p id = "cont3">UNLESSYOUTRY@GMAIL.COM</p>
				</div>
				<img id="fb" class="yellow" src="./img/icon/Fb.png" alt="video">
				<img id="ig" class="yellow" src="./img/icon/Ig.png" alt="video">
				<img id="tw" class="yellow" src="./img/icon/Tw.png" alt="video">
				
				<script>
				// $("p#home").hide();
				// $("p#home").css("color","#FFAA21");
				$("div.in").hide();
				// $("p#act").hide();
				// $("p#idea").hide();
				</script>
			</div>
		</div>

		</div>	
	</div>
</body>


</html>