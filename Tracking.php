<!doctype html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<title>track</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/CSS" href="TrackingView.css"/>
</head>
<body>
	
<?php
include ('connection.php');
$manufacturer=$distributor=$retailer=$manufname=$manufaddress=$distriname=$distriaddress=$retname=$retaddress=$batchnum="";
if(isset($_POST['submit'])){
	$sql_sel="SELECT * FROM tracking WHERE batch_number='".$_POST["batch_num"]."'";
    $log= mysqli_query($conn,$sql_sel);
    $check=mysqli_num_rows($log);
    if($check>0){
		while($row=mysqli_fetch_array($log)){
			$batchnum=$row["batch_number"];
			$status=$row["status"];
			$manuf=$row["manufacturer_email"];
			$distr=$row["distributor_email"];
			$retai=$row["retailer_email"];
		}

		$sql_sel1="SELECT * FROM actors WHERE email_id='$manuf'";
    	$log1= mysqli_query($conn,$sql_sel1);
		while($row1=mysqli_fetch_array($log1)){
			$manufname=$row1["company_name"];
			$manufaddress=$row1["company_address"];
		}
		 
		$sql_sel2="SELECT * FROM actors WHERE email_id='$distr'";
    	$log2= mysqli_query($conn,$sql_sel2);
		while($row2=mysqli_fetch_array($log2)){
			$distriname=$row2["company_name"];
			$distriaddress=$row2["company_address"];
		}

		$sql_sel3="SELECT * FROM actors WHERE email_id='$retai'";
    	$log3= mysqli_query($conn,$sql_sel3);
		while($row3=mysqli_fetch_array($log3)){
			$retname=$row3["company_name"];
			$retaddress=$row3["company_address"];
		}

		switch ($status){
			case "Manufactured":
				$manufacturer="Manufactured By";
				break;

			case "Dispatched to Distributor":
				$manufacturer="Manufactured By";
				break;
				
			case "Warehouse":
				$manufacturer="Manufactured By";
				$distributor="Distributed By";
				break;
				
			case "Dispatched to Retailer":
				$manufacturer="Manufactured By";
				$distributor="Distributed By";
				break;

			case "In Store":
				$manufacturer="Manufactured By";
				$distributor="Distributed By";
				$retailer="Retailer";
				break;

		}
	}
	else{
		echo "<script>
		alert('Batch number does not exist');
		window.location = 'pharmaTrack.html';
	  </script>";
	}
}
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-6">
	
		</div>
		<div class="col-sm-6">
			<div class="row">
				<div class="col-sm-12">
					<?php echo $batchnum ?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<span> <?php echo $manufacturer ?></span>
					<?php echo $manufname ?><br>
					<?php echo $manufaddress?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
				<span> <?php echo $distributor ?></span>
					<?php echo $distriname?><br>
					<?php echo $distriaddress?>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
				<span> <?php echo $retailer ?></span>
					<?php echo $retname?><br>
					<?php echo $retaddress?>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
