<?php include_once("header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Panel</title>
  <!-- FontAwesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    /* General reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
      color: #333;
    }

    /* Dashboard heading */
    .dashboard-title {
      text-align: left;
      font-size: 28px;
      margin: 20px;
    }

    /* Panel container */
    .panel-container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
      margin: 20px;
    }

    /* Panel box styling */
    .panel {
      background-color: #fff;
      color: #fff;
      border-radius: 8px;
      width: 250px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      position: relative;
      overflow: hidden;
    }

    .panel h3 {
      font-size: 32px;
      margin-bottom: 5px;
    }

    .panel p {
      font-size: 18px;
    }

    .panel .icon {
      font-size: 50px;
      position: absolute;
      top: 20px;
      right: 20px;
      opacity: 0.3;
    }

    .panel a {
      display: inline-block;
      margin-top: 15px;
      text-decoration: none;
      color: #fff;
      font-weight: bold;
    }

    /* Colors for each panel */
    .bg-info {
      background-color: #17a2b8;
    }

    .bg-success {
      background-color: #28a745;
    }

    .bg-warning {
      background-color: #ffc107;
      color: #333;
    }

    .bg-danger {
      background-color: #dc3545;
    }

    /* Hover effect */
    .panel:hover {
      transform: translateY(-5px);
      transition: 0.3s;
    }
  </style>
</head>
<?php include_once("sidebar.php");?>
<body>
  <div class="content">

    <!-- Dashboard Title -->
    <h1 class="dashboard-title">LOgin Panel</h1>
  
    <!-- Dashboard Panels -->
    <div class="panel-container">
      <!-- Panel 1 -->
      <div class="panel bg-info">
        <div class="icon"><i class="fas fa-user-md"></i></div>
         <h3>STAFF </h3>
        <p></p>
        <a href="staff_regi.php">Click Here To LOGIN <i class="fas fa-angle-double-right"></i></a>
      </div>
  
      <!-- Panel 2 -->
      <div class="panel bg-success">
        <div class="icon"><i class="fas fa-wheelchair"></i></div>
      <h3>HOD</h3>
        <p> </p>
        <a href="hod_login.php">Click Here To LOGIN  <i class="fas fa-angle-double-right"></i></a>
      </div>
  
      <!-- Panel 3 -->
      <div class="panel bg-warning">
        <div class="icon"><i class="fas fa-handshake"></i></div>
        <h2>ADMINISTRATIVE OFFICER</h2>
        <p></p>
        <a href="ao_login.php">Click Here To LOGIN   <i class="fas fa-angle-double-right"></i></a>
      </div>
  
      <!-- Panel 4 -->
      <div class="panel bg-danger">
        <div class="icon"><i class="fas fa-file-alt"></i></div>
        <h3>PIC</h3>
        <p></p>
        <a href="pic_login.php">Click Here To LOGIN  <i class="fas fa-angle-double-right"></i></a>
      </div>
  
  
      <div class="panel bg-danger">
        <div class="icon"><i class="fas fa-file-alt"></i></div>
        <h3>ACCOUNT OFFICER</h3>
        <p></p>
        <a href="#">Click Here To LOGIN  <i class="fas fa-angle-double-right"></i></a>
      </div>
      
    </div>
  
    
  
  </div>
  </body>

</html>
<?php include_once("footer.php");?>