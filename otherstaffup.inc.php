<?php
    
    include_once 'dbh.inc.php';
	 $imp= $_POST['special'];
	$firstname = $_POST['first_name'];
	$lastname = $_POST['last_name'];
	$specialization = $_POST['specialization'];
	$email    =       $_POST['email'] ;
	$address  =        $_POST['address'];
	$phone  =          $_POST['phone'];
	$dob   =           $_POST['dob'];
$sql="UPDATE ward SET ward_no=$wardnum,wardtype='$wardtype',patientid= $patientid where wardid=$war;";
	$result= mysqli_query($conn,$sql);
	
	header("Location:../otherstaff.html?signup=success");
	
	
	
	