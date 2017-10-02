 <?php 
         $conn=mysqli_connect('localhost','root','','simpledata');
         $sql="SELECT * FROM registration";
         $result=mysqli_query($conn,$sql);
        echo '<table border="1">';
    echo  '<tr>';
     echo '<th>ID</th>';
      echo '<th>studentname</th>';
      
      
     echo  '</tr>';
     echo '</table>';

   ?>