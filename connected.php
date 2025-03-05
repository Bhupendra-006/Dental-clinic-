<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="formdb";
	
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	
	if($conn->connect_error){
		echo"connection failed";}
	else{
		echo"<img src='ckd.png' height='25px' width='30px'>";}	
	?>