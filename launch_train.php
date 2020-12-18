<?php
    $con = new PDO('pgsql:host=localhost;dbname=project', 'postgres', '7809');
    $train=$_POST['train'];
    $date=$_POST['date'];
    $ac=$_POST['ac'];
    $sleeper=$_POST['sleeper'];

    $sql="select launch_train('$train', '$date', '$ac', '$sleeper')";
    $con->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="w-80 m-auto" style="background-color:MediumPurple;color:white;padding:33px;">
    <h1 style="text-align:center">YOUR TRAIN HAS BEEN LAUNCHED</h1> 
    <br>
    <h2 style="text-align:center" style="background-color:SeaShell;">Click on the button below to go back</h2><br>
    <form action="index.php" method="post">
        <div style="display: flex;justify-content: center;align-items: center;height: 40px;">
            <button type="submit" class="btn btn-success" style="padding: 10px 24px;border-radius: 12px;font-size: 16px;background-color: white;color: black;border: 2px solid #4CAF50;" >Click Here!</button>
        </div>
    </form>
<div>
</body>
</html>