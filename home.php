<!DOCTYPE html>
<html>
<head>
<?php include 'header.php';?>
<link href="header.php">
<link rel="stylesheet" type="text/css" href="./css/Leftbanner.css">
<script src="./vender/typed/js/typed.js"></script>
<link rel="stylesheet" type="text/css" href="./css/home.css">
<link rel="stylesheet" type="text/css" href="./css/picture.css">
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
<body>
	<div class ="container-fluid">
		<div class="row" >
			<div class="col-sm-4 fix" >
				<div class = "wrap">
					<div class = "clear"></div>
				<!-- <h2>Touch and Bonus Yeah!!!!!!!</h2> -->
				<video autoplay loop poster muted="./img/video/LandingVid.png" id="bgvid" class = "banner" >
		    	  	<source src="./img/video/mainVideo20.mp4" type= "video/mp4">
				</video>
				<img class="menu yellow pointer" src="./img/icon/Menu.png" alt="menu">
				<img class="profile yellow" src="./img/icon/Profile.png" alt="prfile">
				<p  id = "home">HOME</p>
				<p  id = "act">ACTIVITIES</p>
				<p  id = "idea">IDEAS</p>
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
				<img id="fb" class="yellow" src="./img/icon/Fb.png" alt="video">
				<a href="https://www.instagram.com/unlessyoutry.campaign/" target="_blank">
					<img id="ig" class="yellow" src="./img/icon/Ig.png" alt="video">
				</a>
				<a href="https://twitter.com/UnlessYouTryCP/" target="_blank">
				<img id="tw" class="yellow" src="./img/icon/Tw.png" alt="video">
				</a>
				<script>
				$("div.in").hide();
				</script>
			</div>
		</div>
			<div class="col-sm-8 check"  >
					<div class="grow pic bw" id = "pic1">
							<img  src="./img/homePic/Phum.jpg" alt="phumConcert">
							<div class = "text">
							</div>
							<p class = "text2" >     <br>PHUM<br>CONCERT</p>
							<p class = "text3" ><br><br><br>15.03.16</p>
							
						</div>
					<div class="grow pic bw" id = "pic2">
							<img  src="./img/homePic/Cindy.jpg" alt="Cindy">
								<div class = "text">
							</div>
							<p class = "text2" >KOREA<br>ART<br>TRIP</p>
							<p class = "text3" ><br><br><br>4-11.04.16</p>
							

						</div>						
					<div class="grow pic bw" id = "pic3">
							<img  src="./img/homePic/Bonus.jpg" alt="Bonus">
								<div class = "text">
							</div>
							<p class = "text2" >HIGHER<br>LEVEL<br>DANCE</p>
							<p class = "text3" ><br><br><br>18.02.16</p>
							
						</div>
							<div class="grow pic bw" id = "pic4">
							<img  src="./img/homePic/Mitz.jpg" alt="midjungle">
								<div class = "text">
							</div>
							<p class = "text2" >WEIR<br>FOR<br>WILD</p>
							<p class = "text3" ><br><br><br>28.02.16</p>
						</div>
					<div class="grow pic bw" id = "pic5">
							<img  src="./img/homePic/Touch.jpg" alt="touch">
								<div class = "text">
							</div>
							<p class = "text2" >RURAL<br>TEACHER<br>#170</p>
							<p class = "text3" ><br><br><br>7-10.01.16</p>
						</div>						
					<div class="grow pic bw" id = "pic6">
							<img  src="./img/homePic/Sun.jpg" alt="sunActing">
								<div class = "text">
							</div>
							<p class = "text2" >THE<br>OUTER<br>PROJECT</p>
							<p class = "text3" ><br><br><br>1-31.01.16</p>
						</div>
					<div class="grow pic bw" id = "pic7">
							<img  src="./img/homePic/PEP.jpg" alt="pep">
								<div class = "text">
							</div>
							<p class = "text2" >KOH<br>TAO<br>DIVING</p>
							<p class = "text3" ><br><br><br>17.05.16</p>
						</div>
					<div class="grow pic bw" id = "pic8">
							<img  src="./img/homePic/gino.jpg" alt="gino Russia">
								<div class = "text">
							</div>
							<p class = "text2" >AFS<br>AT<br>RUSSIA</p>
							<p class = "text3" ><br><br><br>2014-2015</p>
						</div>						
					<div class="grow pic bw" id = "pic9">
							<img  src="./img/homePic/Dew.jpg" alt="dewdewdew">
								<div class = "text">
							</div>
							<p class = "text2" >PHU<br>SOIDAOW<br>HIKING</p>
							<p class = "text3" ><br><br><br>24-28.12.15</p>
						</div>
					<div class="grow pic bw" id = "pic10">
							<img  src="./img/homePic/Oak.jpg" alt="camping">
								<div class = "text">
							</div>
							<p class = "text2" >AFS<br>MEDIA<br>MAN</p>
							<p class = "text3" ><br><br><br>21-24.04.15</p>
						</div>
					<div class="grow pic bw" id = "pic11">
							<img  src="./img/homePic/Nat.jpg" alt="TFT">
								<div class = "text">
							</div>
							<p class = "text2" >TEACH<br>FOR<br>THAI</p>
							<p class = "text3" ><br><br><br>21-24.04.15</p>
						</div>	

			</div>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <!-- <div class="modal-content"> -->
			  	<video autoplay loop poster controller="./img/video/LandingVid.png" id="bgvid" class = "viral-video" >
		    	  	<source src="./img/video/viral.mp4" type= "video/mp4">
				</video>
    <!-- <span class="close">x</span> -->
  <!-- </div> -->

</div>
				<script>
//modal part
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("video");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
				 </script>

		</div>	
	</div>
</body>


</html>