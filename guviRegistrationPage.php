<?php
var_dump($_POST);
$str = file_get_contents('guviRegistrationJSON.json');
$json= json_encode($_POST);
$newjson = file_put_contents('guviRegistrationJSON.json',$json);

echo ($json);

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "guvi"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
    
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      // Prepare an insert statement
      $query = "INSERT INTO registration(fname,lname,email,password) VALUES(?,?,?,?)";

      if($stmt = mysqli_prepare($con,$query)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $email, $password);
      mysqli_stmt_execute($stmt);
      echo "Registration completed successfully.";
      }
    

      $run = mysqli_query($con,$query) or die(mysqli_connect_error());

    
?>