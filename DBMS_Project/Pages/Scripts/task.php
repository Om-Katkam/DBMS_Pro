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
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $details = $_POST['Details'];
    $date = $_POST['w_date'];
    $whours = $_POST['Hours'];
    $emp_id = $_POST['emp_id'];
    // $task_code=['task_code'];
	 $sql_query = "INSERT INTO task ( emp_id, workhours, details, w_date, start_time, end_time)VALUES ('$emp_id','$whours', '$details', '$date','$start_time', '$end_time')";

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