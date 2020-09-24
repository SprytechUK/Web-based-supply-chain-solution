<?php 
		include("connection.php");
		$comp_nameerr=$emailerr=$comp_addresserr=$passworderr=$confirmpassworderr="";
	
		if(isset($_POST['submit']))
			{
				$sql_sel= "SELECT * FROM actors WHERE company_name='".$_POST["comp_name"]."' AND type_of_actor='".$_POST["option"]."'";
				$log = mysqli_query($conn, $sql_sel);
				$check = mysqli_num_rows($log);
				if($check>0){
					echo "<script>
            		alert('Company Already Registered');
					window.location='index.html';
					</script>";
				}
				else{
					$comp_name=$_POST['comp_name'];
					$email=$_POST['email'];
					$comp_address=$_POST['comp_address'];
					$password=$_POST['password'];
					$confirmpassword=$_POST['confirmpassword'];
					$option=$_POST['option'];
					if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
						echo "<script>
						alert('Invalid Email');
						window.location='index.html';
						</script>";
					}
					else{
						$sql_sel_email= "SELECT * FROM actors WHERE email_id='".$_POST["email"]."'";
						$log_email = mysqli_query($conn, $sql_sel_email);
						$check_email = mysqli_num_rows($log_email);
						if($check_email>0){
							echo "<script>
							alert('Email Already registered');
							window.location='index.html';
							</script>";
						}
						else{
							
							$file = rand(1000,100000).$_FILES['filename']['name'];
							$file_loc = $_FILES['filename']['tmp_name'];
							$folder="docs/";
					
							if(move_uploaded_file($file_loc,$folder.$file)){
								$sql="INSERT into actors (company_name,company_address,email_id,password_user,type_of_actor,file_name)
									VALUES ('$comp_name','$comp_address','$email','$password','$option','".$file."')"; 
								mysqli_query($conn,$sql);
								echo "<script>
								alert('You are registered. Kindly Log In to continue');
								window.location='index.html';
								</script>";
								
							}
							else{
								echo "<script>
								alert('error while uploading file');
								</script>";
							}
						}	
					}
				}
			}
		
			mysqli_close($conn);
		?>
		
	