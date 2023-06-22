<?php
// if (isset($_POST['submit'])) {
//     if (!empty($_POST['usn']) ) {
if (isset($_POST['submit'])) {

$usn=$_POST['usn'];
$name=$_POST['name'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$studphone=$_POST['studphone'];
$parentphone=$_POST['parentphone'];
$address=$_POST['address'];
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


$conn = mysqli_connect('localhost','root','','project');

// if(!$conn)
// {
//     echo ("Fail to Connect");
// }

$sql = "UPDATE details SET name='$name', fname='$fname',mname='$mname',dob='$dob',gender='$gender',email='$email',studphone='$studphone',parentphone='$parentphone', address='$address',sslcmarks='$sslcmarks',pumarks='$pumarks',one='$sem1',two='$sem2',three='$sem3',four='$sem4',five='$sem5',six='$sem6',seven='$sem7',eight='$sem8' 
WHERE usn='$usn'";

$query=mysqli_query($conn,$sql);

// if ($query) {

//     $_SESSION['SuccessMessage'] = " Data Updated Successfully";
//    Redirect_to("adminPage.php");

// }





if($query)
    {

        echo "<script>alert('Updated Successfully!');</script>";
        echo '<script>window.location = "adminPage.php"</script>';
    }
else
    {
        // echo '<script> window.location = "adminPage.php"> alert("Updated Successfully!")</script>';
        
        echo "<script>alert(' Successfully!');</script>";
        echo '<script>window.location = "adminPage.php"</script>';
        // echo '<script> alert("Fail to Update!")</script>';
        // echo '<script>window.location= "editStud.php"</script>';
      }


}



?>