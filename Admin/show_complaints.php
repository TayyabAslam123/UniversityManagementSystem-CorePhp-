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
  include '../Database/server_configuration.php';
$con=mysqli_connect("$host","$username","$passwrd");
$con->select_db($db);
?>
<div class="container-fluid" >

    <table class="table table-striped">
    <a href="dashboard.php"><button class="btn btn-success btn-block">GO BACK</BUTTON></a>
    <thead>
      <tr>
        <th>ID</th>
        <th>TITLE</th>
        <th>DETAILS</th>
      </tr>
    </thead>
    <tbody>

    
<?php

$sql = "SELECT * FROM `complaints` ";
$result = $con->query($sql);

if($result->num_rows>0){

    while($row=$result->fetch_assoc()){?>
<tr>
        <td><?php  echo "".$row["id"].""?></td>
        <td><?php  echo "".$row["title"].""?></td>
        <td><?php  echo "".$row["details"].""?></td>
      </tr>
   </div>
    <?php
    }}
?>
          <tr>
    </tbody>
  </table>
</div>

</body>
</html>

<?php

}

else{

  echo "UNAUNTHENTIC USER";
}

?>



