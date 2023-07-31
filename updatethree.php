<?php

if(isset($_POST['update3'])){    
    $sno = $_POST['sno'];
    $t_id = $_POST['t_id'];
    $s_id = $_POST['s_id'];
    $tname = $_POST['tname'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];


    $con = mysqli_connect("localhost", "root", "", "school");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
  //  $sql  = "update `school`.`schoold` set s_id='$s_id',indexno='$indexno',name='$name',phone='$phone',address='$address' where s_id=$s_id ";
    $sql = "UPDATE `teacher` SET `t_id`='$t_id',`s_id`='$s_id',`tname`='$tname',`phone`=' $phone',`other`='$other' WHERE sno=$sno";
    $request = mysqli_query($con,$sql);
    if($request){
        header('Location:index3crud.php');
    }else{
        die(mysqli_error($con));
    }


   }
?>