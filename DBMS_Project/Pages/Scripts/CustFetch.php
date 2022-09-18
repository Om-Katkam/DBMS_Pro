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

    // $cust_id = $_POST['cust_id'];
    $query="select * from customer_info where cust_id = $_POST[cust_id];"; // Fetch all the data from the table customer_info
    $result=mysqli_query($conn,$query);
    while($singleRow = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?php echo $singleRow['cust_name']?></td>
            <td><?php echo $singleRow['cust_id']?></td>
            <td><?php echo $singleRow['cphno']?></td>
            <td><?php echo $singleRow['caddress']?></td>
            <td><?php echo $singleRow['cemail_id']?></td>
        </tr>
        <?php
    }
    
}
?>