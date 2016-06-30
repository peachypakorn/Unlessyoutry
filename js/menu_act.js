$(document).ready(function(){
	$(".info-icon").hover(function(){
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
            $(".info-t").css({
               "opacity":"0",
             });
            $(".friend-t").css({
              "opacity":"1",
             } );
             $("#act-text1").css({
              "opacity":"0",
             });
             $("#act-text2").css({
              "opacity":"1",
             });
          }
          });

	 $(".friend-icon").hover(function(){
          $(".info-icon").css({
            "-webkit-filter": "grayscale(100%) brightness(200%)",
          });
            $(".info-t").css({
               "opacity":"0",
             } );
            $(".friend-t").css({
              "opacity":"1",
             } );
            $("#act-text1").css({
              "opacity":"0",
             });
             $("#act-text2").css({
              "opacity":"1",
             });
          }, function(){
            if(page==0){
          $(".info-icon").css({
            "-webkit-filter": "grayscale(0%) brightness(100%)",
          });
          $(".friend-icon").css({
            "-webkit-filter": "grayscale(100%) brightness(200%)",
          });
            $(".info-t").css({
              "opacity":"1",
             } );
            $(".friend-t").css({
               "opacity":"0",
             } );
             $("#act-text1").css({
              "opacity":"1",
             });
             $("#act-text2").css({
              "opacity":"0",
             });      
          }
          else{
           $(".info-icon").css({
            "-webkit-filter": "grayscale(100%) brightness(200%)",
          });
          $(".friend-icon").css({
            "-webkit-filter": "grayscale(0%) brightness(100%)",
          }); 
          }
          });

      $(".link-icon").hover(function(){
          $(".info-icon").css({
            "-webkit-filter": "grayscale(100%) brightness(200%)",
          });
          $(".friend-icon").css({
            "-webkit-filter": "grayscale(100%) brightness(200%)",
          });
            $(".info-t").css({
               "opacity":"0",
             } );
            $(".friend-t").css({
               "opacity":"0",
             } );
            $(".link-t").css({
              "opacity":"1",
             } );
             $("#act-text1").css({
              "opacity":"0",
             });
             $("#act-text2").css({
              "opacity":"0",
             });
             $("#act-text3").css({
              "opacity":"1",
             });
          }, function(){

          	$(".link-t").css({
               "opacity":"0",
             } );
          	$("#act-text3").css({
              "opacity":"0",
             });
            if(page==0){
          $(".info-icon").css({
            "-webkit-filter": "grayscale(0%) brightness(100%)",
          });
          $(".friend-icon").css({
            "-webkit-filter": "grayscale(100%) brightness(200%)",
          });
          $(".info-t").css({
              "opacity":"1",
             } );
          $("#act-text1").css({
              "opacity":"1",
             });
          }
          else{
           $(".info-icon").css({
            "-webkit-filter": "grayscale(100%) brightness(200%)",
          });
          $(".friend-icon").css({
            "-webkit-filter": "grayscale(0%) brightness(100%)",
          }); 
            $(".friend-t").css({
               "opacity":"1",
             } );
            $("#act-text2").css({
              "opacity":"1",
             });
          }
          });


});	