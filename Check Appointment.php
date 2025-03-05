
<html>
<head>
  <title>Login Page</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="book.css">
</head>
<body>
	 <header>
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
	

   <div class="container">
        <h1>cheack Appointment</h1>
        <form action="" method="post">
		<?php session_start();
  include('connected.php');
 ?>
		<label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>
		<label for="date">Preferred Appointment Date:</label>
        <input type="date" id="date" name="date" required>
		<button type="submit" name="sub">Check Appointment</button>
        </form>
    </div>
  <?php
  
		
		
	
  // Check if the form is submitted
  if (isset($_POST['sub'])) {
	 
    
  
    
    // Retrieve username and password from form
    $NAME=$_SESSION['name'] = $_POST['name'];
    $DATE=$_SESSION['date'] = $_POST['date'];
  

    // Sanitize inputs (optional but recommended)
    $username = mysqli_real_escape_string($conn, $username);
    // Note: Password should be hashed and stored securely, not plain text
    
    // Create a query to fetch user data (consider using prepared statements for security)
    $query = "SELECT * FROM patient WHERE Name='$NAME' AND Date='$DATE'";
    
    // Execute query
    $result = mysqli_query($conn,$query);
    
    // Check if query executed successfully
    if ($result) {
      // Check if user exists
      $total = mysqli_num_rows($result);
	  
	  if($total == 1)
	  {
		   while ($row = $result->fetch_assoc()) {
		  $_SESSION['name'] = $name;
		 

			$_SESSION['id'] = $row['id'];
			$_SESSION['name'] = $row['name'];
			$_SESSION['email'] = $row['Email'];
			$_SESSION['phone'] = $row['Phone'];
			$_SESSION['date'] = $row['Date'];
			$_SESSION['time'] = $row['Time'];
			$_SESSION['notes'] = $row['Notes'];

		}
		  header('location:view.php');
	  }
	  else{
		  echo"login failed";
	  }
	 
		  
    }
  }
  ?>
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
