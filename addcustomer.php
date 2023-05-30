<form action="addcustomer.php" method="post">

    <h1>Customer form Details</h1><br>
    <label for="email">email:</label>
    <input type="email" name="email" required><br><br>


    <label for="username">Username:</label>
    <input type="username" name="username"><br><br>

    <label for="password">password:</label>
    <input type="password" name="password" required><br><br>


    <button type="submit" name="submit">AddCustomer</button>

</form>


<?php

session_start();
require_once "db/config.php";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    //$mobilephone = $_POST['mobilephone'];
    // Insert the new customer into the database
    $query = "INSERT INTO users ( email, username, password) VALUES ( '$email', '$username', '$password')";
    $result = $conn->query($query);

    if ($result) {
        // Redirect to a success page
        header("Location: addcustomer.php");
        exit();
    } else {
        // Redirect to an error page
        header("Location: addcustomer_error.php");
        exit();
    }
}
?>