<?php


include "connattendence.php";

?>

<!doctype html>
<html>
<head>

<html lang="en">
  
  <title>Smart Class</title>
  <meta charset="utf-8">
  
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel ="stylesheet" type="text/css" href="bootstrap.min.css">
 </head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Smart Class</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
        <a class="nav-link" href="partisubj.php">Subject Details</a>
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
   <title>Attendance Details</title>
   
   <br> 

   
   <div class = "col-sm-12 m-auto">
   <form method="post" action="result.php" class="form-group">
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
      <label for="email">Roll no:</label>
      <input type="text" class="form-control" id="rollno" placeholder="Enter Roll no" name="rollno">
    </div>
	
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
	
	<div class="form-group">
      <label for="email">Lecture:</label>
      <input type="text" class="form-control" id="totallecture" placeholder="Enter lecture in number" name="totallecture">
    </div>
	
	<div class="form-group">
      <label for="email">Total Lectures:</label>
      <input type="text" class="form-control" id="total" name="total">
    </div>
	
	<div class="form-group">
      <label for="email">Average:</label>
      <input type="text" class="form-control" id="average" name="average">
    </div>
	
	
  
     <br>
   <tr>
   <td><input type ="submit" name="result" value="Check Result" class="btn btn-success"></td>
   </tr>
   <br>
   </br>
   
   
   
 <footer>
   <p class="p-3 bg-dark text-white text-center">@SmartClass</p>
</footer>    	   

   </form>
   </div>  
   </body>
   
   <?php

if(isset($_POST["result"]))
{
	$firstname=$_POST['firstname'];
	$middlename=$_POST['middlename'];
	$lastname=$_POST['lastname'];
	$rollno=$_POST['rollno'];
	$standard=$_POST['standard'];
	$totallecture=$_POST['totallecture'];
	$total=$_POST['total'];
	$average=$_POST['average'];
	
   mysqli_query($link,"insert into result values('$firstname','$middlename',
   '$lastname','$rollno','$standard','$attendence''$totallecture',
   '$total','$average')");
   
   echo mysqli_error($link);
   
   
   ?>
   <script type="test/javascript">
  window.location.href=window.location.href;
   </script> 
   <?php
}  
?>   
   </html>
   