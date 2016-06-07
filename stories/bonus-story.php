<!DOCTYPE html>
<html>
<head>
<link href="../header.php">
<link rel="stylesheet" type="text/css" href="../css/Leftbanner2.css">
<link rel="stylesheet" type="text/css" href="../css/phum-story.css">
<link rel="stylesheet" type="text/css" href="../css/story-content.css">
<!-- slider -->
    <link href="../vender/slider2/themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="../vender/slider2/themes/1/js-image-slider.js" type="text/javascript"></script>
    <link href="../vender/slider2/generic.css" rel="stylesheet" type="text/css" /><link rel="stylesheet" type="text/css" href="../css/slider.css">
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
    $(window).scrollTop();
    $(window).scroll(function(){
        $("sd").animate({
              opacity: '0'
            },100);
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
    <div class ="content">
        <br><br>
    <div id="sliderFrame">
        <div id="slider">
            <img class="pic" src="../img/phum-story/pic3.jpg" alt="Welcome to Menucool.com" />
            <img class ="pic" src="../img/phum-story/pic1.jpg" >
            <img class ="pic" src="../vender/slider2/images/image-slider-3.jpg" alt="" />
            <img class ="pic" src="../vender/slider2/images/image-slider-4.jpg" alt="#htmlcaption" />
            <img class ="pic" src="../vender/slider2/images/image-slider-5.jpg" />
        </div>
      </div>
        <!-- <div class = "slideshow-container">
            <div class="mySlides move">
                <img src="../img/phum-story/ex1.png" id = "ex1">
                <img src="../img/phum-story/pic1.jpg" style="width:100%">
            </div>
            <div class="mySlides move ">
                <video loop poster controls style="width:100%" id="story-vid" >
                    <source src="../img/phum-story/video.mp4" type= "video/mp4">
                </video>
            </div>
            <div class="mySlides move">
                <img src="../img/phum-story/pic3.jpg" style="width:100%">
            </div>
            <div class="mySlides move">
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
        </div> -->
        
        <img src="../img/phum-story/text1.png" id = "text1">
        <br><br><br>
        <div class = "sd"> 
            <img src="../img/icon/ScrollDown.png" id = "sc"> 
            <img src="../img/icon/ScrollDownText.png" id = "sct"> 
        </div>
        <br><br>
        <img src="../img/phum-story/text2.png" id = "text2" class ="">
    </div>
    <script>

    </script>
</body>

</html>