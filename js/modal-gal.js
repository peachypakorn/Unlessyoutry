// Get the modal
		var modal = document.getElementById('myGal');
// Get the button that opens the modal
		var btn = document.getElementsByClassName("gal");
// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close-modal")[0];
		var bgModal = document.getElementById("background-modal")
		var picPath = new Array(
		// "../img/profile-com/touch-profile/p1.jpg",
		"../img/profile-com/touch-profile/p1.jpg",
		"../img/profile-com/touch-profile/p2.jpg",
		"../img/profile-com/touch-profile/p3.jpg",
		"../img/profile-com/touch-profile/p4.jpg",
		"../img/profile-com/touch-profile/p5.jpg",
		"../img/profile-com/touch-profile/p6.jpg",	
		"../img/profile-com/touch-profile/p7.jpg",
		"../img/profile-com/touch-profile/p8.jpg",
		"../img/profile-com/touch-profile/p9.jpg",
		"../img/profile-com/touch-profile/p10.jpg",
		"../img/profile-com/touch-profile/p11.jpg",
		"../img/profile-com/touch-profile/p12.jpg"

			);
        modal.style.animation = "fadein 1s 1";
        modal.style.WebkitAnimation = "fadein 1s 1";
		var big_pic = document.createElement('img');
		   	big_pic.className  = "big-pic";
// When the user clicks on the button, open the modal 
			 function showModal(n) {
		    modal.style.display = "block";
		   	big_pic.src = picPath[n-1];
		   	modal.appendChild(big_pic);
			bgModal.style.display = "block";

	}
// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
		    modal.style.display = "none";
			bgModal.style.display = "none";
		}
// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";
		        bgModal.style.display = "none";
		    }
		}

		bgModal.onclick = function(event){
			modal.style.display = "none";
			bgModal.style.display = "none";
		}