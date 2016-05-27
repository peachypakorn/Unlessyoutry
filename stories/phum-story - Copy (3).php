<!DOCTYPE html>
<html>
<head>
<?php include 'header.php';?>
<link href="header.php">
<link rel="stylesheet" type="text/css" href="./css/Leftbanner.css">
<script src="./vender/typed/js/typed.js"></script>
<link rel="stylesheet" type="text/css" href="./css/phum-story.css">
<!-- <link rel="stylesheet" type="text/css" href="./css/picture.css"> -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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
});
</script>
<body>
	<div class ="container-fluid">
		<div class="row" >
			<div class="col-sm-4 fix" >
				<div class = "wrap">
					<div class = "clear"></div>
					
				<img class="menu yellow pointer" src="./img/icon/Menu.png" alt="menu">
				<img class="profile yellow" src="./img/icon/Profile.png" alt="prfile">
				<p  id = "home">HOME</p>
				<p  id = "act">ACTIVITIES</p>
				<p  id = "idea">IDEAS</p>
				<img id="logo2" src="./img/header/Story.png" alt="logoW">
				<img class="banner-pic" src="./img/phumPic/banner.jpg" alt="logoW">
			</div>
		</div>
			<div class="col-sm-8 check"  >
				

			</div>
		</div>	
	</div>
</body>

</html>