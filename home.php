<!DOCTYPE html>
<html>
<head>
<?php include 'header.php';?>
<link href="header.php">
<link rel="stylesheet" type="text/css" href="./css/Leftbanner.css">
</head>

<script>
$("p").hide();
$(document).ready(function(){
    $("img.menu").click(function(){
    	$("p#home").slideToggle(function(){
    		$("p#home").slideLeft(200);
    	});
    	$("p#act").slideToggle(function(){
    		$("p#act").animate({left: '38%'});
    	});	
    	$("p#idea").slideToggle(function(){
    		$("p#idea").animate({left: '67%'});
    	});	

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
});
</script>
<body>
	<div class ="container-fluid">
		<div class="row" >
			<div class="col-sm-4 fix" >
				<div class = "wrap">
				<!-- <h2>Touch and Bonus Yeah!!!!!!!</h2> -->
				<video autoplay loop poster="./img/video/LandingVid.png" id="bgvid" class = "banner" >
		    	  	<source src="./img/video/mainVideo.mp4" type= "video/mp4">
				</video>
				<div class = "clear">
				</div>
				<!-- <img class="absolute" src="../img/bg.gif" alt="touch"> -->
				<!-- <img id="logo" src="../img/unlessyoutry.png" alt="unless Logo"> -->
				<img class="menu yellow" src="./img/icon/Menu.png" alt="menu">
				<img class="profile yellow" src="./img/icon/Profile.png" alt="prfile">
				<p  id = "home">HOME</p>
				<p  id = "act">ACTIVITIES</p>
				<p  id = "idea">IDEAS</p>
				<img id="logo1" src="../img/logoWhite.png" alt="logoW">
				<p id = "sen1">  YOU WILL NEVER UNDERSTAND WHAT IT'S LIKE,<br>WHAT IT'S FOR, HOW IT FEELS TO DO SOMETHING</p>
				<p id = "hashtag">#UNLESSYOUTRY</p>
				<script>
				// $("p#home").hide();
				$("p#home").css("color","#FFAA21");
				// $("p#act").hide();
				// $("p#idea").hide();
				</script>
			</div>
		</div>

		</div>	
	</div>
</body>


</html>