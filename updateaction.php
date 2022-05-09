<?php
        require "config.php";
        $id=$_REQUEST['id'];
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $contact=$_REQUEST['contact'];
        $update="UPDATE `inse` SET  `name`='$name',`email`='$email', `contact`='$contact' WHERE `id`='$id'";
        $result=mysqli_query($con,$update);
        if($result){
            header("location:update.php");
        }
        else{
            echo"NO";
        }
?>