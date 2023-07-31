<?php
$con = mysqli_connect("localhost","root","","school");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$sno = $_GET['updateid'];
$sql="Select * from `teacher` where sno=$sno";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
        <div class="container">

       
           <form action="updatethree.php" method="post">

          

            <div class="mb-3 my-5">
            <input type="hidden" name="sno" value="<?php echo $row['sno']; ?>">
            <input type="text" name="t_id" id="t_id" placeholder="Enter Teacher ID" value=<?php echo $row['t_id']; ?>>
            </div>

            <div class="mb-3">
            <input type="text" name="s_id" id="s_id" placeholder="Enter School ID" value=<?php echo $row['s_id']; ?>>
            </div>

            <div class="mb-3">
            <input type="text" name="tname" id="tname" placeholder="Enter Teacher Name" value=<?php echo $row['tname']; ?>>
           </div>

            <div class="mb-3">
            <input type="phone" name="phone" id="phone" placeholder="Contact Number" value=<?php echo $row['phone']; ?>>
            </div>

            <div class="mb-3">
            <textarea name="other" id="other" cols="30" rows="10" placeholder="Other Information" value=<?php echo $row['other']; ?>></textarea>
            </div>
            <button class="btn btn-primary" name="update3">Update</button>
            
          

        </form>
        
        
    </div>
</body>
</html>