// var text = document.getElementById()
var text = document.getElementById("chatbox");
var chatcon = document.getElementById("chat-content");
var value;
function addtext(){
		// debugger;
		if(text.value!=""){
		value =text.value;
		text.value = "";
		var newReply = document.createElement('div');
		var newline = document.createElement("div");
		// newline.className = 'chat-reply';
		newline.style.padding = "100px";
		newReply.className = 'chat-reply';
		newReply.textContent = value;
		// newline.textContent  = "";
		// chatcon.writeln("");
		// chatcon.appendChild(newline);
		chatcon.appendChild(newline);
		
		chatcon.appendChild(newReply);
							}
}


