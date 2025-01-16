<?php include_once("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Panel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f9;
      color: #333;
    }

    .dashboard-title {
      font-size: 28px;
      margin: 20px;
      text-align: left;
    }

    .panel-container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
      margin: 20px;
    }

    .panel {
      background-color: #fff;
      border-radius: 8px;
      width: 200px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      position: relative;
      overflow: hidden;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .panel h6 {
      font-size: 20px;
      margin: 10px 0;
    }

    .panel .icon {
      font-size: 100px;
      position: absolute;
      top: 20px;
      right: 70px;
      opacity: 0.3;
    }

    .panel a {
      display: inline-block;
      margin-top: 15px;
      text-decoration: none;
      color: #fff;
      font-weight: bold;
    }

    .panel:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }

    .bg-info { background-color: #17a2b8;}
    .bg-success { background-color: #28a745;}
    .bg-warning { background-color: #ffc107;}
    .bg-danger { background-color: #dc3545;}
  </style>
</head>
<?php include_once("sidebar.php"); ?>
<body>
  <div class="content">
    <h1 class="dashboard-title">Login Panel</h1>
    <div class="panel-container">
      <div class="panel bg-info">
        <div class="icon"><i class="fas fa-user-md"></i></div>
        <h6>STUDENT</h6>
        <a href="student_login.php">Click Here To LOGIN <i class="fas fa-angle-double-right"></i></a>
      </div>
      <div class="panel bg-success">
        <div class="icon"><i class="fas fa-wheelchair"></i></div>
        <h6>ADMINISTRATIVE COORDINATOR</h6>
        <a href="adco_dashboard.php">Click Here To LOGIN <i class="fas fa-angle-double-right"></i></a>
      </div>
      <div class="panel bg-warning">
        <div class="icon"><i class="fas fa-handshake"></i></div>
        <h6>HOSTEL SUPER</h6>
        <a href="ao_login.php">Click Here To LOGIN <i class="fas fa-angle-double-right"></i></a>
      </div>
      <div class="panel bg-danger">
        <div class="icon"><i class="fas fa-file-alt"></i></div>
        <h6>PIC</h6>
        <a href="pic_login.php">Click Here To LOGIN <i class="fas fa-angle-double-right"></i></a>
      </div>
    </div>
  </div>
</body>
</html>
<?php include_once("footer.php");?>