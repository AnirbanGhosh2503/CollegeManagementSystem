<?php include_once("header.php");?>
<?php include_once("sidebar.php");?>

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
            /* margin-left: 250px; Adjust based on sidebar width */
        }

        .dashboard-title {
            font-size: 32px;
            margin-bottom: 20px;
            color: #007bff;
        }

        .dashboard-cards {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
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
            color: #007bff;
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