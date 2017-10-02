<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
    $conn = new mysqli("localhost", "root", "", "simpledata");
     $sql="SELECT * FROM images";
        $result=$conn->query($sql);
        echo "<table>";
            while($row = mysqli_fetch_array($result)){
                echo"<tr>";
                echo "<td>";?>  <img src="<?php echo $row['image'];?>"height="100"width="100"><?php echo "</td>";
                echo "</tr>"; 
            } 
            echo "</table>";
        ?>
    </body>
</html>