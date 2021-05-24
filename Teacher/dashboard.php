<?php
session_start();
$current_role=$_SESSION["role"];

if($current_role=='teacher'){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>UMS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<a href="../Admin/logout.php">
<button class="btn btn-danger">
logout
</button>
</a>
<br><br><br><br>
<h2 style="text-align:center;">WELCOME TO TEACHER PANEL</h2>
<div class="container jumbotron" >
<a href="my_details.php"><button type="button" class="btn btn-primary btn-block">VIEW DETAILS</button></a>
<br>
<a href="change_password.php"><button type="button" class="btn btn-success btn-block">CHANGE PASSWORD</button></a>
<br>
<a href="reg_complaint.php"><button type="button" class="btn btn-primary btn-block">REGISTER A COMPLAINT</button></a>
<br>
<a href="view_salary.php"><button type="button" class="btn btn-success btn-block">VIEW SALARY</button></a>
<br>
<a href="apply_leave.php"><button type="button" class="btn btn-primary btn-block">APPLY FOR LEAVE</button></a>
<br>
<a href="view_student.php"><button type="button" class="btn btn-success btn-block">VIEW STUDENTS</button></a>
<br>
<a href="view_courses.php"><button type="button" class="btn btn-primary btn-block">VIEW COURSES</button></a>
<br>
</div>

</body>
</html>

<?php

}

else{

  echo "UNAUNTHENTIC USER";
}

?>