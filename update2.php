<?php
$con = mysqli_connect("localhost","root","","school");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$rno = $_GET['updateid'];
$sql="Select * from `student` where rno=$rno";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">



<form action="updatetwo.php" method="post">
       
        <div class="mb-3 my-5">
        <input type="number" name="rno" id="rno" placeholder="Enter Student Roll Number" value=<?php echo $row['rno'];?>>
        </div>
        <div class="mb-3">
            <input type="number" name="s_id" id="s_id" placeholder="Enter School ID" value=<?php echo $row['s_id'];?>>
        </div>
        <div class="mb-3">          
            <input type="text" name="sname" id="sname" placeholder="Enter Student Name" value=<?php echo $row['sname'];?>>
        </div>
        <div class="mb-3">          
            <input type="text" name="pname" id="pname" placeholder="Enter Student ParentName" value=<?php echo $row['pname'];?>>
        </div>
        <div class="mb-3">          
            <input type="phone" name="phone" id="phone" placeholder="Parent Contact Number" value=<?php echo $row['phone'];?>>
        </div>
        <div class="mb-3">
            <textarea name="address" id="address" cols="30" rows="10" placeholder="Student Address " value=<?php echo $row['address'];?>></textarea>
        </div>    
            <button class="btn btn-primary" name="update2">Update</button>

</form>
</div>
</body>
</html>

