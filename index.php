<?php
        require_once('config/db.php');

   


   ?>
   

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  
  <div class="container">
    <h1>Record Display</h1>
    <button class="btn btn-primary my-5"><a href="index1.php" class="text-light">Add User</a></button>
    <table class="table table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">s_id</th>
      <th scope="col">Index No</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php

  $query = "select * from schoold";
  $result = mysqli_query($con,$query);


    if($result){
      while ($row=mysqli_fetch_assoc($result)){
        $s_id=$row['s_id'];
        $indexno=$row['indexno'];
        $name=$row['name'];
        $phone=$row['phone'];
        $address=$row['address'];
        echo ' <tr>
        <th scope="row">'.$s_id.'</th>
        <td>'.$indexno.'</td>
        <td>'.$name.'</td>
        <td>'.$phone.'</td>
        <td>'.$address.'</td>
        
  <td>
  <button class="btn btn-primary"><a href="update.php? updateid='.$s_id.'" class="text-light">Update</a></button>
  <button class="btn btn-danger"><a href="delete.php? deleteid='.$s_id.'" class="text-light">Delete</a></button>

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