<?php
include '../include/connection.php';

$db=new Database();
$db->connect();

      $us_name=$_GET['usname'];
      $pwd=md5($_GET['passwd']);
      $fname=$_GET['fname'];
      $email=$_GET['email'];
      $us_type=$_GET['tou'];
      $reg=$_GET['reg'];
    $confirm= $db->run_query("INSERT INTO user_detail values('$us_name','$pwd','$email','$fname','$us_type','$reg')");
      if(!empty($confirm))
     { echo "<div class='alert alert-success' role='alert'>successfully registered</div>";
       echo "<script>
             if(flag==0)
             {
                  $('#box').hide();
             }                 
             </script>";
       }
      else
      echo  "<div class='alert alert-danger' role='alert'>Something went wrong! Try again</div>";

      $db->disconnect();
?>
