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
$apply=$_POST["apply"];
$details=$_POST["details"];


$retval = $con->query("insert into internships values('','$name','$details','$apply')");

if(isset($retval)){ ?>
   <h1 style="background-color:green;"><?php echo "internship data is saved successfully"?></h1>;
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
  <form action="add_internships.php" method="post">
  
  <div class="form-group">
      <label for="email">TITLE:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter title" name="name">
    </div>

    <div class="form-group">
      <label for="email">WHERE TO APPLY</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email address " name="apply">
    </div>

    <div class="form-group">
      <label for="pwd">RELAVENT DETAILS:</label>
      <textarea class="form-control" rows="5" name="details">
      </textarea>


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