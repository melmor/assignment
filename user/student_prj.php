
<table class="table table-bordered">

<?php

  // include 'include/connection.php';

  // $db= new Database();
   $db->connect();
   $usid=$_SESSION['user'];
    
   $query = "SELECT * from db  where username='$usid'";



   $result=$db->run_query($query);
   if(empty($result))
    echo "<script>alert('not working')</script>";


   while($row=mysqli_fetch_array($result))
   {
    ?>
    <tr>
      <?php
     
      echo "<td>".$row['group_id']."</td>";
       echo "<td>".$row['prj_name']."</td>";
     
     ?>
   </tr>
   <?php
   }

    $db->disconnect();



?>
</table>