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
	$m_name = $_POST['model_name'];
	$e_id = $_POST['emp_id'];
	$e_name = $_POST['emp_name'];
	$e_address = $_POST['address'];
	$specif = $_POST['specif'];
	$type = $_POST['Type'];

	 $sql_query = "INSERT INTO parts (model_name, emp_id, emp_name, e_address, specif, ptype)VALUES ('$m_name','$e_id','$e_name','$e_address', '$specif', '$type')";

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