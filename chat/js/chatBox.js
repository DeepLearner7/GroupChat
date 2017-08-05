setInterval(Update,500);
$('button#Send').on('click',function(){

	var Message = $('textarea#message').val();

	if (Message!="") {

		$.post("php/click.php",{Message:Message},function(data){ 

			document.getElementById("message").value= "";
		})


	}

})


function Update() {
	
		function UpdateScroll() {
			
			var element = document.getElementById("SecondBox");
    		element.scrollTop = element.scrollHeight;
			
		}	



		$.post("php/update.php",{},function(data){
			
			document.getElementById("mess").innerHTML = data;
			UpdateScroll();
		})

		
}