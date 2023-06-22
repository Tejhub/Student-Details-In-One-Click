<?php

$usn = $_POST["usn"];
 $name = $_POST["name"];
$fname = $_POST["fname"];
 $mname = $_POST["mname"];
 $gender = $_POST["gender"];
// $email = $_POST["email"];
// $studphone = $_POST["studphone"];
// $parentphone = $_POST["parentphone"];
// $address = $_POST["address"];
// $usn = $_POST["usn"];
// $sslcmarks = $_POST["sslcmarks"];
// $pumarks = $_POST["pumarks"];
// $one = $_POST["one"];
// $two = $_POST["two"];
// $three = $_POST["three"];
// $four = $r_POSTow["four"];
// $five = $_POST["five"];
// $six = $_POST["six"];
// $seven = $_POST["seven"];
// $eight = $_POST["eight"];
// $achievement = $_POST["achievement"];
// $skill = $_POST["skill"];
// $extra = $_POST["extra"];


$servername = "localhost";
$username = "root";
$password = "";
$db = "project";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "update details set name='$name', fname='$fname', mname='$mname' where usn='$usn'";

if ($conn->query($sql) === TRUE) {
	echo "Records updated: ".$usn."-".$name."-".$fname."-".$mname;
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>