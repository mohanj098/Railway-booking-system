<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>

<div class="w-80 m-auto" style="background-color:SlateBlue;color:white;padding:33px;"> 
  <form action="customer.php" method="post">
    <h2 style="text-align:center;">To book your tickets, please enter your details here:-</h2>
    <div class="w-50 m-auto">
      <label for="train number">Train number</label>
      <input type="number" name="train" class="form-control" id="train">
    </div>
    <div class="w-50 m-auto">
      <label for="doj">Date of journey</label>
      <input type="date" name="date" class="form-control" id="date">
    </div>
    <div class="w-50 m-auto">
      <label for="seats">Number of passangers</label>
      <input type="number" name="seats" class="form-control" id="seats">
    </div>
    <div class="w-50 m-auto">
      <label for="exampleFormControlSelect1">Select Coach type</label>
      <select class="form-control" name="coach" id="coach">
        <option>A</option>
        <option>S</option>
      </select>
      <small id="coachHelp" class="form-text text-muted" style="color:white;">'A' for AC coach and 'S' for sleeper coach</small>
    </div>
    <br>
    <div class="w-50 m-auto" >
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </form>
</div>

<div class="w-80 m-auto"  style="background-color:powderblue;padding:33px;" > 
  <form action="get_ticket.php" method="post">                  <!--get_ticket.php has benn set for action for now-->
    <h2 style="text-align:center;">This is to check pre-booked tickets for passengers:-</h2>
    <div class="w-50 m-auto">
      <label for="PNR">PNR</label>
      <input type="text" name="pnr" class="form-control" id="PNR">
    </div>
    <br>
    <div class="w-50 m-auto" >
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </form>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
</body>
</html>