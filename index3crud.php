<?php
        require_once('config/db.php');

   


   ?>
   

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teacher Record</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  
  <div class="container">
    <h1>Record Display</h1>
    <button class="btn btn-primary my-5"><a href="index3.php" class="text-light">Add Data</a></button>
    <table class="table table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">SNO</th>
      <th scope="col">Teacher Id</th>
      <th scope="col">School Id</th>
      <th scope="col">Teacher Name</th>
      <th scope="col">Contact No</th>
      <th scope="col">Other Information</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php

  $query = "select * from `teacher`";
  $result = mysqli_query($con,$query);


    if($result){
      while ($row=mysqli_fetch_assoc($result)){
        $sno=$row['sno'];
        $t_id=$row['t_id'];
        $s_id=$row['s_id'];
        $tname=$row['tname'];
        $phone=$row['phone'];
        $other=$row['other'];
        echo ' <tr>
        <th scope="row">'.$sno.'</th>
        <td>'.$t_id.'</td>
        <td>'.$s_id.'</td>
        <td>'.$tname.'</td>
        <td>'.$phone.'</td>
        <td>'.$other.'</td>
        
  <td>
  <button class="btn btn-primary"><a href="update3.php? updateid='.$sno.'" class="text-light">Update</a></button>
  <button class="btn btn-danger"><a href="delete3.php? deleteid='.$sno.'" class="text-light">Delete</a></button>

</td>   

      </tr>';
        
      }
    }

  ?>
 

  </tbody>
</table>

</div>


</body>
</html>