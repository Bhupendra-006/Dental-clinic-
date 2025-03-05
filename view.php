<html>
<head>
	<head>
		 <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
			 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
			
	 <style>
        .bordered-div {
            border: 2px solid black;
            padding: 15px;
            margin: 20px;
			width:40%;
        }
    </style>
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><img src="logo.webp"  height="100px" width="100px" alt="logo"></a></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="Book Appointment.php">Book Appointment</a></li>
                </ul>
            </div>
        </nav>

<?php


session_start();
echo"<div border'2px solid black' >";
include('connected.php');?>
	
	

		
<!--<div align="center" border="2px solid black" > -->
<?php
	
  $id = $_SESSION['id'];
 $uname=$_SESSION['name'] ;
 $uemail=$_SESSION['email'];
 $uphone=$_SESSION['phone'];
 $udate=$_SESSION['date'];
$utime= $_SESSION['time'];
$unotes = $_SESSION['notes'];

 
 ?>
 <div class="container mt-4">
            <div class="jumbotron">
        <h3>
            Name: <?php echo htmlspecialchars($uname); ?><br>
            Email: <?php echo htmlspecialchars($uemail); ?><br>
            Phone Number: <?php echo htmlspecialchars($uphone); ?><br>
            Date: <?php echo htmlspecialchars($udate); ?><br>
            Time: <?php echo htmlspecialchars($utime); ?><br>
            Notes: <?php echo htmlspecialchars($unotes); ?><br>
        </h3>
    </div>
    </div>

 





 



	
		
		

	    <div class="container-fluid bg-dark text-white section-padding">
        <div class="row">
            <!-- First Column -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="section-padding">
                    <a href="#" class="brand-logo">
                        <img src="logo.webp" height="100px" width="100px" alt="logo" style="max-width: 100%; height: auto; margin-top:20px;">
                    </a>
                    <h5>
                        Pellentesque justo lectus, a ipsum morbi at dui at, libfusceagnaliquet ridiculus lacus euismod porttiolor nec vestilum sed aliqua, sem mauris morbi. Pellen..
                    </h5>
                </div>
            </div>
            <!-- Second Column -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="section-padding">
                    <h3 style="margin:20px;">GET IN TOUCH</h3>
                    <p> Dental Care Clinic Khairthal 301404</p>
                    <p><a href="mailto:bkssbkss9950@gmail.com">bkssbkss9950@gmail.com</a></p>
                    <p>Info@DentalCareClinic.ca</p>
                    <p><a href="tel:9950300842">9950300842</a></p>
                    <p><a href="https://wa.me/9950300842/?text=Hello%20need%20your%20help">WhatsApp</a></p>
                </div>
            </div>
            <!-- Third Column -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="section-padding">
                    <h3 style="margin:20px;">USEFUL LINKS</h3>
                    <a href="about.php"><p>About</p></a>
                    <a href="services.php"><p>Dental Service</p></a>
                    <a href="contact.php"><p>Contact</p></a>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Dental Care Clinic. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>

	</body>
</html>	
		
		

    
    
	