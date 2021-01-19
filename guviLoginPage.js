    $(document).ready(function() {

		$("#submit").click(function() {

			var email = $("#email").val();
			var password = $("#pswd").val();

			if(email==''||password=='') {
				alert("Please fill all fields.");
				return false;
			}

			$.ajax({
				type: "POST",
				url: "session.php",
				data: {
					email: email,
					password: password
				},
				cache: false,
				success: function(data) {
					alert(data);
				},
				error: function(xhr, status, error) {
					console.error(xhr);
				}
			});
			
		});

	});


  function email(str) {
  if (str.length == 0) {
    document.getElementById("email").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("email").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "session.php?q=" + str, true);
    xmlhttp.send();
  }
}
