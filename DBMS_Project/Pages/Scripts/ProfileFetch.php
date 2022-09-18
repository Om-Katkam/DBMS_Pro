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

    $emp_id=$_POST['emp_id'];
    $query="select * from employee_info where emp_id = '$emp_id';"; // Fetch all the data from the table employee_info
    $result=mysqli_query($conn,$query);
    while($singleRow = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $singleRow['enmp_name']?></td>
            <td><?php echo $singleRow['emp_id']?></td>
            <td><?php echo $singleRow['eemail_id']?></td>
            <td><?php echo $singleRow['position']?></td>
            <td><?php echo $singleRow['salary']?></td>
            <td><?php echo $singleRow['eaddress']?></td>
            <td><?php echo $singleRow['ephno']?></td>

        </tr>
        <?php
    }
    
}
?>