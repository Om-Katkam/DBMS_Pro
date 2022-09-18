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
if(isset($_POST['save'])){

    $query="delete from customer_info where cust_id = '$_POST[cust_id]';"; // Fetch all the data from the table employee_info
    $result=mysqli_query($conn,$query);
    }
    if (mysqli_query($conn, $query)) 
    {
       echo "Details deletion is successful !";
    } 
    else
    {
       echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>