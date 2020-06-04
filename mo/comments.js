document.getElementById("sendComment").addEventListener("click", sendComment);
var textArea = document.getElementById("textCreateComment");

function sendComment(){
	var text = textArea.value;
	if(text.length){
		var comment = document.createElement("div");
		comment.className = "comment";
		document.getElementById("commentsList").appendChild(comment);
		var date = new Date();
		var time = document.createElement("div");
		time.id = "time";
		time.innerHTML = date.getDate() + "." + date.getMonth() + "." + date.getFullYear() + "   " + date.getHours() + ":" + date.getMinutes();
		comment.appendChild(time);
		var textComment = document.createElement("div");
		textComment.id = "textComment";
		textComment.innerHTML = text;
		comment.appendChild(textComment);
		textArea.value = "";
	}
}
