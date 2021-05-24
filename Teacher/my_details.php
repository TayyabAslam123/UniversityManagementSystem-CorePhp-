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

<?php
  include '../Database/server_configuration.php';
$con=mysqli_connect("$host","$username","$passwrd");
$con->select_db($db);
?>
<div class="container-fluid" >



    
<?php



$my_id=$_SESSION["id"];

$sql = "SELECT * FROM `teacher` WHERE id='$my_id'";
$result = $con->query($sql);

$row=$result->fetch_assoc();
$my_id=$row['id'];
$my_email=$row['email'];
$my_name=$row['name'];
$my_salary=$row['salary'];
?>
    <a href="dashboard.php"><button class="btn btn-success btn-block">GO BACK</BUTTON></a>
<h1 style="align-text:center;">YOUR DETAILS</h1>
<div class="jumbotron">
 <H3><span class="badge badge-secondary">NAME :</span> <?php echo "$my_name"?></H1>
 <H3> <span class="badge badge-secondary">EMAIL :</span><?php echo "$my_email"?></H1>
 <H3> <span class="badge badge-secondary">SALARY :</span> RS <?php echo "$my_salary"?>/-</H1>
</div>

</body>
</html>

<?php

}

else{

  echo "UNAUNTHENTIC USER";
}

?>



