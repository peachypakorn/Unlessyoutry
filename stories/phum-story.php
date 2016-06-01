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
          <a href="../story.php">
            <p  id = "home">HOME</p>
          </a>
          <a href="../activities.php">
            <p  class = "pointer"id = "act">ACTIVITIES</p>
          </a>
          <a href="../idea.php">
            <p  id = "idea">IDEAS</p>
          </a>
          <img id= "menu"class="yellow pointer" src="../img/icon/Menu.png" alt="menu">
          <img id="story-logo" src="../img/header/Story.png" alt="story-logo">
          <img id="phum-topic" src="../img/phum-story/Topic.png" alt="phum-topic">
          <p  id = "story-date">14.02.2016</p>
          <p  id = "story-place">JJ GREEN</p>
          <a class = "p pointer">
              <img id= "profile-pic" src="../img/phum-story/Profile.jpg" alt="menu">
              <p  id = "story-name">PHUM VIPHURIT</p>
          </a>
          <div class = "s pointer">
            <img id= "share-icon" src="../img/icon/Share.png" alt="menu">
            <p  id = "cont-share">SHARE THIS STORY</p>
          </div>
        </div>
    </div>
    <div class ="content" style ="">
        <br><br>
        <!-- <div> slfkf</div> -->
        <div class = "slideshow-container">
            <div class="mySlides">
                <img src="../img/phum-story/ex1.png" id = "ex1">
                <img src="../img/phum-story/pic1.jpg" style="width:100%">
            </div>
            <div class="mySlides ">
                <video loop poster controls style="width:100%" id="story-vid" >
                    <source src="../img/phum-story/video.mp4" type= "video/mp4">
                </video>
            </div>
            <div class="mySlides ">
                <img src="../img/phum-story/pic3.jpg" style="width:100%">
            </div>
            <div class="mySlides ">
                <img src="../img/phum-story/pic4.jpg" style="width:100%">
            </div>
              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>
              <div class = "dd" style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                  <span class="dot" onclick="currentSlide(3)"></span>
                  <span class="dot" onclick="currentSlide(4)"></span> 
              </div>
        </div>
        
        <img src="../img/phum-story/text1.png" id = "text1">
        <br><br><br>
        <div class = "sd"> 
            <img src="../img/icon/ScrollDown.png" id = "sc"> 
            <img src="../img/icon/ScrollDownText.png" id = "sct"> 
        </div>
        <br><br>
        <img src="../img/phum-story/text2.png" id = "text2">
    </div>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        var vid = document.getElementById("story-vid");
        vid.currentTime = 2;
        // $(ex1).fadeIn(3000);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          var vid = document.getElementById("story-vid");
          if (n > slides.length) {slideIndex = 1} 
          if (n < 1) {slideIndex = slides.length} ;
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none"; 
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block"; 
          if(n!=2){
            vid.pause();
          }
          if(n==1){
            $(ex1).fadeIn(900);
          }
          else{
          $(ex1).hide(); 
          }
          dots[slideIndex-1].className += " active";
        }
    </script>
</body>

</html>