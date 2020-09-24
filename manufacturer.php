<!doctype html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="ManufView.css">
    <title>Manufacturer</title>
	<script>
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 10;
	obj.style.width = obj.contentWindow.document.body.scrollWidth + 10;
  }
</script>


</head>




<body>
	<?php include ("check.php");?>
	
  <div class="container-fluid">
		  <div class="row">
			<div id="pharmaTitle" class="col-sm-1">
				<div class="row-mx-auto" id="mobile">
					 PharmaChain
				</div>
				<div class="row-mx-auto" id="desktop" style="padding-top:50px;">
					 P  
				</div>
				<div class="row-mx-auto" id="desktop">
					H
				</div>
				<div class="row-mx-auto" id="desktop">
					 A
				</div>
				<div class="row-mx-auto" id="desktop">
					 R
				</div>
				<div class="row-mx-auto" id="desktop">
					 M
				</div>
				<div class="row-mx-auto" id="desktop">
					 A
				</div>
				<div class="row-mx-auto" id="desktop">
					 C
				</div>
				<div class="row-mx-auto" id="desktop">
					 H
				</div>
				<div class="row-mx-auto" id="desktop">
					 A
				</div>
				<div class="row-mx-auto" id="desktop">
					 I
				</div>
				<div class="row-mx-auto" id="desktop">
					 N
				</div>
			</div>
		<div id="BlockSupplyChain" class="col-sm-2" >

      <div class="row">
        <div id="TitleBlockSupply" class="col-md-12"style="padding-top:15px;">
        Supply Chain
      </div>
      </div>

      <div class="row">
 			<div id="actorsactive" class="col-sm-12">
            <figure><img class="imgactive" src="manRPB.svg">
              <figcaption style="text-align:center">Manufacturer</figcaption>
            </figure>
        </div>
			</div>


      <div class="row">
        <div id="actors" class="col-sm-12">
            <figure><img class="img" src="distri.svg"><figcaption style="text-align:center">Distributor</figcaption></figure></div>
      </div>

      <div class="row">
        <div id="actors" class="col-sm-12"><figure><img class="img" src="pharmacy.svg"><figcaption style="text-align:center">Pharmacy</figcaption></figure></div>
      </div>

      <div class="row">
        <div id="actors" class="col-sm-12"><figure><img class="img" src="consum.svg"><figcaption style="text-align:center">customer</figcaption></figure></div>
      </div>
    </div>





    <div class="col-sm-9">

				<div class="row">
					<div id="Main" class="col-sm-12">


				<div class="row" style="background-color:black;">
								<nav class="navbar navbar-expand-lg navbar-dark bg-black" style="color:white;">
	  						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
	    					<span class="navbar-toggler-icon" style="color:#fff;font-size:28px;">
									<i class="fas fa-navicon" ></i>
								</span>
	  						</button>
	  					<div class="collapse navbar-collapse" id="navbarText">
	    			<ul class="navbar-nav mr-auto">
							<li class="nav-item active">
								<button class="btn btn-black dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white;">
															Documents
																	</button>
																	<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
																		<a class="dropdown-item" href="ManufacturerLicence.php" target="container">Manufacturer License</a>
																		<a class="dropdown-item" href="DistributorLicence.php" target="container">Distributor License</a>
																		<a class="dropdown-item" href="RetailerLicence.php" target="container">Pharmacy License</a>
																		<a class="dropdown-item" href="DisplayBatchDetails.php" target="container">Batch Details</a>
																		<a class="dropdown-item" href="DisplayShipmentMF.php" target="container">Shipment Details</a>
																	</div>
							</li>
	      	<li class="nav-item active">
	        <a class="nav-link" href="batch.html" target="container" style="padding-left:15px;">Add New Batch</a>
	      	</li>
	      	<li class="nav-item active">
	        <a class="nav-link" href="shipmentToDistributor.html" target="container" style="padding-left:15px;">Add New Shipment</a>
			  </li>
			  
	      	<li class="nav-item active">
	        <a  class="nav-link" href="pharmaTrack.html"  style="padding-left:15px;">Track</a>
	      	</li>

	    	</ul>

	  			</div>
					
							<p id="paddinForTracklink" style="padding-top:15px; padding-right:15px; padding-left:220px;">Manufacturer View</p>
							<form action="logout.php" method="POST"><button class="btn btn-primary" type="submit">Log out</button></form>
							
					</nav>
				</div>



							<div class="row" style="background-color: white">
								<div class="col-sm-8">
								<div class="embed-responsive embed-responsive-1by1">
									<iframe class="embed-responsive-item" name="container" scrolling="no" seamless="seamless" onload="resizeIframe(this)" allowfullscreen ></iframe>
								</div>
								</div>

								<div class="col-sm-4" style="display: none">
									<div class="row">
										<div class="col-sm-12 labels" >
											<button type="button" class="btn btn-outline-success lab">Manufacturer<img class="imgtick"src="https://img.icons8.com/nolan/64/000000/checked-2.png"></button>
											<p>Approved 27August.</p>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12 labels">
											<button type="button" class="btn btn-outline-danger lab">Quality Check</button>
											<p><p>Pending...</p></p>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12 labels">
												<button type="button" class="btn btn-outline-danger lab">Distributor</button>
												<p>Pending...</p>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-12 labels">
											<button type="button" class="btn btn-outline-danger lab">Retailer</button>
											<p>Pending...</p>
										</div>
									</div>
								</div>


						</div>

						</div>
				</div>
    </div>
  </div>




  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
