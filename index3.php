<?php
$insert = false;
if(isset($_POST['t_id'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server,$username,$password);
    
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    
    $t_id = $_POST['t_id'];
    $s_id = $_POST['s_id'];
    $tname = $_POST['tname'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];

   $sql = "INSERT INTO  `school`.`teacher` (`t_id`, `s_id`, `tname`, `phone`, `other`) VALUES ('$t_id', '$s_id','$tname', '$phone', '$other');";



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
    <title>Teacher Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chela+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chela+One&family=Sriracha&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="style3.css">
</head>
<body>
        <img class="bg2"src="bg2.jpg" alt="Teacher" srcset="">
        <div class="container2">

            <h1>Enter Teacher Information</h1>
            <?php
            if($insert == true){
            echo "<p>Thank You For Submitting Form</p>";
            }
            ?>
           <form action="index3.php" method="post">
            
            <input type="text" name="t_id" id="t_id" placeholder="Enter Teacher ID">
            <input type="text" name="s_id" id="s_id" placeholder="Enter School ID">
            <input type="text" name="tname" id="tname" placeholder="Enter Teacher Name">
            <input type="phone" name="phone" id="phone" placeholder="Contact Number">
            <textarea name="other" id="other" cols="30" rows="10" placeholder="Other Information"></textarea>
            <button class="btn2">Submit</button>
            
           <a href="index3crud.php">Click Here To See Records</a>

        </form>
        
        
    </div>
</body>
</html>