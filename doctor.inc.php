<?php
    
    include_once 'dbh.inc.php';
	
	$firstname = $_POST['first_name'];
	$lastname = $_POST['last_name'];
	$specialization = $_POST['specialization'];
	$email    =       $_POST['email'] ;
	$address =        $_POST['address'];
	$phone   =          $_POST['phone'];
	$dob     =           $_POST['dob'];
	
	$sql= "INSERT  INTO ward(ward_no,ward_type,pid) VALUES ($wardnum,'$wardtype',$patientid);";
	$result= mysqli_query($conn,$sql);
	
	header("Location:../ward.html?signup=success");
	
	
	
?>	