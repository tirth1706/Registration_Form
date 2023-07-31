<?php

require_once('config/db.php');
if(isset($_GET['deleteid'])){
    $s_id =$_GET['deleteid'];


    $sql = "delete from `schoold` where s_id=$s_id";
    $result = mysqli_query($con,$sql);
    if($result){
       header('location:index.php');
    }else{
        die("error" . mysqli_connect_error());
    }
}


?>