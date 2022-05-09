<html>
<?php
        include "config.php";
        $select="SELECT * FROM  `inse`";
        $result=mysqli_query($con,$select);
        
?>
<body>
<table border= 1 align="center">

        <tr>
            <td>id</td>
            <td>name</td>
            <td>email</td>
            <td>contact</td>
            <td>delete</td>
            <td>update</td>

        </tr>
<?php
        while($row=mysqli_fetch_assoc($result))
        {
        ?>
            <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo$row['name']?></td>
            <td><?php echo$row['email']?></td>
            <td><?php echo$row['contact']?></td>
            <td><a href="detail.php?id=<?php echo $row['id'];?>">delete</a></td>
            <td><a href="updateaction.php?id=<?php echo $row['id'];?>">update</a></td>
        </tr>
        <?php
        }
        ?>
        </body>
</html>
