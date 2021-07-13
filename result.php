<?php
 $attendance = '';
 
 if(isset($_POST['result'])){
				 
				 $firstname = $_POST['firstname'];
				 $middlename = $_POST['middlename'];
				 $lastname = $_POST['lastname'];
				 $rollno = $_POST['rollno'];
				 $standard = $_POST['standard'];			
				 $attendance = $_POST['attendance'];
				 $totallecture = $_POST['totallecture'];
				
				 
				 $total_attend = $english + $hindi + $marathi + $science
				 + $maths + $socialstudies;
				 echo $total_attend;
				 
				 $average = $total_attend +100/140;
				 
                 			 }
							 
	           if ( $average >= 75){
				   $attend = "Attendance is Non-Defaulter";
			   }else if($average <= 75)	{
			       $attend = "Attendance is Defaulter";
			   }			   
 ?>
 
 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
      <link rel ="stylesheet" type="text/css" href="bootstrap.min.css">
	 
</head>
<body>
   <h1> This is Result Page </h1>
<div class="container" style="margin-top: 10%">
<table class="table text-center " border ="5">
 <thead class="thead-dark">
   <tr>
     <th> First Name </th>
	 <th> Middle Name </th>
	 <th> Last Name </th>
	 <th> Roll no </th>
	 <th> Standard </th>
	 <th> Lecture </th>
	 <th> Total </th>
	 <th> Average </th>
	 
	</tr>
 </thead>
 <tbody>    
     <tr>
     <td> <?php echo $firstname?> </td>
	 <td> <?php echo $middlename ?> </td>
	 <td> <?php echo $lastname ?> </td>
	 <td> <?php echo $rollno ?> </td>
	 <td> <?php echo $standard ?> </td>
	 <td> <?php echo $totallecture ?> </td>	 
	 <td> <?php echo $total ?> </td>
	 <td> <?php echo $average . "%" ?> </td>
	 <td> <?php ?> </td>
	 </tr>

 </tbody>
</table>
</div> 
</body>
</html>	 
 