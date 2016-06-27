var joined = 2;
function joinAct(elem,n){
          // debugger;
          var propic = document.getElementsByClassName(elem);
          var add = document.getElementsByClassName("add-icon");
          var del = document.getElementsByClassName("delete-icon");
            joined = n;
            if(n==1){
              
              add[0].style.display = "none";
              del[0].style.display = "block";
              // propic[0s].style.display = "none";
              // propic[0].style.WebkitFilter = "grayscale(0%) brightness(100%)";
              // propic[0].style.filter = "grayscale(0%) brightness(100%)";
               $(".pic").find(".profilepic").css({
                  "-webkit-filter": "grayscale(0%) brightness(100%)",
                  "transform": "scale(1.00)",
                });
               
            }
            else if(n==2){
              add[0].style.display = "block";
              del[0].style.display = "none";
              propic[0].style.WebkitFilter = "grayscale(100%)";
              propic[0].style.filter = "grayscale(100%)";
              
            }
        }
        //friend part
        $(document).ready(function(){
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
 });
        $(document).ready(function(){
             $(".add-icon").hover(function(){
              // document.getElementById("story-place").textContent =joined;
                $(".pic").find(".profilepic").css({
                  "-webkit-filter": "grayscale(0%) brightness(60%)",
                  "transform": "scale(1.10)",

                });
                $(".pic").find("#join-text").css({
                  "opacity": "1",
                });
                $(".pic").find("#join-info").css({
                  "opacity": "1",
                });
        }, function(){
              $(".pic").find(".profilepic").css({
                  "-webkit-filter": "grayscale(100%) brightness(100%)",
                  "transform": "scale(1.05)",
                });
                $(".pic").find("#join-text").css({
                  "opacity": "0",
                });
                $(".pic").find("#join-info").css({
                  "opacity": "0",
                });    
           });
          $(".delete-icon").hover(function(){
                $(".pic").find(".profilepic").css({
                  "-webkit-filter": "grayscale(100%) brightness(100%)",
                  "transform": "scale(1.00)",

                });
        }, function(){
              $(".pic").find(".profilepic").css({
                  "-webkit-filter": "grayscale(0%) brightness(100%)",
                  "transform": "scale(1.05)",
                });

           });
      
          $(".profilepic").hover(function(){
            if(joined==1){
              $(".pic").find(".profilepic").css({
                  "-webkit-filter": "grayscale(0%) brightness(100%)",
                  // "transform": "scale(1.00)",
                  });

                  }
            if(joined==2){
              $(".pic").find(".profilepic").css({
                  "-webkit-filter": "grayscale(100%) brightness(100%)",
                  // "transform": "scale(1.00)",
                  });

                  }
                },function(){
            if(joined==1){
              $(".pic").find(".profilepic").css({
                  "-webkit-filter": "grayscale(0%) brightness(100%)",
                  // "transform": "scale(1.00)",
                  });
              joined = 3;
                  }
            if(joined==2){
              $(".pic").find(".profilepic").css({
                  "-webkit-filter": "grayscale(100%) brightness(100%)",
                  // "transform": "scale(1.00)",
                  });
              joined = 3;
                  }
          });
        
      
   });