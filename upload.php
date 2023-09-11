<?php
 include 'admin/db_connect.php';

 if(isset($_POST["submit"])){
	$name = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$gender = $_POST["gender"];
	$series = $_POST["series"];
	$department = $_POST["department"];
	$company = $_POST["company_name"];
    
	$pname = rand(1000,10000)."-".$_FILES["image"]["name"];
	$tname = $_FILES["image"]["tmp_name"];

	// move_uploaded_file($tname,'admin/images/'.$pname);

	$targetWidth = 410;
    $targetHeight = 310;

	list($originalWidth, $originalHeight) = getimagesize($tname);
	// $aspectRatio = $originalWidth / $originalHeight;
	// Calculate new dimensions while maintaining aspect ratio
	// if ($targetWidth/$targetHeight > $aspectRatio) {
	// 	$newWidth = $targetHeight * $aspectRatio;
	// 	$newHeight = $targetHeight;
	// } else {
	// 	$newWidth = $targetWidth;
	// 	$newHeight = $targetWidth / $aspectRatio;
	// }
	
	$ext = pathinfo($pname, PATHINFO_EXTENSION);
	// Create a new image with the calculated dimensions
	$newImage = imagecreatetruecolor($targetWidth, $targetHeight);
	
	// Load the uploaded image
	if($ext == "jpg" || $ext == "jpeg"){
		$sourceImage = imagecreatefromjpeg($tname);
	}
	else{
		$sourceImage = imagecreatefrompng($tname);
	}
	
	// // Resize the image
	imagecopyresampled($newImage, $sourceImage, 0, 0, 0, 0, $targetWidth, $targetHeight, $originalWidth, $originalHeight);

	imagepng($newImage,'admin/assets/uploads/'.$pname);
	imagedestroy($sourceImage);
    imagedestroy($newImage);

	$sql = "INSERT INTO alumni (name,email,password,image,gender,department,series,company_name) VALUES ('$name','$email','$password','$pname','$gender','$department','$series','$company')";

	if(mysqli_query($conn,$sql)){
		echo "Data Uploaded Succesfully";
		header('Location: login.php?Signed_Up_Successful');
	}
	else{
		echo "Error!";
	}
 }
?>