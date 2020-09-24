<?php
include("connection.php");

$var=$_POST["consnum"];
echo $var;
   
$sql = "SELECT shipment_file_mf from shipment_manufacturer where cons_number=$var";
$result = mysqli_query($conn,$sql);
$rs = mysqli_fetch_assoc($result);
$content = $rs['shipment_file_mf'];
header('Content-Type: application/pdf');
header('Content-Length: '.strlen($content));
header('Content-Disposition: attachment; filename=myfile.pdf');
print $content;
mysqli_close($conn);
?>  