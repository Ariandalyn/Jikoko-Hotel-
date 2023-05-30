<?php
require_once "db/config.php";
$errors = [];
$messages = [];

if (isset($_POST['signup'])) {
  $errors = [];
  $messages = [];

  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['psw'];


  $query = "SELECT * FROM users WHERE email LIKE '$email' LIMIT 1";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    $error = "Email already registered";
    array_push($errors, $error);
  } else {
    $query = "INSERT INTO users (email, username, password) VALUES ('$email','$username', '$password')";
    if ($conn->query($query)) {
      $message = "Registered successfulliy";
      array_push($messages, $message);
    } else {
      $error = "Registration failed: " . $conn->error;
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
  <title>Registration Page</title>
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="css/register.css">
</head>

<body>
  <div class="wrapper">



    <?php include_once('inc/header.php'); ?>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" style="border:1px solid #ccc">
      <title>Register/Sign up</title>
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>

      <?php
      if (count($errors) > 0) {
        echo "<div class='error'>";
        foreach ($errors as $error) {
          echo "<p>$error</p>";
        }
        echo "</div>";
      } else if (count($messages) > 0) {
        echo "<div class='message'>";
        foreach ($messages as $message) {
          echo "<p>$message</p>";
        }
        echo "</div>";
      }
      ?>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="username"><b>Username</b></label>
      <input type="username" placeholder=" Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>



      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" class="cancelbtn">Cancel</button>
        <button type="submit" name="signup" class="signup">Sign Up</button>
      </div>
  </div>
  </form>
</body>

</html>