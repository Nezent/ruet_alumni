<?php
 include 'admin/db_connect.php';

 if(isset($_POST["register"])){
	$name = $_POST["name"];
	$email = $_POST["email"];
	$department = $_POST["department"];

	$sql = "INSERT INTO registers (name,email,department) VALUES ('$name','$email','$department')";

	if(mysqli_query($conn,$sql)){
		echo "Registered Succesfully";
		header('Location: confirm.html?Registration_Successful');
	}
	else{
		echo "Error!";
	}
 }
?>