<?php
ob_start();
session_start();

 include_once("header.php");
 include_once("db_connection.php");
 include_once("sidebar.php");

 if(isset($_REQUEST["save"])){
	
	$pass=$_REQUEST['pass'];
  $name=$_REQUEST['std_name'];
  $mob=$_REQUEST['mob'];
  $dept=$_REQUEST['dept'];
  $year=$_REQUEST['year'];
  $address=$_REQUEST['address'];
 
	
	$sql = "insert into staff_details (pass,std_name,mob,dept,year,address) 
VALUES  ('$pass','$name','$mob','$dept','$year','$address')";




//die();

 if(mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error ";
}

mysqli_close($conn);

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <style>
    /* General reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color:pink;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    /* Container for the form */
    .registration-container {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      width: 400px;
      padding: 30px;
    }

    .registration-container h2 {
      text-align: center;
      margin-bottom: 20px;
      font-size: 24px;
      color: #333;
    }

    /* Input fields and labels */
    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-size: 14px;
      color: #555;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
      outline: none;
    }

    .form-group input:focus {
      border-color: #04AA6D;
    }

    /* Submit button */
    .btn {
      width: 100%;
      background-color: #04AA6D;
      color: white;
      border: none;
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .btn:hover {
      background-color: #03965c;
    }

    /* Footer text */
    .footer-text {
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
      color: #666;
    }

    .footer-text a {
      color: #04AA6D;
      text-decoration: none;
    }

    .footer-text a:hover {
      text-decoration: underline;
    }

    /* Responsive Design */
    @media screen and (max-width: 480px) {
      .registration-container {
        width: 100%;
        margin: 10px;
        padding: 20px;
      }
    }
  </style>
</head>
<body>
  <!-- Registration Form Container -->
  <div class="registration-container">
    <h2>Register</h2>
    <form action="staff_reg_success.php" method="post">
      <!-- Full Name -->
      <div class="form-group">
        <label for="fullname"> password</label>
        <input type="text" id="pass" name="pass" placeholder="Enter your password" required>
      </div>
      <div class="form-group">
        <label for="fullname">name </label>
        <input type="text" id="std_name" name="std_name" placeholder="Enter your  name" required>
      </div>

      <div class="form-group">
        <label for="">mob</label>
        <input type="text" id="mob" name="mob" placeholder="Enter your mob" required>
      </div>

      <div class="form-group">
        <label for="dept">dept</label>
        <input type="text" id="dept" name="dept" placeholder="Enter your dept" required>
      </div>

      <div class="form-group">
        <label for="year">year</label>
        <input type="number" id="year" name="year" placeholder="Enter your year" required>
      </div>

      <div class="form-group">
        <label for="address">address</label>
        <input type="address" id="address" name="address" placeholder="Enter your address" required>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="btn">Register</button>
    </form>

    <!-- Footer Text -->
    <div class="footer-text">
      Already have an account? <a href="#">Login here</a>
    </div>
  </div>
</body>
</html>

 
  
  
  

<?php include_once("footer.php");?>