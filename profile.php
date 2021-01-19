<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guvi";

$conn = mysqli_connect($host, $user, $password,$dbname);

$email = $_POST['email'];
$pswd = $_POST['password'];

include 'guviRegistrationPage.php';
$sql="UPDATE registration SET name='$name', password='$pswd', WHERE email='$email'";

//$sql="UPDATE registration SET name='$name', password='$pswd', WHERE Email=?, [$email] and Password=?,[$pswd]");

if($stmt = mysqli_prepare($conn,$sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "ss",$email, $pswd);
    mysqli_stmt_execute($stmt);

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    echo ("Details updated successfully");
}
$stmt->close();
?>