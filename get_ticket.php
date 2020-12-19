<?php 

    $con = new PDO('pgsql:host=ec2-54-205-26-79.compute-1.amazonaws.com;dbname=d2inorbah83i0g', 'yhckvxgcgcacyo', 'e6306620569a1139d6a94ddc7d37e75f67fddef4241cbfad241d8c7d2aa67fe8');
    $pnr=$_POST['pnr'];
    $sql1="select doj from ticket where ticket.pnr='$pnr';";
    $stmt=$con->prepare($sql1);
    $stmt->setFetchMode(\PDO::FETCH_ASSOC);
    $stmt->execute();
    $check=$stmt->fetchColumn(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div style="background-color:powderblue;padding:33px;">
  <h3>Your PNR is: <?php echo $pnr?><br> And your date of journey is <?php echo $check?></h3>
</div>
<div style="overflow-x:auto;">
<h3 style="padding:20px;">Your tickets are given below:</h3>
<table style="width:110%;">
  <thead>
    <tr>
      <th scope="col" style="padding:15px;text-align:left;border-bottom:1px solid #ddd;background-color:SlateBlue;color:white;" ></th>
      <th scope="col" style="padding:15px;text-align:left;border-bottom:1px solid #ddd;background-color:SlateBlue;color:white;">Passanger Name</th>
      <th scope="col" style="padding:15px;text-align:left;border-bottom:1px solid #ddd;background-color:SlateBlue;color:white;">Gender</th>
      <th scope="col" style="padding:15px;text-align:left;border-bottom:1px solid #ddd;background-color:SlateBlue;color:white;">Age</th>
      <th scope="col" style="padding:15px;text-align:left;border-bottom:1px solid #ddd;background-color:SlateBlue;color:white;">Train Number</th>
      <th scope="col" style="padding:15px;text-align:left;border-bottom:1px solid #ddd;background-color:SlateBlue;color:white;">Coach</th>
      <th scope="col" style="padding:15px;text-align:left;border-bottom:1px solid #ddd;background-color:SlateBlue;color:white;">Berth Number</th>
      <th scope="col" style="padding:15px;text-align:left;border-bottom:1px solid #ddd;background-color:SlateBlue;color:white;">Berth Type</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $sql="select * from ticket where ticket.pnr='$pnr';";
        foreach($con->query($sql) as $row){
    ?>
            
    <tr>
            <th scope="row"  style="padding:15px;text-align:left;border-bottom:1px solid #ddd;">1</th>
            <td  style="padding:15px;text-align:left;border-bottom:1px solid #ddd;"><?php echo $row['name'];?></td>
            <td  style="padding:15px;text-align:left;border-bottom:1px solid #ddd;"><?php echo $row['gender'];?></td>
            <td  style="padding:15px;text-align:left;border-bottom:1px solid #ddd;"><?php echo $row['age'];?></td>
            <td  style="padding:15px;text-align:left;border-bottom:1px solid #ddd;"><?php echo $row['train'];?></td>
            <td  style="padding:15px;text-align:left;border-bottom:1px solid #ddd;"><?php echo $row['coach'];?></td>
            <td  style="padding:15px;text-align:left;border-bottom:1px solid #ddd;"><?php echo $row['berth_number'];?></td>
            <td  style="padding:15px;text-align:left;border-bottom:1px solid #ddd;"><?php echo $row['berth_type'];?></td>
      </tr>
    <?php
    }
    ?>   
      
  </tbody>
</table>
</div>
<div class="w-80 m-auto" style="background-color:MediumPurple;color:white;padding:33px;">
    <h2 style="text-align:center" style="background-color:SeaShell;">Click on the button below to go back</h2><br>
    <form action="index.php" method="post">
        <div style="display: flex;justify-content: center;align-items: center;height: 40px;">
            <button type="submit" class="btn btn-success" style="padding: 10px 24px;border-radius: 12px;font-size: 16px;background-color: white;color: black;border: 2px solid #4CAF50;" >Click Here!</button>
        </div>
    </form>
<div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
</body>
</html>
