<?php

require_once('config/db.php');
if(isset($_GET['deleteid'])){
    $sno =$_GET['deleteid'];


    $sql = "DELETE FROM `teacher` WHERE  sno=$sno";
    $result = mysqli_query($con,$sql);
    if($result){
        header('Location:index3crud.php');
    }else{
        die("error" . mysqli_connect_error());
    }
}


?>