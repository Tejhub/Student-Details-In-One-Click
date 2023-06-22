<?php

$name=$_POST['name'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$studphone=$_POST['studphone'];
$parentphone=$_POST['parentphone'];
$address=$_POST['address'];
$usn=$_POST['usn'];
$sslcmarks=$_POST['sslcmarks'];
$pumarks=$_POST['pumarks'];
$sem1=$_POST['one'];
$sem2=$_POST['two'];
$sem3=$_POST['three'];
$sem4=$_POST['four'];
$sem5=$_POST['five'];
$sem6=$_POST['six'];
$sem7=$_POST['seven'];
$sem8=$_POST['eight'];
$achievements=$_POST['achievement'];
$skills=$_POST['skill'];
$extra=$_POST['extra'];


$conn = mysqli_connect('localhost','root','','project');

if(!$conn)
{
    echo ("Fail to Connect");
}

$sql ="INSERT INTO details(`name`,`fname`,`mname`,`dob`,`gender`,`email`,`studphone`,`parentphone`,`address`,`usn`,`sslcmarks`,`pumarks`,`one`,`two`,`three`,`four`,`five`,`six`,`seven`,`eight`,`achievement`,`skill`,`extra`)VALUES('$name','$fname','$mname','$dob','$gender','$email','$studphone','$parentphone','$address','$usn','$sslcmarks','$pumarks','$sem1','$sem2','$sem3','$sem4','$sem5','$sem6','$sem7','$sem8','$achievements','$skills','$extra')";

$query=mysqli_query($conn,$sql);


// if(!$query)
// {
//      echo mysqli_error($conn);
//      die('Fail to insert');
  
// }

if($query)
    {

        echo '<script>window.location = "adminPage.php"</script>';
    }
else
    {
        echo '<script type="text/javascript"> alert("Fail to Insert!")</script>';
    }

?>