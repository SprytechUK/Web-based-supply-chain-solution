<?php

include("connection.php");

$var=$_POST["batch-num"];
   
$sql = "SELECT Pdf_File_Batch from details_of_batch where batch_number=$var";
$result = mysqli_query($conn,$sql);
$rs = mysqli_fetch_assoc($result);
$content = $rs['Pdf_File_Batch'];
header('Content-Type: application/pdf');
header('Content-Length: '.strlen($content));
header('Content-Disposition: attachment; filename=myfile.pdf');
print $content;
mysqli_close($conn);
?>  