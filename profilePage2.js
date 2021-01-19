$('#ed').on('click',function(){
    console.log("ProfilePage2");
    var email = $("#email").val(); 
    var name = $("#name").val(); 
    var password = $("#pwd").val(); 
    let data = {
        name : name,
        email : email,
        password : password
    }
    $.ajax({
        type: "POST",
        url: "profilePage.php",
        data: data,
        success: function (response) {
            console.log(response);
        }
      });
}); 