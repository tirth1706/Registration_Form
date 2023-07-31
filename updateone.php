<?php

if(isset($_POST['update1'])){    
    $s_id = $_POST['s_id'];
    $indexno = $_POST['indexno'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
  
    $con = mysqli_connect("localhost", "root", "", "school");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

  //  $sql  = "update `school`.`schoold` set s_id='$s_id',indexno='$indexno',name='$name',phone='$phone',address='$address' where s_id=$s_id ";
    $sql =  "UPDATE `schoold` SET `indexno`='$indexno', `name`='$name', `phone`='$phone', `address`='$address' WHERE s_id=$s_id";


   // $result = mysqli_query($con,$sql);
    if(mysqli_query($con,$sql)){
       header('Location:index.php');
    }else{
        die(mysqli_error($con));
    }


}
    
?>