<?php
    $con = new PDO('pgsql:host=localhost;dbname=project', 'postgres', '7809');
    $date = $_POST['date'];
    $train = $_POST['train'];
    $seats = $_POST['seats'];
    $coach =$_POST['coach'];


    $sql="select check_aval('$train', '$date', '$seats', '$coach');";
    $stmt=$con->prepare($sql);
    $stmt->setFetchMode(\PDO::FETCH_ASSOC);
    $stmt->execute();
    $check=$stmt->fetchColumn(0);
    if($check==0){
        // $sql1="select book_ticket('$name','$age', '$gender', '$train', '$date', '$coach');";
        // $con->query($sql1);
        echo "<script> alert('Train not available'); window.location.href='seat.php'; </script>";
    }
    else{
    $sql2="select uuid_generate_v4();";
    $stmt1=$con->prepare($sql2);
    $stmt1->setFetchMode(\PDO::FETCH_ASSOC);
    $stmt1->execute();
    $pnr=$stmt1->fetchColumn(0);
    for($i=0; $i<$seats; $i++){
        $name[$i] = $_POST['name'][$i];
        $age[$i] = $_POST['age'][$i];
        $gender[$i] = $_POST['gender'][$i];
        $sql1="select book_ticket('$pnr', '$name[$i]','$age[$i]', '$gender[$i]', '$train', '$date', '$coach');";
        $con->query($sql1);
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:SeaShell;">
<div class="w-80 m-auto" style="background-color:MediumPurple;color:white;padding:33px;">
    <h1 style="text-align:center">YOUR TICKET HAS BEEN BOOKED</h1> 
    <br>
    <h2 style="text-align:center" style="background-color:SeaShell;">Click on the button below to veiw your ticket...</h2><br>
    <form action="get_ticket.php" method="post">
        <input type='hidden' name='pnr' id='pnr' value='<?php echo "$pnr";?>'/>
        <div style="display: flex;justify-content: center;align-items: center;height: 40px;">
            <button type="submit" class="btn btn-success" style="padding: 10px 24px;border-radius: 12px;font-size: 16px;background-color: white;color: black;border: 2px solid #4CAF50;" >Click Here!</button>
        </div>
    </form>
<div>
</body>
</html>