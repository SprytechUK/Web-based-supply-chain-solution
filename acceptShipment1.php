<?php
include("connection.php");
session_start();
$var=$_POST["batchnum"];
$var1=$_SESSION["user_in"];
$sql="UPDATE shipment_distributor SET ret_approval=1 WHERE batch_number=$var";
mysqli_query($conn,$sql);
$sql_upd="UPDATE tracking SET status='In Store', retailer_email='$var1' WHERE batch_number=$var";
mysqli_query($conn,$sql_upd);
?>