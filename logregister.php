<?php 
	
	$fname = $_POST["firstname"];
	$lname = $_POST["lastname"];
	$brihtday = $_POST["BRIHTDAY"];
	$email = $_POST["EMAIL"];
	$phone = $_POST["PHONE"];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Oshaicecream";

	$conn = new mysqli($servername,$username,$password,$dbname);

	if($conn->connect_error){
		die("con faile:" .$conn->connect_error);
	}else {
		echo "OK";

		$A = rand(10000000,99999999);

		$sql = "INSERT INTO `Member_info` (`Member_ID`, `Member_fname`, `Member_lname`, `Member_brithday`, `Member_email`, `Member_phone`) VALUES ('".$A."', '".$fname."', '".$lname."', '".$brihtday."', '".$email."', '".$phone."')";

		$result = $conn->query($sql);
		header('Location: Home.php');
		$conn->close();
	}


 ?>