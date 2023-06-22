<?php
session_start();
/**
 * Uncomment to see all warnings and errors 
 * DEBUGGING PURPOSES ONLY
 */
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
//include 'dbconnect.php';
$conn=mysqli_connect('localhost','root','','project');
/**
 * getting phone number and password from the request.
 */
$username = $_POST['username'];
$password = $_POST['password'];


/**
 * checking if the user exists or not.
 */
$checkUserStatement = ("SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'");
$checkUserQuery = mysqli_query($conn, $checkUserStatement);
/**
 * If the user exists then send a success response with status as 1 and the path to 
 * redirect based on his role or else throw an error to the user
 */
if(mysqli_num_rows($checkUserQuery) > 0){
  while($row = mysqli_fetch_assoc($checkUserQuery)){
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
  }
  echo '<script>window.location = "adminPage.php"</script>';
}else{
  echo "<script>alert('Incorrect Username Or Password');</script>";
  echo '<script>window.location = "home.php"</script>';
}

?>