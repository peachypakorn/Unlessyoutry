  var pics = document.getElementsByClassName("pic");
        var currentCat = 0;
        var numpic = 0;
        var h;
        debugger;
        var cat =document.getElementById("cat1");

            for (i = 0; i < pics.length; i++) {
                      pics[i].style.display = "none"; 
                  }
            for (i = 0; i < pics.length; i++) {
              doshow(i,i+1);
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
             $(".info-t").css({
              "opacity":"1",
             });
             $(".friend-t").css({
              "opacity":"0",
             });
             $("#act-text1").css({
              "opacity":"1",
             });
             $("#act-text2").css({
              "opacity":"0",
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
            $(".info-t").css({
              "opacity":"0",
             });
            $(".friend-t").css({
              "opacity":"1",
             });
             $("#act-text1").css({
              "opacity":"0",
             });
             $("#act-text2").css({
              "opacity":"1",
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


       