<?php
$insert = false;
if(isset($_POST['submit1'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server,$username,$password);
    
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    
    $index = $_POST['index'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];


    $sql  = "INSERT INTO `school`.`schoold` (`indexno`, `name`, `phone`, `address`) VALUES ('$index', '$name', '$phone', '$address');";

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
   <?php
        require_once('config/db.php');

    $query = "select * from schoold";
    $result = mysqli_query($con,$query);



   ?>
         
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chela+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chela+One&family=Sriracha&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="style.css">
  
</head>
<body>
    <img class="bg" src="bg.jpg" alt="">
    <div class="container">

        <h1>Enter Your School Information</h1>
        <?php
        if($insert == true){
            echo  "<p>Thank You For Submitting Form</p>";
        }
     ?>
        
        
        <form action="index1.php" method="post">
            
            <input type="number" name="index" id="index" placeholder="Enter School Index Number">
            <input type="text" name="name" id="name" placeholder="Enter School Name">
            <input type="phone" name="phone" id="phone" placeholder="Contact Number">
            <textarea name="address" id="address" cols="30" rows="10" placeholder="School Address "></textarea>    
            <button class="btn" name="submit1" >Submit</button>
            
        </form>
        <a href="index2.php">Click Here to go to student form</a>
        <br>
        <a href="index.php">Click Here to go to see record</a>
        
       
</div>
    </body>
    </html>
    
    
    
    