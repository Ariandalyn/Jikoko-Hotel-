<form action="logout.php" method="post">

    <button type="submit" name="logout">logout</button>
</form>

<?php
session_start();


$_SESSION = array();


session_destroy();


header("Location: login.php");
exit();
?>