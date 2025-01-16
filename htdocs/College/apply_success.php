<?php session_start();?>
<?php include_once("header.php");?>
<?php include_once("db_connection.php");?>
<?php include_once("sidebar.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="sidebar.css"/>  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Fixed Sidebar</title>
  
  


</head>
<body>
  <div class="container">
    <div class="content">

    <?php 
  //$_SESSION['id_staff'];
  $dept=$_REQUEST['dept'];
  $year=$_REQUEST['year'];
//   $gender=$_REQUEST['gender'];
//   $mob=$_REQUEST['mob'];
//   $dept=$_REQUEST['dept'];
//   $year=$_REQUEST['year'];
//   $address=$_REQUEST['address'];
//   /*
//   $contact_no=$_REQUEST['hod_approve'];
//   $contact_no=$_REQUEST['ao'];
//   $contact_no=$_REQUEST['pic'];
//   $contact_no=$_REQUEST['acc_off'];
//  */ 
 

	$sql = "insert into application (dept,year) 
VALUES  ('$dept','$year')";

$result=mysqli_query($conn,$sql);

if($result)	
{
  echo "New record created successfully";

//   $last_id = $conn->insert_id;
//   echo "welcome &nbsp".$last_id;

/*
$sql1="select * from application where staff_id='$last_id'";
$result1 = $conn->query($sql1);


if ($result1->num_rows > 0) 
{
// output data of each row
while($row = $result1->fetch_assoc()) 
{
   echo "<br> Your Designation: ". $row["designation"]."<br>";
}
} 

else 
{
echo "0 results";


} 
*/
} 

mysqli_close($conn);


?>
	  
</div>
</body>
</html>
<?php include_once("footer.php");?>