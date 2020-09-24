<?php 
include("connection.php");
if(isset($_POST['submit']))
{
    $sql_sel="SELECT * FROM shipment_manufacturer WHERE batch_number='".$_POST["batch_num"]."'";
    $log= mysqli_query($conn,$sql_sel);
    $check=mysqli_num_rows($log);
    if($check>0){
    echo "<script>
      alert('Batch number already shipped');
      window.location = 'shipmentToDistributor.html';
    </script>";
  }
  else{
  $sql_sel="SELECT * FROM details_of_batch WHERE batch_number='".$_POST["batch_num"]."'";
  $log= mysqli_query($conn,$sql_sel);
  $check=mysqli_num_rows($log);
  if($check>0){

    $sql_sel_actor= "SELECT * FROM actors WHERE company_name = '".$_POST["disname"]."'";
    $log_actor = mysqli_query($conn, $sql_sel_actor);
    $check_actor = mysqli_num_rows($log_actor);
    if($check_actor>0){

require ('fpdflibrary/fpdf.php');
$batch_num=$_POST["batch_num"];
$consnumber=$_POST["consnumber"];
$prname=$_POST["prname"];
$packagesize=$_POST["packagesize"];
$disname=$_POST["disname"];
$trname=$_POST["trname"];
$vrname=$_POST["vrname"];
$datedispatch=$_POST["datedispatch"];
date_default_timezone_set("Europe/London");
$timestamp = date('Y-m-d H:i:s');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->Cell(0,10,"Shipment Details",1,1,'C');
$pdf->Cell(80,10,"Batch number: ",1,0);
$pdf->Cell(110,10,$batch_num,1,1);
$pdf->Cell(80,10,"Consignment number: ",1,0);
$pdf->Cell(110,10,$consnumber,1,1);
$pdf->Cell(80,10,"Product name: ",1,0);
$pdf->Cell(110,10,$prname,1,1);
$pdf->Cell(80,10,"Package size: ",1,0);
$pdf->Cell(110,10,$packagesize,1,1);
$pdf->Cell(80,10,"Distributor name: ",1,0);
$pdf->Cell(110,10,$disname,1,1);
$pdf->Cell(80,10,"Transporter name: ",1,0);
$pdf->Cell(110,10,$trname,1,1);
$pdf->Cell(80,10,"Vehicle reg number: ",1,0);
$pdf->Cell(110,10,$vrname,1,1);
$pdf->Cell(80,10,"Date of dispatch: ",1,0);
$pdf->Cell(110,10,$datedispatch,1,1);
$pdf->Cell(80,10,"Submitted on: ",1,0);
$pdf->Cell(110,10,$timestamp,1,1);
$content = $pdf->Output("","S");
$data=addslashes($content);


$sql = "INSERT INTO shipment_manufacturer (cons_number,product_name,pack_size,distrib_name,
transp_name, vehicle_num,date_dispatch,shipment_file_mf, batch_number,timestamp)
VALUES('$consnumber','$prname','$packagesize','$disname','$trname','$vrname','$datedispatch','$data','$batch_num','$timestamp')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql_upd="UPDATE tracking SET status='Dispatched to Distributor' WHERE batch_number=$batch_num";
mysqli_query($conn,$sql_upd);
    }
    else{
        echo "<script>
        alert('There is no Distributor registered');
        window.location='shipmentToDistributor.html';
        </script>";
    
    }
}
else{
    echo"<script>
    alert('Batch number does not exist');
    window.location= 'shipmentToDistributor.html';
    </script>";
}
  }
}
mysqli_close($conn);
?>

