// var text = document.getElementById()
var text = document.getElementById("chatbox");
var cur_pos =1;
var chatcon = document.getElementsByClassName("chat-content")[cur_pos-1];
var value;
var length;
var output = "";
function addtext(){
		
		chatcon = document.getElementsByClassName("chat-content")[cur_pos-1];
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
		if(length>45&&value.indexOf(" ")==-1){
			var row = length/30;
			for (i = 0; i < row; i++){
				if(row)
				output+= value.substr(i*30,30)+" ";
			}
			newReply.style.width = "45%";
			
			// newReply.style.height = "auto";
		}
		else if(length>45&&value.indexOf(" ")!=-1){
			newReply.style.width = "45%";
			output = value;
		}
		else output = value;
		newReply.textContent = output;
		output="";
		// newline.textContent  = "";
		// chatcon.writeln("");
		// chatcon.appendChild(newline);
		chatcon.appendChild(newline);
		chatcon.appendChild(newReply);
		chatcon.appendChild(newReply);
		$('.chat-content').scrollTop($('.chat-content')[cur_pos-1].scrollHeight);
	}
}

var friendPath = new Array(
	"../img/friend-pic/friend1.jpg",
	"../img/friend-pic/friend2.jpg",
	"../img/friend-pic/friend3.jpg",
	"../img/friend-pic/friend4.jpg",
	"../img/friend-pic/friend5.jpg",
	"../img/friend-pic/friend6.jpg",
	"../img/friend-pic/friend7.jpg",
	"../img/friend-pic/friend8.jpg",
	"../img/friend-pic/friend9.jpg",
	"../img/friend-pic/friend10.jpg",
	"../img/friend-pic/friend11.jpg",
	"../img/friend-pic/friend12.jpg"
);
var chatpic = document.getElementById("chat-pic");
var chatname = document.getElementById("chat-name");
var vp = document.getElementById("vp");
	chatpic.style.WebkitAnimation = "fadein 1s 1";
    chatpic.style.animation = "fadein 1s 1";
	chatname.style.WebkitAnimation = "fadein 1s 1";
    chatname.style.animation = "fadein 1s 1";
	vp.style.WebkitAnimation = "fadein 1s 1";
    vp.style.animation = "fadein 1s 1";

var chatpage = document.getElementById("chat-com");
function create_chat(){
	// debugger;
	var chat_show = document.createElement('div');
	var form = document.createElement('form');
	chat_show.className = 'chat-content';
	chat_show.appendChild(form);
	// chatcon.style.display = "none";
	chatpage.appendChild(chat_show);
}

for (i = 0; i < 2; i++){
	create_chat();
}
var chatArray = document.getElementsByClassName("chat-content");
for (i = 0; i < chatArray.length; i++){
	chatArray[i].style.display="none";
	chatArray[i].style.WebkitAnimation = "fadein 1s 1";
    chatArray[i].style.animation = "fadein 1s 1";
}
chatArray[0].style.display="block";
function chat(n,order,name){
	debugger;
	chatpic.style.display="none";
	chatname.style.display="none";
	vp.style.display="none";
	setTimeout(function(){ 
		chatpic.style.display="inline-block";
	chatname.style.display="inline-block";
	vp.style.display="inline-block";
	},100);
	chatpic.src = friendPath[order-1];
	chatname.textContent = name;
	for (i = 0; i < chatArray.length; i++){
	chatArray[i].style.display="none";
	}
	chatArray[n-1].style.display="block";
	cur_pos = n;
	
}

