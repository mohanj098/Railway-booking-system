<?php
  $password=$_POST['password'];
  if($password!=='12345'){
    echo "<script> alert('Wrong password'); window.location.href='index.php'; </script>";
  }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<form action="launch_train.php" method="post">
  <div class="w-50 m-auto">
    <label for="exampleInputEmail1">Train number</label>
    <input type="number" class="form-control" name="train" id="train">
  </div>
  <div class="w-50 m-auto">
    <label for="exampleInputPasswor">Date</label>
    <input type="date" class="form-control" name="date" id="date" >
  </div>
  <div class="w-50 m-auto">
    <label for="exampleInputPassword1">Number of AC coaches</label>
    <input type="number" class="form-control" name="ac" id="ac" >
  </div>
  <div class="w-50 m-auto">
    <label for="exampleInputPassword"></label>
    <input type="number" class="form-control" name="sleeper" id="sleeper" >
  </div>
  <br>;
  <div class="w-50 m-auto" >
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    
</body>
</html>