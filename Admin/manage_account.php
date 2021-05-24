
<?php
if(!empty($_POST)){

include '../Database/server_configuration.php';


$con=mysqli_connect("$host","$username","$passwrd");
$con->select_db($db);

$email=$_POST["email"];
$password=$_POST["pswd"];
$role=$_POST["role"];

//chunk>>
if($role =="teacher"){
//search from database    
$sql = "SELECT * FROM `teacher` WHERE email='$email'";
$result = $con->query($sql);

//if no result found
if (!$result) {
    echo 'NO USER FOUND' ;
    exit;
}

//fetching data
$row=$result->fetch_assoc();
$my_id=$row['id'];
$my_email=$row['email'];
$my_role="teacher";
//adding values in sessions
session_start();
$_SESSION["id"] = $my_id;
$_SESSION["email"] = $my_email;
$_SESSION["role"] = $my_role;
//directing towards teachers panel
header("Location:../Teacher/dashboard.php");
exit;
}else if($role =="student"){

   //search from database    
$sql = "SELECT * FROM `student` WHERE email='$email'";
$result = $con->query($sql);

//if no result found
if (!$result) {
    echo 'NO USER FOUND' ;
    exit;
}

//fetching data
$row=$result->fetch_assoc();
$my_id=$row['id'];
$my_email=$row['email'];
$my_role="student";
//adding values in sessions
session_start();
$_SESSION["id"] = $my_id;
$_SESSION["email"] = $my_email;
$_SESSION["role"] = $my_role;
//directing towards teachers panel
header("Location:../Student/dashboard.php");
exit;
}else if($role =="admin"){

    if($email=='admin@admin.com' && $password=='admin')
    {
        session_start();
        $_SESSION["role"] ="admin";
        header("Location:dashboard.php");
        exit;
    }
    else{
        echo 'email/password is incorrect';
    }

}



}
else{
    echo "error";
}
?> 
