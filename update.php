<?php
$conn = new mysqli("localhost","root","","final");
if($conn->connect_error){
	die("Error:".$conn->connect_error);
}
else{
	$vuser = $_REQUEST['vuser'];
	$vpass = $_REQUEST['vpass'];
	if($vuser){
		$sql = "UPDATE login1 Set status='active' where vuser = '$vuser' and vpass = '$vpass' ";
		if($conn->query($sql)==TRUE){
			echo "<script>window.location='registeruser.php'</script>";
		}else{
			echo "Error";
		}
	}else{
		echo "Error..";
	}
}