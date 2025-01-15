<?php include_once("header.php");?>
<?php include_once("db_connection.php");?>
<?php include_once("sidebar.php");?>
<?php 
session_start();
  $pass=$_REQUEST['pass'];
  $name=$_REQUEST['std_name'];
  $mob=$_REQUEST['mob'];
  $dept=$_REQUEST['dept'];
  $year=$_REQUEST['year'];
  $address=$_REQUEST['address'];
 
	
	$sql = "insert into student (pass,std_name,mob,dept,year,address) 
VALUES  ('$pass','$name','$mob','$dept','$year','$address')";

$result=mysqli_query($conn,$sql);

if($result)	
{
  echo "New record created successfully";
  
  // $last_id = $conn->insert_id;
	// 	echo "welcome &nbsp".$last_id;
    
   
  //  $sql1="select * from staff_details where std_id='$last_id'";
  //  $result = $conn->query($sql1);


  // if ($result->num_rows > 0) 
  // {
  //   // output data of each row
  //   while($row = $result->fetch_assoc()) 
	// {
  //        echo "<br> id: ". $row["std_id"]."&nbsp name:".$row["name"]. "&nbsp password: ". $row["password"]."<br>";
  //   }
  //  } 
  
  // else 
  // {
  //   echo "0 results";
  
  
  // } 
  
} 
  
mysqli_close($conn);


?>
<?php include_once("footer.php");?>
