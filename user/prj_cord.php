<div class="container">


  <div class="row" style="margin-top:300px;">
    <div class="col-md-3">

    <ul class="list-group">
       <li class="list-group-item">Staff Id :<?php echo $_SESSION['regno']; ?>
       <li class="list-group-item">Name: <?php echo $_SESSION['user']; ?>
       <li class="list-group-item">Dept: <?php echo $_SESSION['dept']; ?>

    </ul>
   <a href="logout.php"><button class="btn btn-primary">Log Out</button></a>


    </div>
    <div class="col-md-6">

    <?php include 'user/prj_cordinator_db.php'; ?>



    </div>
    <div class="col-md-3">

    <ul class="list-group">
      <li class="list-group-item"> No of Projects : <?php echo $_SESSION['no_of_pr']; ?>
    
    </ul>


     </div>
  </div>
</div>
