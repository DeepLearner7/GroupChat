$('button#link').on('click',function(){

	var username = $('input#username').val();
	var password = $('input#password').val();

	if(username=="" || password=="")
	{
		alert("Enter details");
	}
	else
	{
		$.post('php/check.php',{id:username,pass: password},function (data){
					
					
					if(data=="window.open('chatBox.html','_self')"){

						//$("a#GoAhead").attr("href","chatBox.html?username="+username);
						window.open('chatBox.html','_self');


					}
					else{

						alert("Check enteries");

					}

					
				})
	}


})