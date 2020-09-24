<?php
include("connection.php");
session_start();
$var=$_POST["batchnum"];
$var1=$_SESSION["user_in"];
$sql="UPDATE shipment_manufacturer SET distr_approval=1 WHERE batch_number=$var";
mysqli_query($conn,$sql);
$sql_upd="UPDATE tracking SET status='Warehouse', distributor_email='$var1' WHERE batch_number=$var";
mysqli_query($conn,$sql_upd);
?>