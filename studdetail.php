<?php
include "connection.php";
?>

<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">

</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Smart Class</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="studdetail.php">Student Details</a>
            <ul>
			  <li><a class="nav-link" href="studupdate.php">Student Update</a></li>
			 </ul> 
       </li>
	   <li class="nav-item">
        <a class="nav-link" href="partisubj.php ">Subject Details</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="attendance.php">Attendance Details</a>
      </li>

    </ul>
  </div>
</nav>

<style>
body{
  font-family: Arial, Helvetica, sans-serif;
  background-color: #FAEBD7;
}
</style>

<section class="my-3">
	<div class="py-3">
<div class="container">
<div class="col-lg-12">
  <h1 class="bg-secondary font-weight-bold text-white" align="center"><b>Student Attendance Management System</b></h1>
  <br>
  <br>
   <h3>Student Details:- </h3>
   <br>
  <form action="" name="form1" method="post">
    <div class="form-group">
      <label for="email">First Name:</label>
      <input type="text" class="form-control" id="firstname" placeholder="Enter first name" name="firstname">
    </div>
	<div class="form-group">
      <label for="email">Middle Name:</label>
      <input type="text" class="form-control" id="middlename" placeholder="Enter middle name" name="middlename">
    </div>
	<div class="form-group">
      <label for="email">Last Name:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter last name" name="lastname">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email id" name="email">
    </div>
	<div class="form-group">
      <label for="email">Gender: </label>
      <input type="radio" name="gender" id="gender" value="male" required> Male <input type="radio" name="gender" 
	  value="female" required> Female <br>
	  
	  <div class="form-group">
  <label class="col-lg-40 control-label">Standard</label>
  <div class="col-lg-40">
    <select class="standard" name="standard">
	    <option>Select</option>
		<option value="1">1</option>
		<option value="1">2</option>
		<option value="1">3</option>
		<option value="1">4</option>
		<option value="1">5</option>
		<option value="1">6</option>
		<option value="1">7</option>
		<option value="1">8</option>
		<option value="1">9</option>
		<option value="1">10</option>
		</select>
  </div>
 </div> 
	  
    </div>
	<div class="form-group">
      <label for="email">Roll No:</label>
      <input type="text" class="form-control" id="rollno" placeholder="Enter roll number" name="rollno">
    </div>
	<div class="form-group">
      <label for="pwd">Contact No:</label>
      <input type="text" class="form-control" id="contact" placeholder="Enter contact number" name="contact">
    </div>
    <button type="submit" name="insert" class="btn btn-primary"> Insert </button>
  </form>
</div>
</div>

<br>

<footer>
	 <p class="p-3 bg-dark text-white text-center">@SmartClass</p>
</footer>
</body>

<?php

if(isset($_POST["insert"]))
{
   mysqli_query($link,"insert into table1 values(NULL,'$_POST[firstname]',
   '$_POST[middlename]','$_POST[lastname]','$_POST[gender]','$_POST[standard]','$_POST[rollno]',
   '$_POST[contact]','$_POST[email]')");
   
   ?>
   <script type="test/javascript">
   window.location.href=window.location.href;
   </script> 
<?php
}  
?>
</html>  


