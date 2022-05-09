<?php
    require "config.php";
    $id=$_REQUEST['id'];
    $delete="DELETE FROM `inse` WHERE `id`='$id'";
    $result=mysqli_query($con,$delete);
    if($result)
    {
        header("location:delete.php");
    }
    else
    {
        echo"NO";
    }


?>