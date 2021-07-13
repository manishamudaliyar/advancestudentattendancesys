<?php
include "connection.php";
?>

<!DOCTYPE html>
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
   <h3>Student Update and Delete Details:- </h3>
   <br>
  
  <div class="col-lg-12">

<table class="table table-bordered">
    <thead>
      <tr>
	  <th>Sr No.</th>
        <th>Firstname</th>
		<th>Middlename</th>
        <th>Lastname</th>
        <th>Email</th>
		<th>Gender</th>
		<th>Standard</th>
		<th>Roll No.</th>
		<th>Contact No.</th>
		<th>Edit</th>
		<th>Delete</th>
      </tr>
    </thead>
    
	<tbody>
     
<?php	
$res=mysqli_query($link,"select * from table1");
while($row=mysqli_fetch_array($res))
  {
    echo "<tr>";
    echo "<td>"; echo $row["id"]; echo "</td>";
    echo "<td>"; echo $row["first_name"]; echo "</td>";
    echo "<td>"; echo $row["middle_name"]; echo "</td>";
    echo "<td>"; echo $row["last_name"]; echo "</td>";
    echo "<td>"; echo $row["email"]; echo "</td>";
    echo "<td>"; echo $row["gender"]; echo "</td>";
	echo "<td>"; echo $row["standard"]; echo "</td>";
	echo "<td>"; echo $row["roll_no"]; echo "</td>";
    echo "<td>"; echo $row["contact"]; echo "</td>";
    echo "<td>"; ?> <a href='<?php echo "edit.php?id=".$row["id"]; ?>'>
	<button type="button" class="btn btn-success">Edit</button></a>
	<?php echo "</td>";
	echo "<td>"; ?> <a href='<?php echo "delete.php?id=".$row["id"]; ?>'>
	<button type="button" class="btn btn-danger">Delete</button></a>
	<?php echo "</td>";
	
	
	echo "</tr>";

  }
	
?>
	</tbody>
  </table>
</section>
</div>
   
   <footer>
	 <p class="p-3 bg-dark text-white text-center">@SmartClass</p>
</footer>

  </body>
  
 <?php

if(isset($_GET["delete"]))
{
	mysqli_query($link, "delete from table1 where firstname='$_POST[firstname]'")
	or die(mysqli_error($link));
	
	?>
   <script type="test/javascript">
   window.location.href=window.location.href;
   </script>
   <?php
}  

if(isset($_POST["update"]))
{
	mysqli_query($link, "update table1 set firstname='$_POST[lastname]' where firstname='$_POST[firstname]'")
	or die(mysqli_error($link));
		
  ?>
   <script type="test/javascript">
   window.location.href=window.location.href;
   </script> 
   
   <?php
}  
?>  

</html>


