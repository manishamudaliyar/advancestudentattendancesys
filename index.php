<?php
include "connection.php";

?>


<html lang="en">
<head>
  
  <title>Smart Class</title>
  <meta charset="utf-8">
  
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel ="stylesheet" type="text/css" href="bootstrap.min.css">

<style>
  .carousel-caption p{
	  color: #fff;
	  font-size:35px;
  }
  
</style>

</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Smart Class</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/student.jpg"  alt="Dadar" width="1400" height="500">
      <div class="carousel-caption">
        <h3>Dadar</h3>
        <p>Every form of True Education Trains the student in Self-Reliance</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/student1.jpg" alt="Thane" width="1400" height="500">
      <div class="carousel-caption">
        <h3>Thane</h3>
        <p>The Roots of Education are Bitter,
		but the fruit is Sweet</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/Booksale.jpg" alt="Vashi" width="1400" height="500">
      <div class="carousel-caption">
        <h3>Vashi</h3>
        <p>Intelligence plus charater that is the goal of true Education</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>
	  <div class="container-fluid">

		<div class="text-center">
			<h2>WELCOME TO Smart Class</h2>
			<p>SmartClass is the leading leader in education
			rendering personalized learning experiences to lots of students 
			and business professionals in infinite subjects in Mumbai. 
			SmartClass is an platform that connects learners/students 
			to very qualified and certified private tutors/experts both online
			and offline.SmartClass helps learners/students/parents to find and 
			book the best private tutors/experts for ranges of subjects to reach
			their educational goals. Therefore, SmartClass provides an easier 
			way to connect learners/students with experts.SmartClass aims to
			support as many learners as possible to achieve their own learning goals.
			"Education is the foundation upon which We build our Futre".
			</p>
			</div>
	 </div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our Services</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card" style="width:400px">
<img class="card-img-top" src="images/teaching.jpg" alt="Card image">
					<div class="card-body">
						<h4 class="card-title">Teacher services</h4>
						<p class="card-text">We only work with trusted Tutors
                       Every tutor is experienced, cheerful, and thoroughly vetted for the highest quality.</p>
						</div>
				</div>
			</div>

            <div class="col-lg-4 col-md-4 col-12">
				<div class="card" style="width:400px">
<img class="card-img-top" src="images/classroom.jpg" alt="Card image">
					<div class="card-body">
						<h4 class="card-title">Classroom </h4>
						<p class="card-text">Smart Class brings to you an unparalleled, highly interactive, instructor 
						– led, face-to-face training experience in our Classroom Training at our Sate-of-the-Art training centers.
In our training centers, you’ll find state of the Art infrastructures, a comfortable, ready-to-learn atmosphere 
where you’ll receive engaging and applicable instruction, interact with your peers and gain the skills that matter in the real world.
Our expert instructors bring their vast experience to teach you key concepts and practical skills you can immediately use in studies.</p>
						
					</div>
				</div>
			</div>

            <div class="col-lg-4 col-md-4 col-12">
				<div class="card" style="width:400px">
<img class="card-img-top" src="images/Online.jpg" alt="Card image">
					<div class="card-body">
						<h4 class="card-title">E-Learning and other activities</h4>
						<p class="card-text">We provide the same superior content as in our instructor-led training delivered via 
						the Internet so you can learn at your own pace.Our Online Self learning delivery format includes many unit
						-wise titles designed to support your learning initiatives by focusing on both interactivity and expert 
						instruction. We combined the knowledge of our subject matter experts with sophisticated development tools 
						and techniques to create interactive self-paced content that provides flexibility.</p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="my-3">
  <div class="py-3">
    <h2 class="text-center">Contact</h2>
  </div>
    <div class="container-fluid">

    <div class="text-center">
            <p>LOCATION
Smart Class Ltd,Office No. 220, 2nd Floor, Neptune’s Flying Colors, 
Near Check Naka Bus Depot, L.B.S Cross Road, Mulund (W), Mumbai 400080, India.
    <br> Contact:+91-22-61297700/800/900</p>
      
    </div>
   </div>
</section>



<footer>
   <p class="p-3 bg-dark text-white text-center">@SmartClass</p>
</footer>    	   

        </form>

</head>

<br>
</div>
</div>

