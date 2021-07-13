<?php

include "connpartisubj.php";

?>

<html lang="en">
<head>
  
  <title>Smart Class</title>
  <meta charset="utf-12">
  
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
  <h1 class="bg-secondary font-weight-bold text-white" align="center"><b>SMART CLASS</b></h1>
  <br>
   <title>Attendance Details</title>
   
	<title>Details</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
   <script type = "text/javacript" src="jquery-1.12.4.js"></script>
  <script type = "text/javacript" src="js/jquery-ui.js"></script>
  <script type="text/javacript">
  
    $(function(){
	 $( "#date" ).datepicker();
	 });
	 </script>
</head>
<body>
<nav class = "navbar navbar-inverse">
  <div class="container-fluid">
     
  <div>  
</nav>
<div class="container">
<h3 style="text-align:center:font-weight: bold;"> Particular Subject Attendance Details</h3>
<div class="row">

<form class= "form-horizontal" method="POST">

<br>  

 <div class="form-group">
  <label class="col-lg-40 control-label"> Roll No </label>
  <div class="col-lg-40">
    <input type="text" class="form-control" name="rollno" placeholder="Roll No">
  </div>
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
  <label class="col-lg-100 control-label">Subjects</label>
  <div class="col-lg-100">
    <select class="subjects" name="subjects">
	    <option>Select</option>
		<option value="English">English</option>
		<option value="Marathi">Marathi</option>
		<option value="Hindi">Hindi</option>
		<option value="Science">Science</option>
		<option value="Maths">Maths</option>
		<option value="Social Studies">Social Studies</option>
     </select>
   </div>
 </div> 
			
 <div class="form-group">
  <label class="col-lg-40 control-label"> Date </label>
  <div class="col-lg-40">
    <input type="date" class="form-control" name="date" placeholder="Date">
  </div>
 </div>
 
 <div class="form-group">
  <label class="col-lg-40 control-label"> Attendance </label>
  <div class="col-lg-40">
    <input type="radio" name="attend" value="1">Present
	<input type="radio" name="attend" value="0" checked="true">Absent
  </div>
 </div>

<button type="submit" name="insert" class="btn btn-primary"> Submit </button>
	
  </div>
 </div> 

 </div>
 </section>
  </form>
</div>

<br>
	  
</body>

<?php

if(isset($_POST["insert"]))
{
	$rollno=$_POST['rollno'];
	$standard=$_POST['standard'];
	$subjects=$_POST['subjects'];
	$date=$_POST['date'];
	$attend=$_POST['attend'];
	
   mysqli_query($link,"insert into partisubj values('$rollno',
   '$standard','$subjects','$date','$attend')");
   
   echo mysqli_error($link);
   
   
   ?>
   <script type="test/javascript">
  window.location.href=window.location.href;
   </script> 
   <?php
}  
?>

</html>
