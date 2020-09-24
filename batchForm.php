  <?php 
  session_start();
  include ("connection.php");
  $user=$_SESSION["user_in"];
if(isset($_POST['submit']))
{
  $sql_sel="SELECT * FROM details_of_batch WHERE batch_number='".$_POST["batch_num"]."'";
  $log= mysqli_query($conn,$sql_sel);
  $check=mysqli_num_rows($log);
  if($check>0){
  echo "<script>
    alert('Batch number already exist');
    window.location = 'batch.html';
  </script>";
}
else{
require ('fpdflibrary/fpdf.php');
$batch_num=$_POST["batch_num"];
$prname=$_POST["prname"];
$mfgdate=$_POST["mfgdate"];
$expdate=$_POST["expdate"];
$pckdate=$_POST["pckdate"];
$size=$_POST["size"];
$weight=$_POST["weight"];
date_default_timezone_set("Europe/London");
$timestamp = date('Y-m-d H:i:s');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->Cell(0,10,"Batch Details",1,1,'C');
$pdf->Cell(80,10,"Batch number: ",1,0);
$pdf->Cell(110,10,$batch_num,1,1);
$pdf->Cell(80,10,"Product name: ",1,0);
$pdf->Cell(110,10,$prname,1,1);
$pdf->Cell(80,10,"MfgDate: ",1,0);
$pdf->Cell(110,10,$mfgdate,1,1);
$pdf->Cell(80,10,"Epire date of batch: ",1,0);
$pdf->Cell(110,10,$expdate,1,1);
$pdf->Cell(80,10,"Package date of batch: ",1,0);
$pdf->Cell(110,10,$pckdate,1,1);
$pdf->Cell(80,10,"Size of batch: ",1,0);
$pdf->Cell(110,10,$size,1,1);
$pdf->Cell(80,10,"Weight of batch: ",1,0);
$pdf->Cell(110,10,$weight,1,1);
$pdf->Cell(80,10,"Submitted on: ",1,0);
$pdf->Cell(110,10,$timestamp,1,1);
$content = $pdf->Output("","S");
$data=addslashes($content);
$sql = "INSERT INTO details_of_batch VALUES('$batch_num','$prname','$mfgdate','$expdate','$pckdate','$size','$weight','$data','$timestamp')";
if (mysqli_query($conn, $sql)) {
  $sql_ins = "INSERT INTO tracking (batch_number,status,manufacturer_email) VALUES('$batch_num','Manufactured','$user')";
  if (mysqli_query($conn, $sql_ins)) {
      echo "New record created successfully";
  } else {
      echo "Error: " . $sql_ins . "<br>" . mysqli_error($conn);
  }


} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}
}
mysqli_close($conn);
?>

