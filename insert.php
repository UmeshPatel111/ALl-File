
<?php
        include "config.php";
            //$id =$_REQUEST['id'];
            $name=$_REQUEST['name'];
            $email=$_REQUEST['email'];
            $contact=$_REQUEST['contact'];
            
            $insert="INSERT INTO `inse`( `name`, `email`, `contact`) VALUES('$name','$email','$contact')";

            $result=mysqli_query($con,$insert);
            if($result == true)
            {
                echo"$name Wellcome To oure Page";
               // header("location:form.php");
            }
            else{
                echo"Not Conecte";
            }

?>
