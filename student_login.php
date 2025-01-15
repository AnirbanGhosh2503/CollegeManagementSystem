<?php include_once("header.php");?>
<?php include_once("db_connection.php");?>
<?php include_once("sidebar.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Panel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    /* Basic Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color:red;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    /* Login Card */
    .login-panel {
      background: #fff;
      width: 350px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      padding: 20px;
      text-align: center;
    }

    .login-panel h2 {
      margin-bottom: 20px;
      font-size: 24px;
      color: #333;
    }

    .login-panel .icon {
      font-size: 60px;
      color: #04AA6D;
      margin-bottom: 10px;
    }

    .login-panel form {
      display: flex;
      flex-direction: column;
    }

    .login-panel input[type="text"],
    .login-panel input[type="password"] {
      margin: 10px 0;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
      outline: none;
    }

    .login-panel button {
      background: #04AA6D;
      color: #fff;
      font-size: 16px;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
      transition: background 0.3s;
    }

    .login-panel button:hover {
      background: #03965c;
    }

    .login-panel a {
      display: block;
      margin-top: 15px;
      font-size: 14px;
      color: #04AA6D;
      text-decoration: none;
      transition: color 0.3s;
    }

    .login-panel a:hover {
      color: #03965c;
    }
  </style>
</head>
<body>
  <div class="login-panel">
    <div class="icon">
      <i class="fas fa-user-lock"></i>
    </div>
    <h2>STAFF Login </h2>
    <form action="student_login_success.php" method="post">
      <input type="text" name="staff_id" placeholder="Id" required>
      <input type="password" name="pwd" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
    <a href="#">Forgot Password?</a>
  </div>
</body>
</html>

<?php include_once("footer.php");?>
