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

	$sql_query = "update employee_info set enmp_name ='$_POST[emp_name]', ephno='$_POST[ephno]', eaddress='$_POST[eaddress]', eemail_id='$_POST[eemail_id]', position='$_POST[position]', salary ='$_POST[salary]' where emp_id= '$emp_id'";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry updated successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>