<?php 
include("connection.php");
session_start();

 $email=$_POST["email"];
 $sql_sel= "SELECT * FROM actors WHERE email_id='".$_POST["email"]."' AND password_user='".$_POST["password"]."'";

   $log = mysqli_query($conn, $sql_sel);
   $check = mysqli_num_rows($log);
   if($check>0)
        {
            while($row = mysqli_fetch_assoc($log)) {
                $var=$row["type_of_actor"];
            }
            if ($var=="Manufacturer"){
                header('location:manufacturer.php');
                $_SESSION['user_in']=$email;
                $_SESSION['loggedin']=true;
            }
            elseif($var=="Distributor"){
                header('location:distributor.php');
                $_SESSION['user_in']=$email;
                $_SESSION['loggedin']=true;
            }
            else{
                header('location:Retailer.php');
                $_SESSION['user_in']=$email;
                $_SESSION['loggedin']=true;
            }

        }
        else
            {

                echo "<script>
            alert('login unsuccessfull');
            window.location='index.html';
       </script>";

              }

?>