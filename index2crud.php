<?php
        require_once('config/db.php');

   


   ?>
   

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Record</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  
  <div class="container">
    <h1>Record Display</h1>
    <button class="btn btn-primary my-5"><a href="index2.php" class="text-light">Add Data</a></button>
    <table class="table table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Roll_No</th>
      <th scope="col">School Id</th>
      <th scope="col">Student Name</th>
      <th scope="col">Parent Name</th>
      <th scope="col">Contact No</th>
      <th scope="col">Address</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php

  $query = "select * from `student`";
  $result = mysqli_query($con,$query);


    if($result){
      while ($row=mysqli_fetch_assoc($result)){
        $rno=$row['rno'];
        $s_id=$row['s_id'];
        $sname=$row['sname'];
        $pname=$row['pname'];
        $phone=$row['phone'];
        $address=$row['address'];
        echo ' <tr>
        <th scope="row">'.$rno.'</th>
        <td>'.$s_id.'</td>
        <td>'.$sname.'</td>
        <td>'.$pname.'</td>
        <td>'.$phone.'</td>
        <td>'.$address.'</td>
        
  <td>
  <button class="btn btn-primary"><a href="update2.php? updateid='.$rno.'" class="text-light">Update</a></button>
  <button class="btn btn-danger"><a href="delete2.php? deleteid='.$rno.'" class="text-light">Delete</a></button>

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