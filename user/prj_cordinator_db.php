
<table class="table table-bordered">

<?php

  // include 'include/connection.php';

  // $db= new Database();
   $db->connect();
   $stid=$_SESSION['user'];
   $query = "SELECT * from pc_db where staff_id='$stid'";

   $result=$db->run_query($query);

   while($row=mysqli_fetch_array($result))
   {
    ?>
    <tr>
      <?php
     if($row['staff_id']==$stid)
     {
       echo "<td>".$row['group_id']."</td>";
       echo "<td>".$row['prj_name']."</td>";
     }
     ?>
   </tr>
   <?php
   }

    $db->disconnect();



?>
</table>