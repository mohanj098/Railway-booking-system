<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="w-80 m-auto"  style="background-color:powderblue;padding:33px;" > 
  <form action="admin.php" method="post">                  <!--admin.php has benn set for action for now-->
    <h2 style="text-align:left;">If you want to access the admin page please enter the password:</h2>
    <div class="w-50 m-auto">
      <label for="PNR">Password:</label>
      <input type="password" name="password" class="password" id="password">
    </div>
    <br>
    <div class="w-50 m-auto" >
      <button type="submit" class="btn btn-success" style="padding: 10px 24px;border-radius: 12px;font-size: 10px;background-color: white;">Submit</button>
    </div>
  </form>
</div>
</body>
</html>