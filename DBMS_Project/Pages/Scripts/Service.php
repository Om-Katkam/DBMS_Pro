<?php
$server_name="localhost:3307";
$username="root";
$password="";
$database_name="dbms_pro";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
    $cust_id = $_POST['cust_id'];
	$model_name = $_POST['model_name'];
	$color = $_POST['color'];
    $issue=$_POST['issue'];

	$sql_query = "INSERT INTO services (cust_id, model_name, color, issue)VALUES ('$cust_id', '$model_name', '$color','$issue');";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>