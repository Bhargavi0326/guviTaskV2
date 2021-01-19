$(document).ready(function() {

$("#btnsignup").click(function() {
    console.log("Submit button is clicked");

    var fname = $("#fname").val();
    var lname = $("#lname").val();
    var email = $("#email").val();
    var password = $("#password").val();
    

    $.ajax({
        type: "POST",
        url: "guviRegistrationPage.php",
        data: {
            fname: fname,
            lname: lname,
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
    
})});




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
