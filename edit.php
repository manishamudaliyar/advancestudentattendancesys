
<?php
include "connection.php";


$id=$_GET["id"];

$firstname="";
$middlename="";
$lastname="";
$gender="";
$standard="";
$rollno="";
$contact="";
$email="";

$res=mysqli_query($link, "select * from table1 where id=$id");
while($row=mysqli_fetch_array($res))
{
$firstname=$row["first_name"];
$middlename=$row["middle_name"];
$lastname=$row["last_name"];
$gender=$row["gender"];
$standard=$row["standard"];
$rollno=$row["roll_no"];
$contact=$row["contact"];
$email=$row["email"];

}	
?>


<html lang="en">
<head>
  <title>Smart classes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

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
   
  <h2>Update Here:-</h2>
  <br>
  <form action="" name="form1" method="post">
    <div class="form-group">
      <label for="email">First Name:</label>
      <input type="text" class="form-control" id="firstname" placeholder="Enter first name" name="firstname" value="<?php echo $firstname; ?>">
    </div>
	<div class="form-group">
      <label for="email">Middle Name:</label>
      <input type="text" class="form-control" id="middlename" placeholder="Enter middle name" name="middlename" value="<?php echo $middlename; ?>">
    </div>
	<div class="form-group">
      <label for="email">Last Name:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter last name" name="lastname" value="<?php echo $lastname; ?>">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email id" name="email" value="<?php echo $email; ?>">
    </div>
	<div class="form-group">
      <label for="email">Gender: </label>
      <input type="radio" name="gender" value="male"> Male <input type="radio" name="gender" value="female"> Female <br>
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
      <label for="email">Roll No:</label>
      <input type="text" class="form-control" id="rollno" placeholder="Enter roll number" name="rollno" value="<?php echo $rollno; ?>">
    </div>
	<div class="form-group">
      <label for="pwd">Contact No:</label>
      <input type="text" class="form-control" id="contact" placeholder="Enter contact number" name="contact" value="<?php echo $contact; ?>">
    </div>
    
	<button type="submit" name="update" class="btn btn-primary"> Update </button>
	
  </form>
</div>
</div>

</body>

<?php
if(isset($_POST["update"]))
{
  $firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$standard=$_POST['standard'];
$rollno=$_POST['rollno'];
$contact=$_POST['contact'];
$email=$_POST['email'];
   
   $query="update table1 set first_name='$firstname',middle_name='$middlename',last_name='$lastname',gender='$gender',
   standard='$standard',roll_no='$rollno',contact='$contact',email='$email' where id=$id";
  $res=mysqli_query($link,$query);
   ?>
<script type="text/javascript">
window.location="studupdate.php";

</script>
<?php
   
}	
?>
</html>