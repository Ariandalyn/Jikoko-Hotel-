<?php
$servername="localhost";
$username= "root";
$password= "";
$database_name="hotel_db";


//Database connection
$conn= new mysqli_connect($server_name,$username,$password,$hotel_db);
// now check connection
if(!$conn)
{
	die('Connection Failed :'.mysqli_connect_error());
}
if ($_SESSION['user']!=""&& $_SESSION['store']!="")

{
	
$Customer id = $_POST['CustomerId'];
$Customer FName = $_POST['Cust FName'];
$Customer LName = $_POST['Cust LName'];
$Customer Contact = $_POST['Cust Contact'];

	$sql_querry = "INSERT INTO customer_db( Customer id,Cust FName,Cust LName,Cust Contact) VALUES ('$Customer id', '$Cust FName', '$Cust LName', '$Cust Contact')";

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

