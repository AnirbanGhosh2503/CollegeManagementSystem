
<?php session_start();?>

<?php include_once("header.php");?>
<?php include_once("db_connection.php");?>
<?php include_once("sidebar.php");?>
<html>
<body>
<?php
    $stf_id=$_REQUEST['staff_id'];
	$password=$_REQUEST['pwd'];
	
	//echo $stf_id;
	$select="select * from student where std_id ='$stf_id' and pass='$password'";
	$fetch=mysqli_query($conn,$select);
	$Responce_count=mysqli_num_rows($fetch);
	
	$Result=mysqli_fetch_assoc($fetch);
	//echo "<pre>";
	// $name1=($Result['name']);
	//$staff_id=($Result['staff_id']);
	
	//echo $name1;
	

	
	//echo $Responce_count;
	//echo $select;
	//die();
	if($Responce_count>0){
		//  $_SESSION['id_staff']=$stf_id;
		//  $_SESSION['name']=$name1;
		
		header("Location:std_dashboard.php");
	} 
	else{
		header("Location:student_login.php");
	}

?>
</body>
<?php include_once("footer.php");?>
</html>
