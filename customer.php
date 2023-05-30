<?php
$servername="localhost";
$username= "root";
$password= "";
$database_name="Jikokomanagement";


//Database connection
$conn= new mysqli_connect($server_name,$username,$password,$JikokoManagement);
// now check connection
if(!$conn)
{
	die('Connection Failed :'.mysqli_connect_error());
}
if ($_SESSION['user']!=""&& $_SESSION['store']!="")

{
	
$Customer id = $_POST['CustomerId'];
$Customer FName = $_POST['Customer FName'];
$Customer LName = $_POST['Customer LName'];
$Customer Contact = $_POST['Customer Contact'];

	$sql_querry = "INSERT INTO customer_db( Customer id,Customer FName,Customer LName,Customer Contact) VALUES ('$Customer id', '$Customer FName', '$Customer LName', '$Customer Contact')";

		if (mysqli_querry($conn,$sql_querry)) {
			echo "New Details Entry inserted successfully !";
			
		}
		else
		{
			echo"Error:".$sql."".mysql_error($conn);
		}
		mysql_close($conn);
		}
	



?>

