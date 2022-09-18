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
    $emp_id = $_POST['emp_id'];
	$emp_name = $_POST['emp_name'];
	$ephno = $_POST['ephno'];
    $eaddress=$_POST['eaddress'];
	$eemail_id = $_POST['eemail_id'];
    $pos = $_POST['position'];
    $sal = $_POST['salary'];

	 $sql_query = "INSERT INTO employee_info (emp_id, enmp_name, ephno, eaddress, eemail_id, position, salary)VALUES ('$emp_id','$emp_name','$ephno','$eaddress', '$eemail_id', '$pos', '$sal')";

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