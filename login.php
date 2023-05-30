<?php
session_start();
require_once "db/config.php";
$errors = [];
$messages = [];

if (isset($_POST['login'])) {
  $errors = [];
  $messages = [];

  $username = $_POST['uname'];
  $password = $_POST['psw'];

  $query = "SELECT * FROM users WHERE username LIKE '$username' LIMIT 1";
  $result = $conn->query($query);

  if ($result->num_rows == 0) {
    $error = "User not found go to signup page to create an account";
    array_push($errors, $error);
  } else {
    $row = $result->fetch_assoc();
    if ($password === $row['password']) {
      $message = "Logged in as " . $row['user_type'];
      array_push($messages, $message);

      // Start a session and store the logged in user's information
      $_SESSION['user_id'] = $row['user_id'];
      $_SESSION['user_type'] = $row['user_type'];
      $_SESSIN['username'] =

        // Redirect to a new page
        header("Location: index.php");
      exit();
    } else {
      $error = "Wrong password";
      array_push($errors, $error);
    }
  }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/global.css">
</head>

<body>
  <div class="wrapper">
    <?php include_once('inc/header.php'); ?>

    <div class="form-container">

      <?php if (count($errors) > 0): ?>
        <div class="alerts alert-error">
          <?php foreach ($errors as $error): ?>
            <p class="error">
              <?php echo $error ?>
            </p>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <?php if (count($messages) > 0): ?>
        <div class="alerts alert-success">
          <?php foreach ($messages as $message): ?>
            <p class="message">
              <?php echo $message ?>
            </p>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>




      <div class="user-image"></div>
      <form action="login.php" method="post">

        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit" name="login">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </form>
    </div>
  </div>
</body>

</html> 