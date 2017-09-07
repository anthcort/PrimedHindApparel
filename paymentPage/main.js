
$('#sendBtn').click(function(){
	var subject = "I want a primed buttholes tshirt";
	var body = document.getElementById("ta").value;
	console.log(body);
	window.open('mailto:acortese2015@gmail.com?subject='+subject+'&body='+body);
	
});