<?php

if(isset($_POST['update2'])){    
    $rno = $_POST['rno'];
    $s_id = $_POST['s_id'];
    $sname = $_POST['sname'];
    $pname = $_POST['pname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];


    $con = mysqli_connect("localhost", "root", "", "school");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
  //  $sql  = "update `school`.`schoold` set s_id='$s_id',indexno='$indexno',name='$name',phone='$phone',address='$address' where s_id=$s_id ";
    $sql = " UPDATE `student` SET `s_id`=$s_id,`sname`='$sname',`pname`='$pname',`phone`='$phone',`address`='$address' WHERE rno=$rno";
    $request = mysqli_query($con,$sql);
    if($request){
        header('Location:index2crud.php');;
    }else{
        die(mysqli_error($con));
    }


   }
?>