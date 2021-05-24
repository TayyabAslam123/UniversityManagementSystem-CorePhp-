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

<?php

if(!empty($_POST)){


  include '../Database/server_configuration.php';



$con=mysqli_connect("$host","$username","$passwrd");
$con->select_db($db);
$name=$_POST["name"];
$email=$_POST["email"];
$password=$_POST["pswd"];
$salary=$_POST["salary"];


$retval = $con->query("insert into teacher values('','$name','$email','$password','$salary')");

if(isset($retval)){ ?>
   <h1 style="background-color:green;"><?php echo "teacher is saved successfully"?></h1>;
   <?php
}
else{
 echo "error";
}

//

}
?> 

<a href="dashboard.php"><button class="btn btn-success btn-block">GO BACK</BUTTON></a>
<div class="container jumbotron" >
  <h1 style="text-align:center;">ADD NEW TEACHER</h1>
  <form action="add_teacher_form.php" method="post">
  
  <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>

    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>

    <div class="form-group">
      <label for="pwd">Salary:</label>
      <input type="number" class="form-control" id="pwd" placeholder="Enter salary in RS" name="salary">
    </div>
  
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
<?php

}

else{

  echo "UNAUNTHENTIC USER";
}

?>