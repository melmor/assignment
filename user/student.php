<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-4" style="padding-top:200px;">
      
		<center>	<img class="img-responsive" style="width:200px;height:200px;border-radius:100%;" src="me.jpg"> </center>
       <div class="row" style="margin-bottom:50px;"></div>
			<ul class="list-group"> 
				<li class="list-group-item">Name :<?php echo $_SESSION['user']; ?>
				<li class="list-group-item">Dept :<?php echo $_SESSION['dept']; ?>
				<li class="list-group-item">Reg No : <?php echo $_SESSION['regno']; ?>
			</ul>
		<a href="logout.php"><button class="btn btn-primary">Log Out</button></a>
		</div>
		<div class="col-md-4" style="padding-top:300px;">
			<?php
			include 'user/student_prj.php';

			?>
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>