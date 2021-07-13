<?php
if(isset($_POST['submit'])) {
$firstname =  $_POST['firstname'];
$middlename =  $_POST['middlename'];
$lastname =  $_POST['lastname'];
$rollno = $_POST['rollno'];
$standard = $_POST['standard'];
$date = $_POST['date'];
$subject = $_POST['subject'];
$attend = $_POST['attend'];

}
$dbconnect = mysqli_connect('localhost','root', '', 'student_attend');

$sql = mysqli_query($dbconnect, "insert into table1(firstname,middlename,lastname,
rollno,date,subject,attend)
 values('$firstname','$middlename','$lastname','$rollno','$standard',
'$date','$subject','$attend')" );
if($sql){
	echo "Data inserted successfully";
}
else {
	echo "failed to insert";
}
	
?>
