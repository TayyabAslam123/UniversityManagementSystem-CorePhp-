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

<div class="container jumbotron"  >
  <h1 style="text-align:center;">UNIVERSITY MANAGEMENT SYSYTEM</h1>
  <form action="Admin/manage_account.php" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
   
    <div class="form-group">
  <label for="sel1">MY ROLE:</label>
  <select class="form-control" id="sel1" name="role">
    <option>SELECT--</option>
    <option value="admin">ADMIN</option>
    <option value="teacher">TEACHER</option>
    <option value="student">STUDENT</option>
  </select>
</div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<div class="alert alert-success">
  <strong>ADMIN CREDIENTALS</strong> email: admin@admin.com____password:admin___role:admin
</div>
</body>
</html>

