<?php

require_once('config/db.php');
if(isset($_GET['deleteid'])){
    $rno =$_GET['deleteid'];


    $sql = "DELETE FROM `student` WHERE  rno=$rno";
    $result = mysqli_query($con,$sql);
    if($result){
       header('location:index2crud.php');
    }else{
        die("error" . mysqli_connect_error());
    }
}


?>