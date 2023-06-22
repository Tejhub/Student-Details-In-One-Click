

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  padding: 30px;
}

td, th, tr {
  border: 1px solid black;
  text-align: left;
  padding: 30px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.back-button {
	padding: 15px 32px;
  	text-align: center;
	width: 100px;
	background: #27AE60;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
	
}
</style>
</head>
<body>
<button type="submit" class="back-button"  ><a href="adminPage.php" >BACK</a></button>
<h1><center>STUDENT DETAILS</center></h1>
<button type="submit" class="back-button"  ><a href="updateData.php?Update=<?php echo $usn; ?>" >UPDATE</a></button>
<?php

// public function searchStudentWithUSN($usn){
//     $stmt = $this->db->prepare("SELECT * FROM details WHERE usn LIKE ?");
//     $stmt->execute([$usn]);
//     return $stmt->fetchAll();
//}
$name = $_POST['name'];
$usn = $_POST['usn'];




$conn = mysqli_connect('localhost','root','','project');

$sql="SELECT * FROM `details`
WHERE usn='$usn' AND name='$name'";

$query = mysqli_query($conn,$sql);


echo "<table border='1', width='2'>
  
     <tr>
    
        <th>NAME</th>
        <th>FATHER NAME</th>
        <th>MOTHER NAME</th>
        <th>DATE OF BIRTH</th>
        <th>GENDER</th>
        <th>EMAIL</th>
        <th>STUDENT MOBILE</th>
        <th>PARENT MOBILE</th>
        <th>ADDRESS</th>

    </tr>
    <br>
    
    ";

    
    

    while($row=mysqli_fetch_array($query))
    {
    echo "<tr>";

    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['fname'] . "</td>";
    echo "<td>" . $row['mname'] . "</td>";
    echo "<td>" . $row['dob'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['studphone'] . "</td>";
    echo "<td>" . $row['parentphone'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
      
    echo "</tr>";
    
    
    echo "<hr size=3 color=grey>";

    echo "<br>";

echo "<table border='1', width='2'>


<br><br>
    <tr>
        <th>USN</th>
        <th>SSLC MARKS</th>
        <th>PUC/DIPLOMA MARKS</th>
        <th>SEM-1</th>
        <th>SEM-2</th>
        <th>SEM-3</th>
        <th>SEM-4</th>
        <th>SEM-5</th>
        <th>SEM-6</th>
        <th>SEM-7</th>
        <th>SEM-8</th>
    

    </tr>";

    echo "<tr>";

    echo "<td>" . $row['usn'] . "</td>";
    echo "<td>" . $row['sslcmarks'] . "</td>";
    echo "<td>" . $row['pumarks'] . "</td>";
    echo "<td>" . $row['one'] . "</td>";
    echo "<td>" . $row['two'] . "</td>";
    echo "<td>" . $row['three'] . "</td>";
    echo "<td>" . $row['four'] . "</td>";
    echo "<td>" . $row['five'] . "</td>";
    echo "<td>" . $row['six'] . "</td>";
    echo "<td>" . $row['seven'] . "</td>";
    echo "<td>" . $row['eight'] . "</td>";
      
    echo "</tr>";
    
    echo "<hr size=3 color=grey>";

    echo "<br><br>";

echo "<table border='1', width='2'>

    <tr>
        <th>ACHIEVEMNETS</th>
        <th>SKILLS</th>
        <th>EXTRA</th>
    

    </tr>";
    echo "<br><br>";
    echo "<hr size=3 color=grey>"; 
    echo "<br><br>";
    echo "<tr>";

    echo "<td>" . $row['achievement'] . "</td>";
    echo "<td>" . $row['skill'] . "</td>";
    echo "<td>" . $row['extra'] . "</td>";

    
      
    echo "</tr>";
    }
    
    

?>


<button type="submit" class="back-button"  ><a href="updateData.php?Update=<?php echo $usn; ?>" >UPDATE</a></button>

</body>
</html>

