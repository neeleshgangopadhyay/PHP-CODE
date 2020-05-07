<?php
    
    include_once 'dbh.inc.php';
	
	$labid = $_POST['patientid'];
	$firstname = $_POST['record'];
	
	$specialization = $_POST['lrecord'];
	
	
	$sql= "INSERT  INTO ward(ward_no,ward_type,pid) VALUES ($wardnum,'$wardtype',$patientid);";
	$result= mysqli_query($conn,$sql);
	
	header("Location:../prescription.html?signup=success");
	
	
	
	