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
$applicant=$_POST["applicant"];
$reason=$_POST["reason"];
$details=$_POST["details"];



$retval = $con->query("insert into leaves values('','$applicant','$reason','$details')");

if(isset($retval)){ ?>
   <h1 style="background-color:green;"><?php echo "leave request sent successfully"?></h1>;
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
  <h1 style="text-align:center;">APPLY FOR LEAVE</h1>
  
  <form action="apply_leave.php" method="post">
  
  <div class="form-group">
      <label for="NAME">APPLICANT NAME:</label>
      <input type="text" class="form-control" id="name"  name="applicant">
    </div>

  <div class="form-group">
      <label for="email">REASON FOR LEAVE:</label>
      <input type="text" class="form-control" id="name"  name="reason">
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

  echo "UNAUNTHENTIC USER";
}

?>