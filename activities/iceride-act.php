<!DOCTYPE html>
<html>
<head>
<?php include '../header.php';?>
<link href="../header.php">
<link rel="stylesheet" type="text/css" href="../css/Leftbanner2.css">
<link rel="stylesheet" type="text/css" href="../css/phum-story.css">
<link rel="stylesheet" type="text/css" href="../css/story-content.css">
  <link rel="stylesheet" type="text/css" href="../css/picture.css">
  <link rel="stylesheet" type="text/css" href="../css/animations.css">
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

       // });
  });
$( window ).scroll(function() {
    $( "#sct" ).animate({
              opacity: '0'
            },1000);
    // $("#sc").css("animation-iteration-count" ,"0")
    $("#sc").animate({
              opacity: '0'
            },1500);
});

</script>
<script src="../js/menu_act.js"></script>
<script src="../js/join-act.js"></script>
<body>
    <div class = "left-banner">
        <div class = "wrap">
          <img id="ibanner" src="../img/act-com/iceride-act/banner.jpg" alt="phum-banner">
          <div class = "clear-bg"></div>
          <img id= "menu"class="yellow pointer" src="../img/icon/Menu.png" alt="menu">
          <a href = "../profiles/touch-profile.php">
              <img id = "profile" class="yellow" src="../img/icon/Profile.png" alt="prfile">
          </a>
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
          <img id="act-logo" src="../img/header/Activities.png " style = "opacity:0.7" alt="act-logo">
          <img id="twoline-topic" src="../img/act-com/iceride-act/Topic.png" alt="colorrun">
          <p  id = "story-date">28.02.2016</p>
          <p  id = "story-place">BANGKOK</p>
          <a class = "p pointer">
              <img id= "profile-pic" src="../img/act-com/iceride-act/Profile.png" alt="menu">
              <p  id = "story-name" >GREENPEACE</p>
          </a>
          <img class= "yellow info-icon pointer" src="../img/icon/Info.png" alt="info" onclick ="showDisplay(0)">
              <p  class = "info-t">INFORMATION</p>
          <img class= "yellow friend-icon pointer" src="../img/icon/Friends.png" alt="friend"  onclick ="showDisplay(1)">
              <p  class = " friend-t">FIND FRIENDS</p>
          <img class= "yellow link-icon pointer" src="../img/icon/Link.png" alt="link">
              <p  class = " link-t ">APPLY</p>
                    <p id = "act-text1">PROVIDE ALL DETAILS OF THE ACTIVITIES SUCH AS <br>OBJECTIVES, TIME TABLE, COST, PREPARATION, ETC.</p>
                    <p id = "act-text2">LOOK FOR FRIENDS WHO INTERESTED IN SAME ACTIVITY;<br> CHAT THEM AND GO OUT TOGETHER.</p>
                    <p id = "act-text3">LINK TO REGISTRATION PAGE.</p>
          <div class = "s pointer">
            <img id= "share-icon" src="../img/icon/Share.png" alt="share">
            <p  id = "cont-share">SHARE THIS STORY</p>
          </div>
        </div>
    </div>

    <div class ="content" style = "background:white">
        <br><br>
        <div id = "slideshow-container" style = "background-color:black');">
            <div class="mySlides move">
                <!-- <img src="../img/act-com/iceride-act/ex1.png" id = "ex1"> -->
                <img src="../img/act-com/iceride-act/pic1.jpg" style="width:100%">
            </div>
            <div class="mySlides move ">
                <video loop poster controls style="width:100%" id="story-vid" >
                    <source src="../img/act-com/iceride-act/video.mp4" type= "video/mp4">
                </video>
            </div>
            <div class="mySlides move">
                <img src="../img/act-com/iceride-act/pic3.jpg" style="width:100%">
            </div>
            <div class="mySlides move">
                <img src="../img/act-com/iceride-act/pic4.jpg" style="width:100%">
            </div>
            <div class="mySlides move">
                <img src="../img/act-com/iceride-act/pic5.jpg" style="width:100%">
            </div>
              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>
              <div class = "dd" style="left:87%">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                  <span class="dot" onclick="currentSlide(3)"></span>
                  <span class="dot" onclick="currentSlide(4)"></span>
                  <span class="dot" onclick="currentSlide(5)"></span> 
              </div>
        </div>
        
        <img src="../img/act-com/iceride-act/text1.png" id = "text1">
        <br><br><br>
        <div class = "sd"> 
            <img src="../img/icon/ScrollDown.png" id = "sc"> 
            <img src="../img/icon/ScrollDownText.png" id = "sct"> 
        </div>
        <br><br>
        <img src="../img/act-com/iceride-act/text2.png" id = "text2-c" class ="">
    </div>

    <div class = "content">
   
      <div class="grow-n pic slideUp" id = "pic1">
              <img class= " grow add-icon pointer" src="../img/icon/Add.png" alt="add" onclick = "joinAct('profilepic',1) ">
              <img class= " grow delete-icon pointer" src="../img/icon/Close.png" alt="delete" onclick = "joinAct('profilepic',2) ">
              <img class="profilepic" src="../img/friend-pic/Touch.jpg" alt="friend0">
              <p id = "join-text" class ="center">INTERESTED</p>
              <p id = "join-info" class ="center">ADD YOURSELF INTO THE LIST</p>
     </div>
   <a href="">
      <div class=" pic grow bw slideUp" id = "pic1">
        <img class="pro-pic" src="../img/friend-pic/friend1.jpg" alt="friend1">
        <img class = "friend-info" src="../img/friend-pic/info1.png" alt="friend-info1">
      </div>
    </a>
    <a href="">
      <div class=" pic grow bw slideUp" id = "pic2">
        <img class="pro-pic" src="../img/friend-pic/friend2.jpg" alt="friend2">
        <img class = "friend-info" src="../img/friend-pic/info2.png" alt="friend-info2">
      </div>
    </a>
    <a href="">
      <div class="grow pic bw slideUp" id = "pic3">
        <img class="pro-pic" src="../img/friend-pic/friend3.jpg" alt="friend3">
        <img class = "friend-info" src="../img/friend-pic/info3.png" alt="friend-info3">
      </div>
    </a>
    <a href="">
      <div class="grow pic bw slideUp" id = "pic4">
        <img class="pro-pic" src="../img/friend-pic/friend4.jpg" alt="friend4">
        <img class = "friend-info" src="../img/friend-pic/info4.png" alt="friend-info4">
      </div>
    </a>
    <a href="">
      <div class="grow pic bw slideUp" id = "pic5">
        <img class="pro-pic" src="../img/friend-pic/friend5.jpg" alt="friend5">
        <img class = "friend-info" src="../img/friend-pic/info5.png" alt="friend-info5">
      </div>
    </a>
    <a href="">
      <div class="grow pic bw slideUp" id = "pic6">
        <img class="pro-pic" src="../img/friend-pic/friend6.jpg" alt="friend6">
        <img class = "friend-info" src="../img/friend-pic/info6.png" alt="friend-info6">
      </div>
    </a>
    <a href="">
      <div class="grow pic bw slideUp" id = "pic7">
        <img class="pro-pic" src="../img/friend-pic/friend7.jpg" alt="friend7">
        <img class = "friend-info" src="../img/friend-pic/info7.png" alt="friend-info7">
      </div>
    </a>    
      <a href="">
      <div class="grow pic bw slideUp" id = "pic8">
        <img class="pro-pic" src="../img/friend-pic/friend8.jpg" alt="friend8">
        <img class = "friend-info" src="../img/friend-pic/info8.png" alt="friend-info8">
      </div>
    </a>
    <a href="">
      <div class="grow pic bw slideUp" id = "pic9">
        <img class="pro-pic" src="../img/friend-pic/friend9.jpg" alt="friend9">
        <img class = "friend-info" src="../img/friend-pic/info9.png" alt="friend-info9">
      </div>
    </a>

  </div>
    <script>
     $("html, body").animate({ scrollTop: 0 }, "slow");
        var slideIndex = 1;
        var vid = document.getElementById("story-vid");
        // var info = document.getElementsByClassName("info-icon");
        // var friend = document.getElementsByClassName("friend-icons");
        $(".info-icon").css({
          "-webkit-filter": "grayscale(0%) brightness(100%)",
        });
        var timer;
        vid.currentTime = 2;
        showSlides(slideIndex,0,5);
        var content = document.getElementsByClassName("content");
        content[1].style.display = "none";

        // clearTimeout(timer);
        // $(ex1).fadeIn(3000);

        function plusSlides(n) {
            // document.getElementById("slideshow-container").reset();
            clearTimeout(timer);
            var b = slideIndex;
            showSlides(slideIndex += n,b,10);
            }

        function currentSlide(n) {
           // document.getElementById("slideshow-container").reset();
          clearTimeout(timer);
          var b = slideIndex;
          showSlides(slideIndex = n,b,10);
          }

        function showSlides(n,b,t) {
          // clearTimeout(timer);
          // var bg = document.getElementsByClassName("slideshow-container");
          var i;
          var time = t;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          var vid = document.getElementById("story-vid");
          if (n > slides.length) {slideIndex = 1} 
          if (n < 1) {slideIndex = slides.length} ;

          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          // debugger;
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none"; 
          }
          // $("#slideshow-container").css({"background-image":" url('../img/act-com/iceride-act/ex1.png');"});
           // alert(document.getElementById("slideshow-container").style.backgroundImage);
          if(b==0)document.getElementById("slideshow-container").style.backgroundColor = "black";
          if(b==1)document.getElementById("slideshow-container").style.backgroundImage = "url('../img/act-com/iceride-act/pic1.jpg')";
          if(b==2)document.getElementById("slideshow-container").style.backgroundImage = "url('../img/act-com/iceride-act/pic2.png')";
          if(b==3)document.getElementById("slideshow-container").style.backgroundImage = "url('../img/act-com/iceride-act/pic3.jpg')";
          if(b==4)document.getElementById("slideshow-container").style.backgroundImage = "url('../img/act-com/iceride-act/pic4.jpg')";
          if(b==5)document.getElementById("slideshow-container").style.backgroundImage = "url('../img/act-com/iceride-act/pic5.jpg')";
          var send = slideIndex;
            slides[slideIndex-1].style.display = "block";
          if(slideIndex==2){
            vid.play();
           setTimeout(function(){ document.getElementById("slideshow-container").style.backgroundImage = "none";},3000);
              
             // alert(document.getElementById("slideshow-container").style.backgroundImage);
            if(time == 10){
              time = vid.duration-vid.currentTime;
            }
            else time = 30;
            if(vid.requestFullscreen){
              time = vid.duration - vid.currentTime-1;
            }
          }
          else if(slideIndex!=2){
            vid.pause();
          }
          // if(slideIndex==1){
          //   $(ex1).fadeIn(900);
          // }
          // else{
          // $(ex1).hide(); 
          // }
          dots[slideIndex-1].className += " active";
          // debugger;
          time = time * 1000;
          // document.getElementById("story-place").textContent =time;
          timer = setTimeout(function(){showSlides(slideIndex += 1,send, 5)}, time);
          
        }

    </script>
     <script src="../js/joinact.js"></script>
</body>

</html>