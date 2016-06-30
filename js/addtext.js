// var text = document.getElementById()
var text = document.getElementById("chatbox");
var chatcon = document.getElementById("chat-content");
var value;
var length;
var output;
function addtext(){
		// debugger;
		if(text.value!=""){
		value =text.value;
		length = text.value.length;
		text.value = "";
		
		var newReply = document.createElement('div');
		var newline = document.createElement("div");
		var nl = document.createElement("br");
		// newline.className = 'chat-reply';
		// newline.className = 'chat-reply';
		newReply.className = 'chat-reply';
		if(length>45){
			var row = (int)length/45;
			for (i = 0; i < row; i++){
				output+= value.substr(i*45,45)+" ";
			}
			newReply.style.width = "45%";
			
			// newReply.style.height = "auto";
		}
		else output = value;
		newReply.textContent = output;
		// newline.textContent  = "";
		// chatcon.writeln("");
		// chatcon.appendChild(newline);
		chatcon.appendChild(newline);
		
		chatcon.appendChild(newReply);
		$("html, body").animate({ scrollTop: $(document).height() }, "slow");
							}
}


