<?php
require_once('config/db.php');
$sql="Select * from `schoold` where s_id=$s_id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$indexno = $row['indexno'];
$name = $row['name'];
$phone = $row['phone'];
$address = $row['address'];


?>
       
        <div class="mb-3 my-5">
            <input type="number" name="index" id="index" placeholder="Enter School Index Number" value=<?php echo $indexno;?>>
        </div>
        <div class="mb-3">
            <input type="text" name="name" id="name" placeholder="Enter School Name" value=<?php echo $name;?>>
        </div>
        <div class="mb-3">          
            <input type="phone" name="phone" id="phone" placeholder="Contact Number" value=<?php echo $phone;?>>
        </div>
        <div class="mb-3">
            <textarea name="address" id="desc" cols="30" rows="10" placeholder="School Address " value=<?php echo $address;?>></textarea>
        </div>    
            <button class="btn btn-primary">Update</button>

</form>
</div>
</body>
</html>