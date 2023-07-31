<?php
$insert = false;
if(isset($_POST['sname'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server,$username,$password);
    
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    
    $rno = $_POST['rno'];
    $s_id = $_POST['s_id'];
    $sname = $_POST['sname'];
    $pname = $_POST['pname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

   $sql = "INSERT INTO `school`.`student` (`rno`, `s_id`, `sname`, `pname`, `phone`, `address`) VALUES ('$rno', '$s_id', '$sname', '$pname', '$phone', '$address');";


   if($con->query($sql) == true){
    //   echo "Succesfully inserted";
         $insert = true;  
   }   
   else{
       echo "ERROR: $sql <br> $con->error";
   }

   $con->close();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chela+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chela+One&family=Sriracha&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <img class ="bg1"src="bg1.jpg" alt="Student Picture">
    <div class="container1">

        <h1>Enter Student Information</h1>
        <?php
        if($insert == true){
            echo "<p>Thank You For Submitting Your Form</p>";
        }
        ?>
        <form action="index2.php" method="post">
            
            <input type="number" name="rno" id="rno" placeholder="Enter Student Roll Number">
            <input type="number" name="s_id" id="s_id" placeholder="Enter School ID">
            <input type="text" name="sname" id="sname" placeholder="Enter Student Name">
            <input type="text" name="pname" id="pname" placeholder="Enter Father OR Mother Name">
            <input type="phone" name="phone" id="phone" placeholder="Parent Contact Number">
            <textarea name="address" id="address" cols="30" rows="10" placeholder="Student Address "></textarea>    
            <button class="btn1">Submit</button>
           
            <a href="index3.php">Click Here to go to teacher form</a>
            <a href="index2crud.php">Click Here to see record</a>
       
           
            
        </form>
        



    </div>
    
</body>
</html>