<?php require_once '../__constants.php'; ?>
<?php Import::Header(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- aya  -->
  <title>GreenEye forms</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
  <h2>Appointment form</h2><br>
  <form action="/action_page.php">
   
  
    <div class="form-group">
      <label for="Patient Name">Patient Name:</label>
      <input type="text" class="form-control" id="Patient Name" placeholder="Enter Patient Name" name="Patient Name">
    </div>

   
    <label for="Date">Date:</label>
    <input type="date" name="bday">
    <br>
    <br>
    
    
    <label for="Gender">Gender:</label>
    <select class="form-control">
	<option></option>
	<option>Male</option>
	<option>Female</option>
	</select>


    
    <div class="form-group">
      <label for="pwd">Symptoms:</label>
      <input type="text" class="form-control" id="Symptoms" placeholder="Enter symptoms" name="Symptoms">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <br>
<br>
    <button type="submit" class="btn btn-default">Make an appointment</button>
  

</form>
</div>
<br>
<br>
<br>
<br>
</body>
</html>
<?php Import::Footer(); ?>