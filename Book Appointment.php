<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dental Care Clinic</title>
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
		<div style="padding-left:30px;">
    <a href="Check Appointment.php">
        <button type="button" class="btn hover-danger btn-outline-danger btn btn-danger text-white btn-xl" style="font-size:15px; display: inline-block; padding: 17px 52px; margin:27px 40px 50px 0;">
            Check Appointment
        </button>
    </a>
</div>

    <div class="container">
        <h1>Dentist Appointment Form</h1>
        <form action="" method="post">
            <?php
            include('connected.php');		
            if(isset($_POST['sub'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $date = $_POST['date'];
                $time = $_POST['time'];
                $notes = $_POST['notes'];
                
                $check = "SELECT * FROM patient WHERE Email='$email' AND Date='$date' AND Time='$time'";
    $result = $conn->query($check);

    if ($result->num_rows > 0) {
        echo "<button type='button' class='btn btn-warning btn-lg'>Appointment already booked for this time</button>";
    } else {
        $insert = "INSERT INTO patient (Name, Email, Phone, Date, Time, Notes) VALUES ('$name', '$email', '$phone', '$date', '$time', '$notes')";
        
        if($conn->query($insert) === TRUE) {
            echo "<button type='button' class='btn btn-success btn-lg'>Appointment booked successfully</button>";
        } else {
            echo "Connection failed: " . $conn->error;
        }
    }
}
            ?>
			
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email">

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="date">Preferred Appointment Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="time">Preferred Appointment Time:</label>
            <input type="time" id="time" name="time" required>

            <label for="notes">Additional Notes:</label>
            <textarea id="notes" name="notes"></textarea>

            <button type="submit" name="sub">Submit Appointment</button>
        </form>
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
