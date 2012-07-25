$(document).ready(function() {
	$("#submitNewPass").on('click', function() {
		var pass = $("#newPass").val().trim();
		var url = $("#submitURL").val();
		var userID = $("#userID").val();
		var userEmail = $("#userEmail").val();
		$.post(url, {setpassword: 1, userID: userID, password: pass, userEmail: userEmail}, function(data) {
			if(data.status == "success") {
				$.post(url, {checkauth: 1, email: data.email, password: data.password}, function(data) {
					if (data.status == "success") {
						window.location = data.forward;
					} else {

					}
				},"json");
			}  else {

			}
		},"json");
	});
});