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

if(!empty($_POST)){

include '../Database/server_configuration.php';

$con=mysqli_connect("$host","$username","$passwrd");
$con->select_db($db);


$new_pswd=$_POST["pswd"];

 session_start();
$my_id=$_SESSION["id"];

$sql = "UPDATE teacher SET password='$new_pswd' WHERE id='$my_id'";
$result = $con->query($sql);

if(isset($result)){ ?>
   <h1 style="background-color:green;"><?php echo "password updated"?></h1>;
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
  <h1 style="text-align:center;">UPDATE YOUR PASSWORD</h1>
  
  <form action="change_password.php" method="post">
  
  
    <div class="form-group">
      <label for="pwd">ENTER YOUR NEW PASSWORD HERE:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
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

  echo "UNAUNTHENTIC USER";
}

?>