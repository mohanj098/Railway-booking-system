<?php

    $date = $_POST['date'];
    $train = $_POST['train'];
    $seats = $_POST['seats'];
    $coach =$_POST['coach'];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color:Lavender;">
<div class="w-80 m-auto" style="background-color:RosyBrown;color:white;padding:33px;">
    <h2 style="text-align:center">Please Enter the details of all the passengers:</h2><br>
    <form action="book.php" method="post">
    <?php
        for($i=0; $i<$seats;$i++){
            echo'
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="name[' . $i . ']" placeholder="Name">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" name="age[' . $i . ']" placeholder="Age">
                    </div>
                    <div class="col">
                        <select class="form-control" name="gender[' . $i . ']" id="coach" placeholder="Gender">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                </div>';
        }
    ?>
        <input type='hidden' name='train' value='<?php echo "$train";?>'/>
        <input type='hidden' name='date' value='<?php echo "$date";?>'/> 
        <input type='hidden' name='seats' value='<?php echo "$seats";?>'/> 
        <input type='hidden' name='coach' value='<?php echo "$coach";?>'/> 

        <div class="row" >
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
    <small> 
        <br>*Children under 5 years of age require their own tickets.
        <br>*Dogs can be kept close, within the compartment, only when you are travelling by AC.
    </small>
<div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
</body>
</html>