<?php

include_once 'dbh.inc.php';

	$war=$_POST['war'];
	$wardnum = $_POST['wardid'];
	$wardtype = $_POST['wardtype'];
	$patientid = $_POST['patientid'];



$sql="UPDATE ward SET ward_no=$wardnum,wardtype='$wardtype',patientid= $patientid where wardid=$war";
$result= mysqli_query($conn,$sql);
header("Location:../ward.html?signup=success");
?>