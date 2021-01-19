<?php

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "guvi"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);

      $email = $_POST['email'];
      $password = $_POST['pswd'];

    include 'guviRegistrationPage.php';
    $sql=mysqli_query($conn,"SELECT * FROM registration where Email='$email' and Password='$password'");

   // $sql=mysqli_query($conn,"SELECT * FROM registration where Email=?, [$email] and Password=?,[$password]");

    if($stmt = mysqli_prepare($con,$sql)){
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "ss",$email, $password);
      mysqli_stmt_execute($stmt);

      $result = $stmt->get_result();
      $user = $result->fetch_assoc();

      if($password == $user["password"]){
        echo ("Login is succefull");
      }
      else{
        echo ("Email or password is worng");
      }
      
    }
    $stmt->close(); 
?>
