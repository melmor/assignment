<html>
<head>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<?php
session_start();
include 'include/connection.php';

  $username=$_POST['username'];
  $pwd=md5($_POST['password']);

  $db=new Database();
  $db->connect();
  $confirm= $db->run_query("SELECT * from user_detail");
 $count=0;
  while($row=mysqli_fetch_array($confirm))
  {
    if($row['username']==$username)
    {
      if($row['pwd']==$pwd)
       {
       //  $_SESSION['user']=$row['us_name'];

         $_SESSION['role']=$row['user_type'];
         $_SESSION['user']=$row['username'];
         $_SESSION['regno']=$row['reg'];
         $_SESSION['dept']='IT';
         $_SESSION['no_of_pr']=2;

         $count=1;

       }



    }


  }
  $db->disconnect();


  if($count==0)
  {
    echo "incorrect username or password";
  }
  else if($_SESSION['role']=='PC')
  {
   // echo "welcome\t".$_SESSION['user'];
    include 'user/prj_cord.php';

  }
  else if($_SESSION['role']=="ST")
  {
    include 'user/student.php';
  }



?>

</body>
</html>