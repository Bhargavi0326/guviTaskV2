$(document).ready(function() {
    let Userdata = localStorage.getItem("sessionData");
    if(Userdata)
    {
        let data = JSON.parse(Userdata);
        data = data[0]
        $("#name").val(data.name); 
        $("#email").val(data.email);
        $("#pwd").val(data.password);
 
    } 
    else
    {
        alert("Please Login");
        window.location = 'guviLoginForm.html'
    }
 
 });