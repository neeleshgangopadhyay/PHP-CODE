<?php
    
    include_once 'dbh.inc.php';
	
	$username = $_POST['wardid'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	
	$sql= "INSERT  INTO ward(ward_no,ward_type,pid) VALUES ($wardnum,'$wardtype',$patientid);";
	$result= mysqli_query($conn,$sql);
	
	header("Location:../ward.html?signup=success");
	
	
	
	