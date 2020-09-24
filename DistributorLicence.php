<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<table border="1" style="margin-top:30px;margin-left:50px;text-align:center">
<col width="200">
<col width="150">
  <tr>
  <th>Company name</th>
  <th>Licence</th>
  </tr>
  <?php
  include("connection.php");

   $sql="SELECT * FROM actors WHERE type_of_actor ='Distributor'";
   $result_set=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_array($result_set))
   {
    ?>
          
          <tr>
          <td><?php echo $row['company_name'] ?></td>
          <td><a style="width:100%;" class="btn btn-dark" href="docs/<?php echo $row['file_name'] ?>" target="container">view file</a></td>
          </td>
          </tr>
          
          <?php
   }


   
   mysqli_close($conn);
   ?>
  </table>


