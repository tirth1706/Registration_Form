<?php
$con = mysqli_connect("localhost","root","","school");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$s_id = $_GET['updateid'];
$sql="Select * from `schoold` where s_id=$s_id";
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



<form action="updateone.php" method="post">


       
<div class="mb-3 my-5">
            <input type="hidden" name="s_id" value="<?php echo $s_id; ?>">
            <input type="number" name="indexno" id="indexno" placeholder="Enter School Index Number" value=<?php echo $row['indexno'];?>>
        </div>
        <div class="mb-3">
            <input type="text" name="name" id="name" placeholder="Enter School Name" value=<?php echo $row['name'];?>>
        </div>
        <div class="mb-3">          
            <input type="phone" name="phone" id="phone" placeholder="Contact Number" value=<?php echo $row['phone'];?>>
        </div>
        <div class="mb-3">
            <textarea name="address" id="address" cols="30" rows="10" placeholder="School Address " value=<?php echo $row['address'];?>></textarea>
        </div>    
            <button class="btn btn-primary" name ="update1">Update</button>

</form> 
</div>
</body>
</html>

