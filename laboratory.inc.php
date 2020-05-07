<?php
    
    include_once 'dbh.inc.php';
	
	$labid = $_POST['eai'];
	$firstname = $_POST['first_name'];
	
	$specialization = $_POST['specialization'];
	$email    =       $_POST['email'] ;
	$address  =        $_POST['address'];
    $emai     =       $_POST['emai'] ;
	
	
	$sql= "INSERT  INTO ward(ward_no,ward_type,pid) VALUES ($wardnum,'$wardtype',$patientid);";
	$result= mysqli_query($conn,$sql);
	
	header("Location:../ward.html?signup=success");
	
	
	
	