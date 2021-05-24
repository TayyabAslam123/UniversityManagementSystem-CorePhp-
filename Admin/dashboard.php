<?php
session_start();

$current_role=$_SESSION["role"];

if($current_role=="admin"){
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
<a href="logout.php">
<button class="btn btn-danger">
logout
</button>
</a>
<br><br><br><br>
<h2 style="text-align:center;">WELCOME TO ADMIN PANEL</h2>
<div class="container jumbotron" >
<a href="show_teacher.php"><button type="button" class="btn btn-primary btn-block">VIEW ALL TEACHERS</button></a>
<br>
<a href="add_teacher_form.php"><button type="button" class="btn btn-success btn-block">ADD NEW TEACHERS</button></a>
<br>
<a href="show_student.php"><button type="button" class="btn btn-primary btn-block">VIEW ALL STUDENTS</button></a>
<br>
<a href="add_student_form.php"><button type="button" class="btn btn-success btn-block">ADD NEW STUDENTS</button></a>
<br>
<a href="show_complaints.php"><button type="button" class="btn btn-warning btn-block">SEE COMPLAINTS</button></a>
<br>
<a href="leaves_request.php"><button type="button" class="btn btn-secondary btn-block">SEE LEAVES REQUEST</button></a>
<br>
<a href="add_courses.php"><button type="button" class="btn btn-warning btn-block">ADD COURSES</button></a>
<br>
<a href="view_courses.php"><button type="button" class="btn btn-secondary btn-block">VIEW COURSES</button></a>
<br>

<a href="add_internships.php"><button type="button" class="btn btn-warning btn-block">ADD INTERNSHIPS</button></a>
<br>
<a href="view_internships.php"><button type="button" class="btn btn-secondary btn-block">VIEW INTERNSHIPS</button></a>
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