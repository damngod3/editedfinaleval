<?php

	include('session.php');
	include('config/config.php');
	include('config/db.php');
	$student_id=$_SESSION['student_id'];

$sql=mysqli_query($conn,"select student_id,firstname,lastname,username,password,email,course from users where student_id = '$student_id'")or die ("query 1 incorrect.......");

list($student_id,$firstname,$lastname,$username,$password,$email,$course)=mysqli_fetch_array($sql);


	
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Student Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
  	<body> 
        <?php include('inc/header.php');?>
						<div class="row">
        <div class="container-fluid">       

					<div class="col-sm-9">
					 <div class="panel panel-primary" style="margin-left:20px">
						<div class="panel-heading" style="width: 500px; background-color:#660000">
						
						<h3 style="color:white">WELCOME: <?php echo $firstname;?> </h3>
										</div>
					<div class="panel-body">
<!--This is from student panel -->
                        <h3>Student ID: <?php echo $student_id;?> </h3>
					
					<h3>Username: <?php echo $username;?> </h3>
					<h3>Password: <?php echo $password;?> </h3>
					<h3>Email: <?php echo $email;?> </h3>
					<h3>Course: <?php echo $course;?> </h


				
			</div>
			</div>
                </div></div>	</div>  
        
  

        </div>
      </body>

</html>
