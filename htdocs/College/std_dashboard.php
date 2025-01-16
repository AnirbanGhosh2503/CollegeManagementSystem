<?php include_once("header.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard - College Management System</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .content {
            padding: 20px;
            background-color: transparent;
            /* margin-left: 250px; Adjust based on sidebar width */
        }

        .dashboard-title {
            font-size: 64px;
            margin-bottom: 35px;
            color:  black;
        }

        .dashboard-cards {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
            margin-left: 70px;
        }

        .card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 200px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card h3 {
            margin-bottom: 10px;
            font-size: 24px;
            color:black;
        }

        .card p {
            margin-bottom: 15px;
            font-size: 16px;
            color: #666;
        }

        .card a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .card a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="content">
        <h1 class="dashboard-title">Student Dashboard</h1>
        <div class="dashboard-cards">
            <div class="card">
                <h3>My Courses</h3>
                <p>View and manage your enrolled courses.</p>
                <a href="courses.php">Go to Courses</a>
            </div>
            <div class="card">
                <h3>Grades</h3>
                <p>Check your grades and academic performance.</p>
                <a href="grades.php">View Grades</a>
            </div>
            <div class="card">
                <h3>Schedule</h3>
                <p>View your class schedule and upcoming events.</p>
                <a href="schedule.php">View Schedule</a>
            </div>
            <div class="card">
                <h3>Profile</h3>
                <p>Update your personal information and settings.</p>
                <a href="profile.php">Edit Profile</a>
            </div>
        </div>
    </div>
    <?php include_once("footer.php");?>
</body>
</html>
<!-- <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    /> -->
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="sidebar.css">
  <body>
    <div class="main_box">
      <input type="checkbox" id="check" />
      <div class="btn_one">
        <label for="check">
          <i class="fa-solid fa-bars"></i>
        </label>
      </div>

      <div class="sidebar_menu">
        <div class="logo">
          <a href="#">CMS</a>
        </div>

        <div class="btn_two">
          <label for="check" style="color: grey">
            <i class="fa-solid fa-xmark"></i>
          </label>
        </div>

        <div class="menu">
          <ul>
            <li>
              <i class="fa-solid fa-image"></i>
              <a href="hostapp.php">Apply for hostel</a>
            </li>
            <li>
              <i class="fa-solid fa-arrow-up-right-from-square"></i>
              <a href="#">Check Application status, Payment and Room</a>
            </li>
          </ul>
        </div>

        <div class="social_media">
          <ul>
            <a href="#"><i class="fa-brands fa-facebook"></i></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>