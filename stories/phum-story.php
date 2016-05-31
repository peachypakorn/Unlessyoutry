<!DOCTYPE html>
<html>
<head>
<?php include '../header.php';?>
<link href="../header.php">
<link rel="stylesheet" type="text/css" href="../css/Leftbanner2.css">
<link rel="stylesheet" type="text/css" href="../css/phum-story.css">
<link rel="stylesheet" type="text/css" href="../css/story-content.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>

<script>

// $("p").hide();
$(document).ready(function(){
    $("img#menu").click(function(){
    	if($("p#home").css("margin-left")=="-50px"){
        $("p#home").css("color","white");
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
    <div class = "left-banner">
        <div class = "wrap">
          <img id="ibanner" src="../img/phum-story/banner.jpg" alt="phum-banner">
          <div class = "clear-bg"></div>
          <img id= "menu"class="yellow pointer" src="../img/icon/Menu.png" alt="menu">
          <img id = "profile" class="yellow" src="../img/icon/Profile.png" alt="prfile">
          <p  id = "home">HOME</p>
          <p  id = "act">ACTIVITIES</p>
          <p  id = "idea">IDEAS</p>
          <img id= "menu"class="yellow pointer" src="../img/icon/Menu.png" alt="menu">
          <img id="story-logo" src="../img/header/Story.png" alt="story-logo">
          <img id="phum-topic" src="../img/phum-story/Topic.png" alt="phum-topic">
          <p  id = "story-date">14.02.2016</p>
          <p  id = "story-place">JJ GREEN</p>
          <img id= "profile-pic" src="../img/phum-story/Profile.jpg" alt="menu">
          <p  id = "story-name">PHUM VIPHURIT</p>
          <div class = "s pointer">
            <img id= "share-icon" src="../img/icon/Share.png" alt="menu">
            <p  id = "cont-share">SHARE THIS STORY</p>
          </div>
        </div>
    </div>
    <div class ="content" style ="">
        <p><br><br></p>
        <!-- <div> slfkf</div> -->
        <div class = "slideshow-container">
            <div class="mySlides ">
                <img src="../img/phum-story/ex1.png" id = "ex1">
                <img src="../img/phum-story/pic1.jpg" style="width:100%">
            </div>
            <div class="mySlides ">
                <img src="../img/phum-story/pic3.jpg" style="width:100%">
            </div>
            <div class="mySlides ">
                <img src="../img/phum-story/pic4.jpg" style="width:100%">
            </div>
            <div class="mySlides ">
                <video autoplay loop poster controls style="width:100%" id="viral-video" >
                    <source src="../img/phum-story/video.mp4" type= "video/mp4">
                </video>
            </div>
        </div>
    </div>
</body>

</html>