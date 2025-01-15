<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="stddashboard.css">
</head>
<?php include_once("header.php");?>
<?php include_once("sidebar.php");?>
<body>
    <div class="container">
        <!-- <div class="sidebar">
            <h2>Dashboard</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">Messages</a></li>
                <li><a href="#">Settings</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div> -->
        <div class="main-content">
            <!-- <header>
                <h1>Welcome, Student!</h1>
            </header> -->
            <main>
                <section class="announcements">
                    <h2>Announcements</h2>
                    <p>No new announcements.</p>
                </section>
                <section class="events">
                    <h2>Upcoming Events</h2>
                    <p>No upcoming events.</p>
                </section>
                <section class="grades">
                    <h2>Recent Grades</h2>
                    <p>No recent grades.</p>
                </section>
            </main>
            <!-- <footer>
                <p>&copy; 2023 Student Dashboard. All rights reserved.</p>
            </footer> -->
        </div>
    </div>
</body>
</html>
<?php include_once("footer.php");?>