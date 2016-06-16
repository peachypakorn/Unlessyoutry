<!DOCTYPE html>
<html>
<head>
<?php include '../header.php';?>
<link href="../header.php">
<link rel="stylesheet" type="text/css" href="../css/Leftbanner2.css">
<link rel="stylesheet" type="text/css" href="../css/phum-story.css">
<link rel="stylesheet" type="text/css" href="../css/story-content.css">
<link rel="stylesheet" type="text/css" href="../css/profile.css">
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

    $(".pic").hover(function(){
          $(this).find(".friend-info").animate({
              left: '0%',
              opacity: '1',
          },100);
          $(this).find(".friend-info").css({
            "transform": "scale(1.00)",
          });
          $(this).find(".pro-pic").css({
            "transform": "scale(1.05)",
          });
          }, function(){
          $(this).find(".friend-info").animate({
              left: '100%',
              opacity: '0',
          });
          $(this).find(".friend-info").css({
            "transform": "scale(1.00)",
          });
          $(this).find(".pro-pic").css({
            "transform": "scale(1.00)",
          });
    });

        $(".info-icon").hover(function(){
          $("chat-icon").css({
            "-webkit-filter": "grayscale(100%) brightness(200%)",
          });
          $(".ref-icon").css({
            "-webkit-filter": "grayscale(100%) brightness(200%)",
          });
          $(".photo-icon").css({
            "-webkit-filter": "grayscale(100%) brightness(200%)",
          });          
          }, function(){
            if(page==0){
          $(this).css({
            "-webkit-filter": "grayscale(0%) brightness(100%)",
          });
          $(".friend-icon").css({
            "-webkit-filter": "grayscale(100%) brightness(200%)",
          });
          }
          else{
           $(this).css({
            "-webkit-filter": "grayscale(100%) brightness(200%)",
          });
          $(".friend-icon").css({
            "-webkit-filter": "grayscale(0%) brightness(100%)",
          }); 
          }
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

<body>
    <div class = "left-banner">
        <div class = "wrap">
          <img id="ibanner-touch" src="../img/profile-com/touch-profile/banner.jpg" alt="phum-banner">
          <div class = "clear-bg"></div>
          <div class="bg"></div>
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
      
          <img id= "profile-pic-p" src="../img/profile-com/touch-profile/Profile.jpg" alt="menu">
          <p  id = "story-place" style = "margin-top:48%">THEERAT<br>WATTANAKIJRUNGROJ</p>
          <div class = "icons">
              <img class= "yellow icon center pointer" id= "me-icon" src="../img/icon/Me.png" alt="info" onclick ="showDisplay(0)">
              <p  class = "icon-text">OVERALL</p>
          </div>
          <div class = "icons">
              <img class= "yellow icon center pointer" id= "chat-icon" src="../img/icon/Chat.png" alt="chat"  onclick ="showDisplay(1)">
              <p  class = " icon-text">CHAT</p>
          </div>
          <div class = "icons">
              <img class= "yellow icon center pointer" id= "ref-icon" src="../img/icon/Ref.png" alt="ref" onclick ="showDisplay(2)">
              <p  class = " icon-text ">REFERENCE</p>
          </div>
          <div class = "icons">
              <img class= "yellow icon center pointer" id= "photo-icon" src="../img/icon/Photos.png" alt="photo" onclick ="showDisplay(3)">
              <p  class = " icon-text ">GALLERY</p>  
          </div>
          
          <p id = "act-text" style = "top:86%">SO MANY THINGS ARE WAITING FOR YOU TO TRY<br>WE ARE UPDATING THE ACTIVITIES FROM SEVERAL<br>SO MANY THINGS ARE WAITING FOR YOU TO TRY</p>
         
          <p class = "center" id = "my-con">MY CONTACTS</p>  
      <a href ="https://www.facebook.com/unlessyoutry/" target="_blank">
        <img id="fb" class="yellow" src="../img/icon/Fb.png" alt="fb">
      </a>
      <a href="https://www.instagram.com/unlessyoutry.campaign/" target="_blank">
        <img id="ig" class="yellow" src="../img/icon/Ig.png" alt="ig">
      </a>
      <a href="https://twitter.com/UnlessYouTryCP/" target="_blank">
        <img id="tw" class="yellow" src="../img/icon/Tw.png" alt="tw">
      </a>
        </div>
    </div>
    
    <div class ="content" style = "background:black" >
        <div class = "div40" style = "background:white">
            <div class="bg"></div>
            <img id="profile-info"  src="../img/profile-com/touch-profile/Info.png" alt="infomation">   
            <br><br><br>
        </div>
         <div class = "div20">
              <div class="grow-n gal bw slideUp2 " id = "pic1">
                  <!-- <img class ="backg" src="../img/profile-com/touch-profile/p1.jpg"> -->
                  <div class="mySlides move fix-size">
                      <img  src="../img/profile-com/touch-profile/p1.jpg" alt="touch1">
                  </div>
                  <div class="mySlides move fix-size">
                      <img  src="../img/profile-com/touch-profile/p2.jpg" alt="touch1">
                  </div>
                  <div class="mySlides move fix-size">
                      <img  src="../img/profile-com/touch-profile/p3.jpg" alt="touch1">
                  </div>
                  <div class="mySlides move fix-size">
                      <img  src="../img/profile-com/touch-profile/p4.jpg" alt="touch1">
                  </div>
              </div>
              <div class="grow-n gal bw slideUp2 " id = "pic2">
                  <!-- <img class ="backg" src="../img/profile-com/touch-profile/p1.jpg"> -->
                  <div class="mySlides move fix-size">
                      <img  src="../img/profile-com/touch-profile/p5.jpg" alt="touch1">
                  </div>
                  <div class="mySlides move fix-size">
                      <img  src="../img/profile-com/touch-profile/p6.jpg" alt="touch1">
                  </div>
                  <div class="mySlides move fix-size">
                      <img  src="../img/profile-com/touch-profile/p7.jpg" alt="touch1">
                  </div>
                  <div class="mySlides move fix-size">
                      <img  src="../img/profile-com/touch-profile/p8.jpg" alt="touch1">
                  </div>
              </div>
              <div class="grow-n gal bw slideUp2 " id = "pic3">
                  <!-- <img class ="backg" src="../img/profile-com/touch-profile/p1.jpg"> -->
                  <div class="mySlides move fix-size">
                      <img  src="../img/profile-com/touch-profile/p9.jpg" alt="touch1">
                  </div>
                  <div class="mySlides move fix-size">
                      <img  src="../img/profile-com/touch-profile/p10.jpg" alt="touch1">
                  </div>
                  <div class="mySlides move fix-size">
                      <img  src="../img/profile-com/touch-profile/p11.jpg" alt="touch1">
                  </div>
                  <div class="mySlides move fix-size">
                      <img  src="../img/profile-com/touch-profile/p12.jpg" alt="touch1">
                  </div>
              </div>
        </div>
    </div>

    <div class ="content" style = "background:black" >
        <div class = "div40" style = "background:white">
            <div class="bg"></div>
            <img id="chat-log"  src="../img/profile-com/touch-profile/chat.png" alt="infomation">   
            <br><br><br>
        </div>
        <div class = "div20">
            <img id="friend-list"  src="../img/profile-com/touch-profile/friend-list.png" alt="infomation">
        </div>
    </div>
  
    <div class ="content" style = "background:black" >
        <div class = "div40" style = "background:white">
            <p id = "ref">REFERECNES</p>
            <img id="pos-ref"  src="../img/profile-com/touch-profile/pos-ref.png" alt="infomation">   
            <img id="neg-ref"  src="../img/profile-com/touch-profile/neg-ref.png" alt="infomation">   
            <img id="ref-info"  src="../img/profile-com/touch-profile/ref.png" alt="infomation">   
            <br><br><br>
        </div>
        <div class = "div20">
            <img id="friend-list"  src="../img/profile-com/touch-profile/friend-list.png" alt="infomation">
        </div>
    </div>

    <script>
     $("html, body").animate({ scrollTop: 0 }, "slow");
     $("#profile").css({
                   "-webkit-filter": "grayscale(0%) brightness(100%)"
              });
     $("#me-icon").css({
          "-webkit-filter": "grayscale(0%) brightness(100%)",
        });
        var slideIndex =0;
        var bg ;
        var gal = document.getElementsByClassName("gal");
        debugger;
        for(i = 0; i < 3; i++)gal[i].display ="none";
        for(i = 0; i < 3; i++)start(i,i);
  
        setTimeout(function(){ showSlides(1,0,1);},4000);
        setTimeout(function(){ showSlides(5,0,2);},5000);
        setTimeout(function(){ showSlides(9,0,3);},6000);
        var content = document.getElementsByClassName("content");
        content[0].style.display = "none";
        content[1].style.display = "none";
        function sshows(n){
          var pos = n;
          // alert(n + " " + pos);
          gal[pos].style.display = "block"; 

                  }
        function start(n,m){
          setTimeout(function(){sshows(numpic=n);},m*900);
                          }


        function showSlides(n,b,t) {
        var imgPath = new Array(
          "url('../img/profile-com/touch-profile/p1.jpg')",
          "url('../img/profile-com/touch-profile/p2.jpg')",
          "url('../img/profile-com/touch-profile/p3.jpg')",
          "url('../img/profile-com/touch-profile/p4.jpg')",
          "url('../img/profile-com/touch-profile/p5.jpg')",
          "url('../img/profile-com/touch-profile/p6.jpg')",
          "url('../img/profile-com/touch-profile/p7.jpg')",
          "url('../img/profile-com/touch-profile/p8.jpg')",
          "url('../img/profile-com/touch-profile/p9.jpg')",
          "url('../img/profile-com/touch-profile/p10.jpg')",
          "url('../img/profile-com/touch-profile/p11.jpg')",
          "url('../img/profile-com/touch-profile/p12.jpg')"
          );
          var i;
          var slides = document.getElementsByClassName("mySlides");
          // debugger;
          if (n > 4*t) {n = 4*(t-1)+1} 
          // if (n < 4*(t-1)) {n = slides.length} ;
          // debugger;
          var a = imgPath[1];
          // gal[t-1].style.backgroundImage = "none";

          for (i = 0+((t-1)*4); i < 4*t; i++) {
              slides[i].style.display = "none"; 
          }
           setTimeout(function(){ gal[t-1].style.backgroundImage = imgPath[n-1];},3000);
          slides[n-1].style.display = "block";
          // document.getElementById("story-place").textContent =t;
          var send = n;
          timer = setTimeout(function(){showSlides(n += 1,send, t)}, 6000+t*534+n*100);
          
        }

    </script>
    <script >
  var pics = document.getElementsByClassName("pic");
        var currentCat = 0;
        var numpic = 0;
        var h;
        var cat =document.getElementById("cat1");

            for (i = 0; i < pics.length; i++) {
                      pics[i].style.display = "none"; 
                  }
            for (i = 0; i < pics.length; i++) {
              doshow(i,i);
                  pics[i].style.WebkitAnimation = "slideUp 0.7s 1";
          pics[i].style.animation = "slideUp 0.7s 1";
              }

        function shows(n){
          // var pics = document.getElementsByClassName("pic");
          var pos = n;
          // alert(n + " " + pos);
          pics[pos].style.display = "block"; 

                  }
        function doshow(n,m){
          setTimeout(function(){shows(numpic=n);},m*200);
                          }
        function joinAct(elem,n){
          // debugger;
          var propic = document.getElementsByClassName(elem);
          var add = document.getElementsByClassName("add-icon");
          var del = document.getElementsByClassName("delete-icon");
            if(n==1){
              add[0].style.display = "none";
              del[0].style.display = "block";
              // propic[0s].style.display = "none";
              propic[0].style.WebkitFilter = "grayscale(0%)";
              propic[0].style.filter = "grayscale(0%)";
            }
            else if(n==2){
              add[0].style.display = "block";
              del[0].style.display = "none";
              propic[0].style.WebkitFilter = "grayscale(100%)";
              propic[0].style.filter = "grayscale(100%)";
            }
        }
        var page =0;
        function showDisplay(n){
          page = n;
          if(n==0){
             content[0].style.display = "block";
             content[1].style.display = "none";
             showSlides(slideIndex,0,5);
             $(".info-icon").css({
          "-webkit-filter": "grayscale(0%) brightness(100%)",
        });
             $(".friend-icon").css({
          "-webkit-filter": "grayscale(100%) brightness(200%)",
              });
          }
          else if(n==1){
             content[0].style.display = "none";
             content[1].style.display = "block";
             vid.pause();
             clearTimeout(timer);
             $(".friend-icon").css({
          "-webkit-filter": "grayscale(0%) brightness(100%)",
              });
             $(".info-icon").css({
          "-webkit-filter": "grayscale(100%) brightness(200%)",
              });
             for (i = 0; i < pics.length; i++) {
              pics[i].style.display = "none"; 
                  }
            for (i = 0; i < pics.length; i++) {
              doshow(i,i);
                  pics[i].style.WebkitAnimation = "slideUp 0.7s 1";
          pics[i].style.animation = "slideUp 0.7s 1";
              }
          }
        }
       
    </script>
</body>

</html>