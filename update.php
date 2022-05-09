<?php

include "config.php";
$id=$_REQUEST['id'];
$sql="SELECT *FROM `inse` WHERE `id`='$id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
/*if($result){
    echo"1";
}
else{
    echo"2";
}*/


?>




<html>
<body>
<form action="updateaction.php?id=<?php echo $row['id'];?>" method="post">
    <table>
    <tr>
        <th>Name</th>
        <td><input type="text" name="name" value="<?php echo $row['name'];?>"></td>

    </tr>
    <tr>
    <th>Email</th>
        <td><input type="email" name="email" value="<?php echo $row['email'];?>"></td>
    </tr>
    <tr>
        <th>Contact</th>
        <td><input type="number" name="contact" value="<?php echo $row['contact'];?>"></td>
    </tr>
        <tr>
        <td><input type="submit" name="btnsubmit" value="submit"></td>

        </tr>

    </table>
</form>
</body>
</html>