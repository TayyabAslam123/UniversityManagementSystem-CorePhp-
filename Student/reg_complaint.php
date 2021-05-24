<?php
session_start();
$current_role=$_SESSION["role"];

if($current_role=='student'){
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
$title=$_POST["title"];
$details=$_POST["details"];



$retval = $con->query("insert into complaints values('','$title','$details')");

if(isset($retval)){ ?>
   <h1 style="background-color:green;"><?php echo "complaint sent ssuccessfully"?></h1>;
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
  <h1 style="text-align:center;">REGISTER A COMPLAINT</h1>
  <form action="reg_complaint.php" method="post">
  
  <div class="form-group">
      <label for="email">TITLE:</label>
      <input type="text" class="form-control" id="name"  name="title">
    </div>


    <div class="form-group">
      <label for="pwd">DETAILS:</label>
      <textarea class="form-control" rows="5" name="details">
      </textarea>
  
    </div>
  
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
<?php

}

else{

  echo "UNAUTHENTIC USER";
}

?>