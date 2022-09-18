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
	$cust_name = $_POST['cust_name'];
	$cphno = $_POST['cphno'];
    $caddress=$_POST['caddress'];
	$cemail_id = $_POST['cemail_id'];

	 $sql_query = "INSERT INTO customer_info (cust_id, cust_name, cphno, caddress, cemail_id)VALUES ('$cust_id','$cust_name','$cphno','$caddress', '$cemail_id')";

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